<?php
namespace Sotbit\Seometa\Helper;

use Bitrix\Main\Config\Option;
use Sotbit\Seometa\Condition\Rule;
use Sotbit\Seometa\Orm\ConditionTable;
use Sotbit\Seometa\Filter\SmartFilter;
use Sotbit\Seometa\Generator\GeneratorFactory;
use Sotbit\Seometa\Link\AbstractWriter;
use Sotbit\Seometa\Property\PropertySetIterator;
use Sotbit\Seometa\Section\SectionCollection;
use Sotbit\Seometa\Url\CatalogUrl;
use Sotbit\Seometa\Url\ChpuUrl;

/**
 * Class Linker
 * For generating chpu URLs
 *
 * @package Sotbit\Seometa\Helper
 */
class Linker
{
    /**
     * Instance of Linker object
     *
     * @var bool
     */
    private static $instance = false;

    /**
     * Rule for generating
     *
     * @var Rule
     */
    private $rule;

    /**
     * Property iterator
     *
     * @var PropertySetIterator
     */
    private $propertySetIterator;

    /**
     * Linker constructor.
     */
    private function __construct(
    ) {
        $this->rule = new Rule();
        $this->propertySetIterator = new PropertySetIterator();
    }

    /**
     * Is create and return instance of object this class
     *
     * @return Linker
     */
    public static function getInstance(
    ) {
        if (self::$instance === false) {
            self::$instance = new Linker();
        }

        return self::$instance;
    }

    /**
     * Get sections list by condition ID
     *
     * @param false $id
     * @return array|false|mixed
     */
    public function getSectionList(
        $id = false
    ) {
        if ($id === false) {
            return false;
        }

        $arCondition = ConditionTable::getById($id)->fetch();
        $ConditionSections = unserialize($arCondition['SECTIONS']);

        // If dont check sections
        if (!is_array($ConditionSections) || count($ConditionSections) < 1) {
            $ConditionSections = [];
            $rsSections = \CIBlockSection::GetList(
                [
                    'SORT' => 'ASC'
                ],
                [
                    'ACTIVE' => 'Y',
                    'IBLOCK_ID' => $arCondition['INFOBLOCK']
                ],
                false,
                [
                    'ID'
                ]
            );

            while ($arSection = $rsSections->GetNext()) {
                $ConditionSections[] = $arSection['ID'];
            }
        }

        return $ConditionSections;
    }

    /**
     * Get condition list by site ID
     *
     * @param $site_id
     * @return array
     */
    public function getConditionList(
        $site_id
    ) {
        $result['sections'] = $result['conditions'] = [];
        $res = ConditionTable::getList([
            'filter' => [
                'ACTIVE' => 'Y',
                '!=NO_INDEX' => 'Y'
            ],
            'select' => [
                'ID',
                'SITES',
                'SECTIONS'
            ]
        ]);

        while ($item = $res->fetch()) {
            if(in_array($site_id, unserialize($item['SITES']))) {
                $result['conditions'][] = $item['ID'];
                $item['SECTIONS'] = unserialize($item['SECTIONS']);
                if(is_array($item['SECTIONS']) && !array_intersect($result['sections'], $item['SECTIONS'])) {
                    $result['sections'] = array_merge($result['sections'], $item['SECTIONS']);
                }
            }
        }

        $result['sections'] = array_unique($result['sections']);

        return $result;
    }

    /**
     * Is generate entities (chpu url, tag, xml url)
     *
     * @param AbstractWriter $writer
     * @param false $conditionId
     * @param array $sectionList
     * @param int $countTagsPerCond
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function generate(
        AbstractWriter $writer,
        $conditionId = false,
        $sectionList = array(),
        $countTagsPerCond = 0
    ) {
//        $count = 0;
        if(!$conditionId) {
            return;
        }

        $countGeneratedTags = 0;
        $result = [];
        $smartFilter = new SmartFilter($conditionId);
        if(unserialize($smartFilter->getCondition()->SITES)) {
            $siteID = unserialize($smartFilter->getCondition()->SITES)[0];
        }

        $generator = GeneratorFactory::create($smartFilter->getCondition()->FILTER_TYPE, $siteID);
        $chpuGenerator = GeneratorFactory::create('chpu', $siteID);
        $catalogUrl = new CatalogUrl($smartFilter->getCondition(), $siteID);
        $chpuUrl = new ChpuUrl(
            $smartFilter->getCondition()->getMeta('TEMPLATE_NEW_URL'),
            $smartFilter->getCondition()->getMeta('SPACE_REPLACEMENT')
        );
        $propertyCollection = $smartFilter->getPropertyCollection();
        $conditionSections = $sectionList;
        if(!$sectionList) {
            $conditionSections = $smartFilter->getCondition()->getSections();
        }

        $propertyManager = $smartFilter->getPropertyManager();
        $priceManager = $smartFilter->getPriceManager();
        $parsedRule = $this->rule->parse($smartFilter->getCondition());
        if(!$parsedRule || !$conditionSections) {
            return;
        }

//        $propertyManager->getSetedProperties($parsedRule);

        if($catalogUrl->hasSectionPlaceholders() || $chpuUrl->hasSectionPlaceholders()) {
            SectionCollection::getInstance()->setCollectionById($conditionSections);
        }

        foreach($conditionSections as $sectionId) {
            $chpuUrl->cleanTemplate(true);
            $catalogUrl->cleanTemplate(true);
            $propertyCollection->clearValue();
            if(is_array($propertyCollection->getData())) {
                $propertyManager->fillPropertyValues($propertyCollection,
                    $sectionId);
            }

            /*if($propertyCollection->haveEmpty()) {
                continue;
            }*/

