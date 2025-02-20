<?
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");

IncludeModuleLangFile( __FILE__ );

$moduleId = "sotbit.seometa";

if ($APPLICATION->GetGroupRight("sotbit.seometa") < "R") {
    $APPLICATION->AuthForm(GetMessage("ACCESS_DENIED"));
}

Loc::loadMessages(__FILE__);

require_once ($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_admin.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.$moduleId.'/classes/general/CModuleOptions.php');
require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$moduleId."/include.php");

if($REQUEST_METHOD == "POST" && mb_strlen( $RestoreDefaults ) > 0 && check_bitrix_sessid())
{
	COption::RemoveOption( $moduleId );
	$z = CGroup::GetList( $v1 = "id", $v2 = "asc", array(
			"ACTIVE" => "Y",
			"ADMIN" => "N"
	) );
	while( $zr = $z->Fetch() )
		$APPLICATION->DelGroupRight( $moduleId, array(
				$zr["ID"]
		) );
	if((mb_strlen( $Apply )>0)||(mb_strlen( $RestoreDefaults )>0))
		LocalRedirect( $APPLICATION->GetCurPage()."?lang=".LANGUAGE_ID."&mid=".urlencode( $mid )."&tabControl_active_tab=".urlencode( $_REQUEST["tabControl_active_tab"] )."&back_url_settings=".urlencode( $_REQUEST["back_url_settings"] ) );
	else
		LocalRedirect( $_REQUEST["back_url_settings"] );
}

$FilterType = array(
	"REFERENCE" => array(
		GetMessage($moduleId.'_FILTER_TYPE_bitrix_chpu'),
		GetMessage($moduleId.'_FILTER_TYPE_bitrix_not_chpu'),
		GetMessage($moduleId.'_FILTER_TYPE_misshop_chpu'),
		GetMessage($moduleId.'_FILTER_TYPE_combox_chpu'),
//		GetMessage($module_id.'_FILTER_TYPE_combox_not_chpu')
	),
    "REFERENCE_ID" => array(
		"bitrix_chpu",
		"bitrix_not_chpu",
		"misshop_chpu",
		"combox_chpu",
//		"combox_not_chpu"
	)
);

if(\Bitrix\Main\Loader::includeModule("currency")) {
    $arCurrencyTypes = [];

    $lcur = CCurrency::GetList(($by="name"), ($order="asc"), $lang);
    while($lcur_res = $lcur->Fetch()) {
        $arCurrencyTypes['REFERENCE'][] = "[" . $lcur_res['CURRENCY'] . "] " . $lcur_res['FULL_NAME'];
        $arCurrencyTypes['REFERENCE_ID'][] = $lcur_res['CURRENCY'];

        $baseCurrency = ($lcur_res['BASE'] == 'Y' ? $lcur_res['CURRENCY'] : '');
    }
}

$arTabs = array(
	array(
		'DIV' => 'edit1',
		'TAB' => GetMessage( $moduleId.'_edit1' ),
		'ICON' => '',
		'TITLE' => GetMessage( $moduleId.'_edit1' ),
		'SORT' => '10'
	),
);

$arGroups = array(
	'GROUP_SETTINGS' => array(
		'TITLE' => GetMessage( $moduleId.'_GROUP_SETTINGS' ),
		'TAB' => 0
	),
    'GROUP_SETTINGS_FOR_PROG' => array(
        'TITLE' => GetMessage( $moduleId.'_GROUP_SETTINGS_FOR_PROG' ),
        'TAB' => 0
    ),
);

