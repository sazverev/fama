<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>




</div>
<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?global $arTheme, $isShowCatalogSections;?>
<?if($isShowCatalogSections):?>
	<?$APPLICATION->IncludeComponent("aspro:catalog.section.list.next", "front_sections_theme", array(
	"ADD_SECTIONS_CHAIN" => "N",
		"ALL_URL" => "catalog/",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "front_sections_theme",
		"COUNT_ELEMENTS" => "N",
		"DISPLAY_PANEL" => "N",
		"FILTER_NAME" => "arrPopularSections",
		"HIDE_SECTION_NAME" => "N",
		"IBLOCK_ID" => "21",
		"IBLOCK_TYPE" => "aspro_next_catalog",
		"SECTIONS_LIST_PREVIEW_DESCRIPTION" => "N",
		"SECTIONS_LIST_PREVIEW_PROPERTY" => "N",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "PICTURE",
			2 => "",
		),
		"SECTION_ID" => "84",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "N",
		"SHOW_SECTIONS_LIST_PREVIEW" => "N",
		"SHOW_SECTION_LIST_PICTURES" => "N",
		"TEMPLATE" => $arTheme["FRONT_PAGE_SECTIONS"]["VALUE"],
		"TITLE_BLOCK" => "Популярные категории",
		"TITLE_BLOCK_ALL" => "Весь каталог",
		"TOP_DEPTH" => "",
		"VIEW_MODE" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>



























<?endif;?>
<br><?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>

<?global $isShowBlog;?>
<?if($isShowBlog):?>
	<?$APPLICATION->IncludeComponent("bitrix:news.list", "front_akc1", array(
	"IBLOCK_TYPE" => "aspro_next_content",
		"IBLOCK_ID" => "19",
		"NEWS_COUNT" => "4",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arRegionLink",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "blog",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
		"PAGER_SHOW_ALL" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "front_akc1",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"TITLE_BLOCK" => "Пресс центр",
		"TITLE_BLOCK_ALL" => "Смотреть все",
		"ALL_URL" => "company/news/",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"IMAGE_POSITION" => "left",
		"SHOW_DETAIL_LINK" => "Y",
		"USE_SHARE" => "N",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVICE" => "",
		"T_GALLERY" => "",
		"T_DOCS" => "",
		"T_GOODS" => "",
		"T_SERVICES" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_STAFF" => "",
		"SHOW_DATE" => "N",
		"S_ORDER_SERVISE" => "",
		"T_STUDY" => "",
		"SECTIONS_COUNT_IN_LINE" => "1",
		"S_ORDER_PROJECT" => "",
		"T_CHARACTERISTICS" => "",
		"SHOW_SECTIONS" => "Y",
		"SHOW_GOODS" => "Y",
		"S_ORDER_PRODUCT" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>





<?endif;?>