            $sectionRule = $parsedRule->filter($propertyCollection);
            $urlName = SectionCollection::getInstance()->getSectionById($sectionId)->NAME.' ';
            $priceManager->fillPriceValues($sectionRule, $sectionId);
            foreach($sectionRule as $propertySet) {
                $this->propertySetIterator->setProperties($propertySet, $propertyCollection);
                $catalogUrl->setSectionPlaceholdersIfNeed($sectionId);
                $chpuUrl->setSectionPlaceholdersIfNeed($sectionId);
                /*$this->propertySetIterator->rewind();*/
                while($this->propertySetIterator->getNext()) {
                    /*$propertySet->show();
                    $count++;
                    continue;*/
                    if(!$propertySet->isValid()) {
                        continue;
                    }

                    $count = $propertySet->getCountProducts($sectionId);
                    if ($count < 1) {
                        continue;
                    }

                    $chpuUrl->replaceFromSet($propertySet, $chpuGenerator);
                    $catalogUrl->replaceFromSet($propertySet, $generator);
                    /*$propertySet->show();
                    continue;*/

                    $result['product_count'] = $count;
                    $result['real_url'] = $catalogUrl->getMask();
                    $result['name'] = $urlName . $propertySet->getPropertyNames();
                    $result['properties'] = $propertySet->getPropertyValues();
                    $result['new_url'] = mb_strtolower($chpuUrl->getMask());
                    $result['section_id'] = $sectionId;
                    $result['active'] = Option::get("sotbit.seometa", "IS_SET_ACTIVE", 'N', $siteID);
                    $result['condition_id'] = $conditionId;
                    $result['iblock_id'] = $smartFilter->getCondition()->INFOBLOCK;
                    $result['strict_relinking'] = $smartFilter->getCondition()->STRICT_RELINKING;
                    $result['site_id'] = $smartFilter->getCondition()->SITES;

                    $arCondition['ID'] = $smartFilter->getCondition()->ID;
                    $arCondition['TAG'] = $smartFilter->getCondition()->TAG;
                    $arCondition['CHANGEFREQ'] = $smartFilter->getCondition()->CHANGEFREQ;
                    $arCondition['PRIORITY'] = $smartFilter->getCondition()->PRIORITY;
                    $arCondition['META'] = $smartFilter->getCondition()->META;
                    $arCondition['DATE_CHANGE'] = $smartFilter->getCondition()->DATE_CHANGE;
                    $arCondition['TYPE_OF_INFOBLOCK'] = $smartFilter->getCondition()->TYPE_OF_INFOBLOCK;
                    $arCondition['INFOBLOCK'] = $smartFilter->getCondition()->INFOBLOCK;
                    $arCondition['SITES'] = $smartFilter->getCondition()->SITES;

                    $writer->SetCondition($arCondition);
                    /*echo '<pre>';
                    print_r($result);*/

                    $chpuUrl->cleanTemplate();
                    $catalogUrl->cleanTemplate();

                    $arSites = unserialize($result['site_id']);
                    foreach ($arSites as $siteId) {
                        $result['site_id'] = $siteId;
                        $writeResult = $writer->Write($result);
                    }

                    if(
                        !$writeResult ||
                        !empty($countTagsPerCond) &&
                        ($countTagsPerCond - 1 <= $countGeneratedTags)
                    ) {
                        return false;
                    } else {
                        $countGeneratedTags++;
                    }
                }
                /*echo 'count -- ' . $count . PHP_EOL;*/
            }

            $sectionRule->remove();
        }
    }
}
