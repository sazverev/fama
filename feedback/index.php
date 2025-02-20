<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?><h1>Обратная связь</h1>
<br>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"template1", 
	array(
		"COMPONENT_TEMPLATE" => "template1",
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>