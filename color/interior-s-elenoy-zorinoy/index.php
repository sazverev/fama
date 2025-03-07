<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?$APPLICATION->IncludeComponent(
    "bitrix:news", 
    "services", 
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
        "COMPONENT_TEMPLATE" => "services",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array(
            0 => "DETAIL_TEXT",
            1 => "DETAIL_PICTURE",
            2 => "",
        ),
        "DETAIL_PAGER_SHOW_ALL" => "Y",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Страница",
        "DETAIL_PROPERTY_CODE" => array(
            0 => "PHOTOPOS",
            1 => "LINK_GOODS",
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
        "DISPLAY_NAME" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_TYPE_VIEW" => "element_1",
        "FILE_404" => "",
        "FILTER_FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "NEXT_SMART_FILTER",
        "FILTER_PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FORM_ID_ORDER_SERVISE" => "",
        "GALLERY_TYPE" => "small",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "HIDE_NOT_AVAILABLE" => "N",
        "IBLOCK_ID" => "29",
        "IBLOCK_TYPE" => "aspro_next_content",
        "IMAGE_CATALOG_POSITION" => "right",
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
            3 => "",
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
        "NEWS_COUNT" => "20",
        "NUM_DAYS" => "30",
        "NUM_NEWS" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "main",
        "PAGER_TITLE" => "Колористика",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PRICE_CODE" => array(
        ),
        "SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",
        "SEF_FOLDER" => "/color/",
        "SEF_MODE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "Y",
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
        "USE_FILTER" => "Y",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_REVIEW" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "N",
        "USE_SHARE" => "Y",
        "YANDEX" => "N",
        "SECTIONS_TYPE_VIEW" => "sections_3",
        "SECTION_TYPE_VIEW" => "section_3",
        "TIZERS_IBLOCK_ID" => "",
        "LANDING_IBLOCK_ID" => "",
        "LANDING_SECTION_COUNT" => "10",
        "LANDING_TITLE" => "Популярные категории",
        "SEF_URL_TEMPLATES" => array(
            "news" => "",
            "section" => "#SECTION_CODE#/",
            "detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
        )
    ),
    false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>