$arOptions = array(
	'FILTER_TYPE' => array(
		'GROUP' => 'GROUP_SETTINGS',
		'TITLE' => GetMessage( $moduleId.'_FILTER_TYPE' ),
		'TYPE' => 'SELECT',
		'VALUES' => $FilterType,
		'DEFAULT' => 'bitrix_chpu',
		'REFRESH' => 'N',
		'SORT' => '1',
		'NOTES_ENUM' => GetMessage( $moduleId.'_FILTER_TYPE_NOTE' ),
	),
	'FILTER_SEF' => array(
		'GROUP' => 'GROUP_SETTINGS',
		'TITLE' => GetMessage( $moduleId.'_FILTER_SEF' ),
		'TYPE' => 'STRING',
		'DEFAULT' => '',
		'REFRESH' => 'N',
		'SORT' => '3',
		'NOTES_ENUM' => GetMessage( $moduleId.'_FILTER_SEF_NOTE' ),
	),
	'NO_INDEX_'.$site => array(
		'GROUP' => 'GROUP_SETTINGS',
		'TITLE' => GetMessage( $moduleId.'_NO_INDEX' ),
		'TYPE' => 'CHECKBOX',
		'REFRESH' => 'N',
		'SORT' => '5',
		'DEFAULT' => 'Y',
		'NOTES' => GetMessage( $moduleId.'_NO_INDEX_NOTE' ),
	),
	'SOURCE_'.$site => array(
		'GROUP' => 'GROUP_SETTINGS',
		'TITLE' => GetMessage( $moduleId.'_SOURCE' ),
		'TYPE' => 'TEXT',
		'REFRESH' => 'N',
		'SORT' => '10',
		'COLS' => 40,
		'ROWS' => 15,
		'DEFAULT' => "yandex.ru\ngoogle.ru\nwww.yahoo.com\nwww.rambler.ru",
		'NOTES' => GetMessage( $moduleId.'_SOURCE_NOTE' ),
	),
	'PAGENAV_'.$site => array(
		'GROUP' => 'GROUP_SETTINGS',
		'TITLE' => GetMessage( $moduleId.'_PAGENAV' ),
		'TYPE' => 'TEXT',
		'REFRESH' => 'N',
		'SORT' => '15',
		'COLS' => 40,
		'ROWS' => 1,
		'DEFAULT' => "",
		'NOTES' => GetMessage( $moduleId.'_PAGENAV_NOTE' ),
    ),
    'PAGINATION_TEXT_'.$site => array(
		'GROUP' => 'GROUP_SETTINGS',
		'TITLE' => GetMessage($moduleId . '_PAGINATION_TEXT'),
		'TYPE' => 'TEXT',
		'REFRESH' => 'N',
		'SORT' => '20',
		'COLS' => 40,
		'ROWS' => 1,
		'DEFAULT' => "",
		'NOTES' => GetMessage($moduleId . '_PAGINATION_TEXT_NOTE'),
    ),
	'USE_CANONICAL_'.$site => array(
		'GROUP' => 'GROUP_SETTINGS',
		'TITLE' => GetMessage( $moduleId.'_USE_CANONICAL' ),
		'TYPE' => 'CHECKBOX',
		'REFRESH' => 'N',
		'SORT' => '25',
		'DEFAULT' => 'Y',
	),
	'RETURN_AJAX_'.$site => array(
		'GROUP' => 'GROUP_SETTINGS',
		'TITLE' => GetMessage( $moduleId.'_RETURN_AJAX' ),
		'TYPE' => 'CHECKBOX',
		'REFRESH' => 'N',
		'SORT' => '25',
		'DEFAULT' => 'N',
		'NOTES' => GetMessage( $moduleId.'_RETURN_AJAX_NOTE' ),
	),
	'MANAGED_CACHE_ON' => array(
		'GROUP' => 'GROUP_SETTINGS',
		'TITLE' => GetMessage( $moduleId.'_MANAGED_CACHE_ON' ),
		'TYPE' => 'CHECKBOX',
		'REFRESH' => 'N',
		'SORT' => '25',
		'DEFAULT' => 'N',
	),
	'IS_SET_ACTIVE' => array(
		'GROUP' => 'GROUP_SETTINGS',
		'TITLE' => GetMessage( $moduleId.'_IS_SET_ACTIVE' ),
		'TYPE' => 'CHECKBOX',
		'REFRESH' => 'N',
		'SORT' => '25',
		'DEFAULT' => 'N',
	),
    'GENERATE_ALL_CONDITIONS' => array(
        'GROUP' => 'GROUP_SETTINGS_FOR_PROG',
        'TITLE' => GetMessage( $moduleId.'_GENERATE_ALL_CONDITIONS' ),
        'TYPE' => 'CHECKBOX',
        'REFRESH' => 'N',
        'SORT' => '25',
        'DEFAULT' => 'N',
        'NOTES' => GetMessage( $moduleId.'_GENERATE_ALL_CONDITIONS_NOTE' ),
    ),
    'FILTER_EXCEPTION_SETTINGS' => array(
        'GROUP' => 'GROUP_SETTINGS_FOR_PROG',
        'TITLE' => GetMessage( $moduleId.'_FILTER_EXCEPTION_SETTINGS' ),
        'TYPE' => 'TEXT',
        'REFRESH' => 'N',
        'SORT' => '150',
        'COLS' => 40,
        'ROWS' => 1,
        'DEFAULT' => "",
        'NOTES' => GetMessage( $moduleId.'_FILTER_EXCEPTION_SETTINGS_NOTE' ),
    ),
    'PARAMS_EXCEPTION_SETTINGS' => array(
        'GROUP' => 'GROUP_SETTINGS_FOR_PROG',
        'TITLE' => GetMessage( $moduleId.'_PARAMS_EXCEPTION_SETTINGS' ),
        'TYPE' => 'TEXT',
        'REFRESH' => 'N',
        'SORT' => '150',
        'COLS' => 40,
        'ROWS' => 1,
        'DEFAULT' => "",
        'NOTES' => GetMessage( $moduleId.'_PARAMS_EXCEPTION_SETTINGS_NOTE' ),
    ),
    'SEOMETA_SITEMAP_FILE_SIZE' => array(
        'GROUP' => 'GROUP_SETTINGS_FOR_PROG',
        'TITLE' => GetMessage( $moduleId.'_SITEMAP_FILE_SIZE' ),
        'TYPE' => 'STRING',
        'REFRESH' => 'N',
        'SORT' => '150',
        'COLS' => 40,
        'ROWS' => 1,
        'DEFAULT' => "50",
        'NOTES' => GetMessage( $moduleId.'_SITEMAP_FILE_SIZE_NOTE' ),
    ),
    'SEOMETA_SITEMAP_COUNT_LINKS' => array(
        'GROUP' => 'GROUP_SETTINGS_FOR_PROG',
        'TITLE' => GetMessage( $moduleId.'_SITEMAP_COUNT_LINKS' ),
        'TYPE' => 'STRING',
        'REFRESH' => 'N',
        'SORT' => '150',
        'COLS' => 40,
        'ROWS' => 1,
        'DEFAULT' => "50000",
        'NOTES' => GetMessage( $moduleId.'_SITEMAP_COUNT_LINKS_NOTE' ),
    ),
    'SEOMETA_SITEMAP_COUNT_LINKS_FOR_OPERATION' => array(
        'GROUP' => 'GROUP_SETTINGS_FOR_PROG',
        'TITLE' => GetMessage( $moduleId.'_SITEMAP_COUNT_LINKS_FOR_OPERATION' ),
        'TYPE' => 'STRING',
        'REFRESH' => 'N',
        'SORT' => '150',
        'COLS' => 40,
        'ROWS' => 1,
        'DEFAULT' => "10000",
        'NOTES' => GetMessage( $moduleId.'_SITEMAP_COUNT_LINKS_FOR_OPERATION_NOTE' ),
    ),
);

