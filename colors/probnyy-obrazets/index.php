<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пробный выкрас");
?><h1><span style="font-size: 15pt;">Не можете выбрать цвет?</span></h1>
 <br>
 Мы поможем!<br>
 <br>
 5 пробных выкрасов на Вашем материале <b>бесплатно</b>! Предложение действует в наших <a target="_blank" href="https://famaprofi.ru/contacts/">фирменных магазинах</a> и для нашего <a target="_blank" href="https://famaprofi.ru/catalog/">интернет-магазина</a>.&nbsp;<br>
 <br>
 Подробности у менеджеров или по телефону <a rel="nofollow" href="tel:+88005553379">8 (800) 555-33-79</a>.<br>
 <br>
 Остались вопросы? Можно написать&nbsp;⇓&nbsp;<br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"EMAIL_TO" => "shop@famaprofi.ru",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, Ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "Y"
	)
);?><br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>