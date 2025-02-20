<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Как стать партнером");
?>Зарабатывайте вместе с FaMa Profi Centre

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	".default",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"ALL_URL" => "company/news/",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTION_NAME" => "N",
		"IBLOCK_ID" => "21",
		"IBLOCK_TYPE" => "aspro_next_catalog",
		"LIST_COLUMNS_COUNT" => "6",
		"OFFSET_MODE" => "N",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_ANGLE" => "Y",
		"SHOW_PARENT_NAME" => "Y",
		"TITLE_BLOCK" => "Новости",
		"TITLE_BLOCK_ALL" => "Все новости",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "TILE"
	)
);?><br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?><br>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>