<?
namespace Sotbit\Seometa\Condition;

use Sotbit\Seometa\Property\PropertyCollection;
use Sotbit\Seometa\Property\PropertySet;
use Sotbit\Seometa\Property\PropertySetCollection;
use Sotbit\Seometa\Property\PropertySetEntity;

class Rule {
    private array $checkedProps = [];

    public function parse(
        Condition $condition
    ) {
        $rule = unserialize($condition->RULE);
        $cond = new \Sotbit\Seometa\Helper\Condition();
        $openCond = $cond->openGroups($rule);

        return $this->mapPropertySet($openCond['CHILDREN']);
    }

    private function checkCondition(
        $condition
    ) {
        return !isset($this->checkedProps[$condition['CLASS_ID']]);
    }

    private function saveContition(
        $conditon
    ) {
        if($conditon['DATA']['value'] === '') {
            $this->checkedProps[$conditon['CLASS_ID']] = true;
        }
    }

    private function isConditionRepeated(
        $condition
    ) {
        $result = true;
        if($this->checkCondition($condition)) {
            $this->saveContition($condition);
            $result = false;
        }

        return $result;
    }

    private function mapPropertySet(
        array &$conditions
    ) {
        $propertySetCollection = new PropertySetCollection();
        foreach ($conditions as $conditionSet) {
            $propertySet = new PropertySet();
            if (!$conditionSet) {
                return null;
            }

            foreach ($conditionSet as $key => $condition) {
                if($this->isConditionRepeated($condition)) {
                    if(count($conditionSet) - 1 !== $key) {
                        continue;
                    }

                    continue 2;
                }

                $propertySetEntity = new PropertySetEntity($condition);
                $propertySet->add($propertySetEntity);
            }

            $propertySetCollection->addSet($propertySet);
        }

        return $propertySetCollection;
    }
}