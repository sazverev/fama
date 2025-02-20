<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?global $arTheme, $isShowCatalogSections;?>
<?if($isShowCatalogSections):?>
	<?$APPLICATION->IncludeComponent("aspro:catalog.section.list.next", "front_sections_only1", Array(
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"ALL_URL" => "catalog/",	// Ссылка на все новости
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMPONENT_TEMPLATE" => "front_sections_only",
		"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
		"DISPLAY_PANEL" => "N",
		"FILTER_NAME" => "",	// Имя фильтра
		"HIDE_SECTION_NAME" => "N",
		"IBLOCK_ID" => "17",	// Инфоблок
		"IBLOCK_TYPE" => "aspro_next_catalog",	// Тип инфоблока
		"SECTIONS_LIST_PREVIEW_DESCRIPTION" => "N",
		"SECTIONS_LIST_PREVIEW_PROPERTY" => "N",
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "N",
		"SHOW_SECTIONS_LIST_PREVIEW" => "N",
		"SHOW_SECTION_LIST_PICTURES" => "N",
		"TEMPLATE" => $arTheme["FRONT_PAGE_SECTIONS"]["VALUE"],
		"TITLE_BLOCK" => "Каталог",	// Заголовок блока
		"TITLE_BLOCK_ALL" => "Весь каталог",	// Заголовок на все новости
		"TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
		"VIEW_MODE" => "LIST"
	),
	false
);?>
<?endif;?>