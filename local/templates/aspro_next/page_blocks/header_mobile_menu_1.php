<div class="mobilemenu-v1 scroller">
	<div class="wrap">
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_mobile", 
	array(
		"COMPONENT_TEMPLATE" => "top_mobile",
		"MENU_CACHE_TIME" => "172800",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"ALLOW_MULTI_SELECT" => "Y",
		"ROOT_MENU_TYPE" => "top_content_multilevel",
		"CHILD_MENU_TYPE" => "left",
		"CACHE_SELECTED_ITEMS" => "N",
		"USE_EXT" => "Y"
	),
	false
);?>
		<?
		// show regions
		CNext::ShowMobileRegions();

		// show cabinet item
		CNext::ShowMobileMenuCabinet();

		// show basket item
		CNext::ShowMobileMenuBasket();

		// use module options for change contacts
		CNext::ShowMobileMenuContacts();
		?>
		<?$APPLICATION->IncludeComponent(
	"aspro:social.info.next", 
	"mobile", 
	array(
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "172800 ",
		"CACHE_GROUPS" => "N",
		"COMPONENT_TEMPLATE" => "mobile",
		"TITLE_BLOCK" => ""
	),
	false
);?>
	</div>
</div>