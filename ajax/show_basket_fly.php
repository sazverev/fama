<?define("STATISTIC_SKIP_ACTIVITY_CHECK", "true");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?if (isset($_REQUEST["PARAMS"]) && !empty($_REQUEST["PARAMS"])):?>
	<div id="basket_preload">
		<?include_once("action_basket.php");?>
		<?$arParams = unserialize(urldecode($_REQUEST["PARAMS"]), ['allowed_classes' => false]);?>
		<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", "fly", $arParams, false, array("HIDE_ICONS" =>"Y"));?>
	</div>
<?endif;?>