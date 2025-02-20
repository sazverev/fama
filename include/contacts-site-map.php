<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>


<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"API_KEY" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTROLS" => array("ZOOM","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.67344840841522;s:10:\"yandex_lon\";d:37.58392602915165;s:12:\"yandex_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.58392602915165;s:3:\"LAT\";d:55.673448408421415;s:4:\"TEXT\";s:164:\"г. Москва, Нахимовский пр-т, д 24,###RN###павильон 6, офис 605, 6 этаж###RN###ЭКСПОСТРОЙ НА НАХИМОВСКОМ\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
	)
);?>
