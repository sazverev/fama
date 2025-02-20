<?$bAjaxMode = (isset($_POST["AJAX_REQUEST_INSTAGRAM"]) && $_POST["AJAX_REQUEST_INSTAGRAM"] == "Y");
if($bAjaxMode)
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("");
	global $APPLICATION;
	\Bitrix\Main\Loader::includeModule("aspro.next");
	$bInstagrammIndex = (isset($_POST["SHOW_INSTAGRAM"]) && $_POST["SHOW_INSTAGRAM"] == 'Y');
}?><div class="maxwidth-theme" style="background: url(/upload/medialibrary/0de/0de5b6fa3bd891092cc96832d41c22af.png);max-width: 100%;margin: 0;background-repeat: no-repeat;background-size: cover;">
	<div class="col-md-12 col-sm-9 big">
		<div class="col-md-6 col-sm-9 big" style="text-align: center;padding: 0;">
			<table cellpadding="0" cellspacing="0" style="height: 528px;margin: 0px;">
			<tbody>
			<tr>
				<td class="profc" style="background-color: #6eab3f00;">
 <span style="font-size: 22pt; color: #4a4a4a; letter-spacing: 0.02em; align-items: center; display: flex; text-transform: uppercase; line-height: 130%; text-align: left;">Подобрать продукт под ваши задачи?</span><br>
 <span style="color: #4a4a4a;"> </span><span style="color: #4a4a4a;"> </span><span style="font-size: 14pt; color: #4a4a4a; line-height: 130%; letter-spacing: 0.02em; display: flex; text-align: left;">Наш специалист расскажет обо всех подробностях, поможет в выборе оптимального решения и организует все вопросы.<br>
 </span> <br>
					 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new", 
	"inline", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"WEB_FORM_ID" => "11",
		"COMPONENT_TEMPLATE" => "inline",
		"VARIABLE_ALIASES" => array(
			"WEB_FORM_ID" => "WEB_FORM_ID",
			"RESULT_ID" => "RESULT_ID",
		)
	),
	false
);?> <span style="font-size: 14pt;color: #ffffff;font-size: 14pt;color: #ffffff;line-height: 130%;letter-spacing: 0.02em;display: flex;text-align: left;"><?/*$APPLICATION->IncludeComponent(
	"bitrix:form",
	"inline1",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPONENT_TEMPLATE" => "inline1",
		"EDIT_ADDITIONAL" => "N",
		"EDIT_STATUS" => "Y",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"NAME_TEMPLATE" => "",
		"NOT_SHOW_FILTER" => array(0=>"",1=>"",),
		"NOT_SHOW_TABLE" => array(0=>"",1=>"",),
		"RESULT_ID" => $_REQUEST[RESULT_ID],
		"SEF_MODE" => "N",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_ANSWER_VALUE" => "N",
		"SHOW_EDIT_PAGE" => "Y",
		"SHOW_LIST_PAGE" => "Y",
		"SHOW_STATUS" => "Y",
		"SHOW_VIEW_PAGE" => "Y",
		"START_PAGE" => "new",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"VARIABLE_ALIASES" => array("action"=>"action",),
		"WEB_FORM_ID" => "11"
	)
);*/?></span>
				</td>
			</tr>
			</tbody>
			</table>
		</div>
		<div class="col-md-6 col-sm-9 big" style="/* position: absolute; */ /* or 55px */text-align: center;/* padding-top: 3%; */padding: 0;">
			<img style="width:100%;" alt="баннер на фама банки.png" src="/upload/medialibrary/e81/tczhp3gfbtszhf4v0pyo16om0ax8x5fm.png"  title="баннер на фама банки.png"><br>
 <br>
 <br>
		</div>
	</div>
</div>
<?global $bInstagrammIndex;?>
<?if($bInstagrammIndex):?>
	<?$APPLICATION->IncludeComponent(
	"aspro:instargam.next",
	"main",
	Array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"TITLE" => \Bitrix\Main\Config\Option::get("aspro.next","INSTAGRAMM_TITLE_BLOCK",""),
		"TOKEN" => \Bitrix\Main\Config\Option::get("aspro.next","API_TOKEN_INSTAGRAMM","1056017790.9b6cbfe.4dfb9d965b5c4c599121872c23b4dfd0")
	)
);?>
<?endif;?>