if(\Bitrix\Main\Loader::includeModule("currency")) {
    $arOptions['CURRENCY_TYPE'] = array(
        'GROUP' => 'GROUP_SETTINGS',
        'TITLE' => GetMessage( $moduleId.'_CURRENCY_TYPE' ),
        'TYPE' => 'SELECT',
        'VALUES' => $arCurrencyTypes,
        'DEFAULT' => $baseCurrency,
        'REFRESH' => 'N',
        'SORT' => '30',
        'NOTES_ENUM' => GetMessage( $moduleId.'_CURRENCY_TYPE_NOTE' ),
    );
}

if( CCSeoMeta::ReturnDemo() == 2){
    ?>
    <div class="adm-info-message-wrap adm-info-message-red">
        <div class="adm-info-message">
            <div class="adm-info-message-title"><?=Loc::getMessage("SEO_META_DEMO")?></div>
            <div class="adm-info-message-icon"></div>
        </div>
    </div>
    <?
}
if( CCSeoMeta::ReturnDemo() == 3 || CCSeoMeta::ReturnDemo() == 0)
{
    ?>
    <div class="adm-info-message-wrap adm-info-message-red">
        <div class="adm-info-message">
            <div class="adm-info-message-title"><?=Loc::getMessage("SEO_META_DEMO_END")?></div>
            <div class="adm-info-message-icon"></div>
        </div>
    </div>
    <?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
    return '';
}

$RIGHT = $APPLICATION->GetGroupRight( $moduleId );
if($RIGHT != "D")
{
    if(isset($_POST['SEOMETA_SITEMAP_FILE_SIZE']) && (intval($_POST['SEOMETA_SITEMAP_FILE_SIZE']) > 50 || intval($_POST['SEOMETA_SITEMAP_FILE_SIZE']) == 0)) {
        $_POST['SEOMETA_SITEMAP_FILE_SIZE'] = 50;
        $_REQUEST['SEOMETA_SITEMAP_FILE_SIZE'] = 50;
    }
    if(isset($_POST['SEOMETA_SITEMAP_COUNT_LINKS']) && (intval($_POST['SEOMETA_SITEMAP_COUNT_LINKS']) > 50000 || intval($_POST['SEOMETA_SITEMAP_COUNT_LINKS']) == 0)) {
        $_POST['SEOMETA_SITEMAP_COUNT_LINKS'] = 50000;
        $_REQUEST['SEOMETA_SITEMAP_COUNT_LINKS'] = 50000;
    }

	$showRightsTab = false;
	$opt = new CModuleOptions( $moduleId, $arTabs, $arGroups, $arOptions, $showRightsTab );
	$opt->ShowHTML();
}
$APPLICATION->SetTitle( GetMessage( $moduleId.'_TITLE' ) );

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");?>
