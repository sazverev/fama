<?global $arTheme;?>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top2", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "top2",
		"COUNT_ITEM" => "6",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "172800",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "N",
		"CACHE_SELECTED_ITEMS" => "N",
		"ROOT_MENU_TYPE" => "top_content_multilevel",
		"USE_EXT" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>