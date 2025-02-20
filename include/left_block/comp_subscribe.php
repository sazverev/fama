<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<div class="subscribe_wrap">
	<?$APPLICATION->IncludeComponent("bitrix:subscribe.form", "subscribe_1", Array(
	"AJAX_MODE" => "N",
		"SHOW_HIDDEN" => "N",	// Показать скрытые рубрики подписки
		"ALLOW_ANONYMOUS" => "Y",
		"SHOW_AUTH_LINKS" => "N",
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600000",	// Время кеширования (сек.)
		"CACHE_NOTES" => "",
		"SET_TITLE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"LK" => "Y",
		"COMPONENT_TEMPLATE" => "main",
		"USE_PERSONALIZATION" => "Y",	// Определять подписку текущего пользователя
		"PAGE" => SITE_DIR."personal/subscribe/",	// Страница редактирования подписки (доступен макрос #SITE_DIR#)
		"URL_SUBSCRIBE" => SITE_DIR."personal/subscribe/"
	),
	false
);?>
</div>