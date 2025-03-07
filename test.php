<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("testa");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"news", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "DATE_ACTIVE_FROM",
			3 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LINK_GOODS",
			1 => "PHOTOPOS",
			2 => "FORM_ORDER",
			3 => "PERIOD",
			4 => "LINK_SERVICES",
			5 => "PHOTOS",
			6 => "DOCUMENTS",
			7 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arRegionLink",
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FORM_ID_ORDER_SERVISE" => "",
		"GALLERY_TYPE" => "small",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "22",
		"IBLOCK_TYPE" => "aspro_next_content",
		"IMAGE_CATALOG_POSITION" => "left",
		"IMAGE_POSITION" => "left",
		"IMAGE_WIDE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "PERIOD",
			2 => "REDIRECT",
			3 => "",
		),
		"LIST_VIEW" => "slider",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"NUM_DAYS" => "30",
		"NUM_NEWS" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PRICE_CODE" => array(
		),
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_2",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SHOW_CHILD_SECTIONS" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"SHOW_FILTER_DATE" => "N",
		"SHOW_NEXT_ELEMENT" => "N",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"STRICT_SECTION_CHECK" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVICE" => "",
		"S_ORDER_SERVISE" => "",
		"T_DOCS" => "",
		"T_GALLERY" => "",
		"T_GOODS" => "",
		"T_NEXT_LINK" => "",
		"T_PREV_LINK" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_SERVICES" => "",
		"T_STAFF" => "",
		"T_STUDY" => "",
		"T_VIDEO" => "",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"YANDEX" => "N",
		"COMPONENT_TEMPLATE" => "news",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?>
<br>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"news_smart", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "DATE_ACTIVE_FROM",
			3 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LINK_GOODS",
			1 => "FORM_ORDER",
			2 => "PERIOD",
			3 => "PHOTOPOS",
			4 => "LINK_SERVICES",
			5 => "PHOTOS",
			6 => "DOCUMENTS",
			7 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arRegionLink",
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FORM_ID_ORDER_SERVISE" => "",
		"GALLERY_TYPE" => "small",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "19",
		"IBLOCK_TYPE" => "aspro_next_content",
		"IMAGE_CATALOG_POSITION" => "left",
		"IMAGE_POSITION" => "left",
		"IMAGE_WIDE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "PERIOD",
			1 => "REDIRECT",
			2 => "",
		),
		"LIST_VIEW" => "slider",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"NUM_DAYS" => "30",
		"NUM_NEWS" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PRICE_CODE" => array(
		),
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_2",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SHOW_CHILD_SECTIONS" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"SHOW_FILTER_DATE" => "N",
		"SHOW_NEXT_ELEMENT" => "N",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"STRICT_SECTION_CHECK" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVICE" => "",
		"S_ORDER_SERVISE" => "",
		"T_DOCS" => "",
		"T_GALLERY" => "",
		"T_GOODS" => "",
		"T_NEXT_LINK" => "",
		"T_PREV_LINK" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_SERVICES" => "",
		"T_STAFF" => "",
		"T_STUDY" => "",
		"T_VIDEO" => "",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"YANDEX" => "N",
		"COMPONENT_TEMPLATE" => "news_smart",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>