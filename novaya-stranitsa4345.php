<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница4345");
?>Text here....<?$APPLICATION->IncludeComponent("bitrix:socialnetwork.group.iframe.popup", "template1", Array(
	"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>