<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$this->setFrameMode(true);
if ($arParams['BX_EDITOR_RENDER_MODE'] == 'Y'):
?>
<img src="/bitrix/components/bitrix/map.yandex.view/templates/.default/images/screenshot.png" border="0" />
<?
else:

	$arTransParams = array(
		'KEY' => $arParams['KEY'],
		'INIT_MAP_TYPE' => $arParams['INIT_MAP_TYPE'],
		'INIT_MAP_LON' => $arResult['POSITION']['yandex_lon'],
		'INIT_MAP_LAT' => $arResult['POSITION']['yandex_lat'],
		'INIT_MAP_SCALE' => $arResult['POSITION']['yandex_scale'],
		'MAP_WIDTH' => $arParams['MAP_WIDTH'],
		'MAP_HEIGHT' => $arParams['MAP_HEIGHT'],
		'CONTROLS' => $arParams['CONTROLS'],
		'OPTIONS' => $arParams['OPTIONS'],
		'DETAIL_TEXT' => $arResult['DETAIL_TEXT'],
		'MAP_ID' => $arParams['MAP_ID'],
		'LOCALE' => $arParams['LOCALE'],
		'ONMAPREADY' => 'BX_SetPlacemarks_'.$arParams['MAP_ID'],
	);

	if ($arParams['DEV_MODE'] == 'Y')
	{
		$arTransParams['DEV_MODE'] = 'Y';
		if ($arParams['WAIT_FOR_EVENT'])
			$arTransParams['WAIT_FOR_EVENT'] = $arParams['WAIT_FOR_EVENT'];
	}
?>

<script type="text/javascript">
function BX_SetPlacemarks_<?echo $arParams['MAP_ID']?>(map)
{
	if(typeof window["BX_YMapAddPlacemark"] != 'function')
	{
		/* If component's result was cached as html,
		 * script.js will not been loaded next time.
		 * let's do it manualy.
		*/

		(function(d, s, id)
		{
			var js, bx_ym = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "<?=$templateFolder.'/script.js'?>";
			bx_ym.parentNode.insertBefore(js, bx_ym);
		}(document, 'script', 'bx-ya-map-js'));

		var ymWaitIntervalId = setInterval( function(){
				if(typeof window["BX_YMapAddPlacemark"] == 'function')
				{
					BX_SetPlacemarks_<?echo $arParams['MAP_ID']?>(map);
					clearInterval(ymWaitIntervalId);
				}
			}, 300
		);

		return;
	}

	var arObjects = {PLACEMARKS:[],POLYLINES:[]};
<?
	if (is_array($arResult['POSITION']['PLACEMARKS']) && ($cnt = count($arResult['POSITION']['PLACEMARKS']))):
		for($i = 0; $i < $cnt; $i++):
?>
			arObjects.PLACEMARKS[arObjects.PLACEMARKS.length] = BX_YMapAddPlacemark(map, <?echo CUtil::PhpToJsObject($arResult['POSITION']['PLACEMARKS'][$i])?>);
<?
		endfor;
	endif;
	if (is_array($arResult['POSITION']['POLYLINES']) && ($cnt = count($arResult['POSITION']['POLYLINES']))):
		for($i = 0; $i < $cnt; $i++):
?>
	arObjects.POLYLINES[arObjects.POLYLINES.length] = BX_YMapAddPolyline(map, <?echo CUtil::PhpToJsObject($arResult['POSITION']['POLYLINES'][$i])?>);
<?
		endfor;
	endif;	

	if ($arParams['ONMAPREADY']):
?>
	if (window.<?echo $arParams['ONMAPREADY']?>)
	{
		window.<?echo $arParams['ONMAPREADY']?>(map, arObjects);
	}
<?
	endif;
?>
	/* set dynamic zoom for ballons */

	// map.setBounds(map.geoObjects.getBounds(), {checkZoomRange: true});
	var geo_result = ymaps.geoQuery(map.geoObjects);
	if(geo_result.getLength() > 1)
		geo_result.applyBoundsToMap(map);
	else
	{
		map.zoomRange.get().then(function(range){
	        map.setZoom(range[1]);
	    });
	}
	/**/

}
</script>
<div class="bx-yandex-view-layout swipeignore">
	<div class="bx-yandex-view-map">
<?
	$APPLICATION->IncludeComponent('bitrix:map.yandex.system', 'map', $arTransParams, false, array('HIDE_ICONS' => 'Y'));
?>
	</div>
</div>
<?
endif;
?>