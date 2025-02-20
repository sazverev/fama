<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

global $USER, $arTheme;
\Bitrix\Main\Localization\Loc::loadMessages(__FILE__);
$APPLICATION->AddChainItem(GetMessage("TITLE"));
$APPLICATION->SetTitle(GetMessage("TITLE"));
$APPLICATION->SetPageProperty("TITLE_CLASS", "center");
?>
<style type="text/css">
	.left-menu-md, body .container.cabinte-page .maxwidth-theme .left-menu-md, .right-menu-md, body .container.cabinte-page .maxwidth-theme .right-menu-md{display:none !important;}
	.content-md{width:100%;}
</style>
<?if(!$USER->IsAuthorized()):?>
	<?
	// default fields, that you can change
	$arShowFields = array("UF_YANDEX_CLIENTID", "UF_GOOGLE_CLIENTID", "LOGIN", "LAST_NAME", "NAME", "SECOND_NAME", "EMAIL", "PERSONAL_PHONE");
	$arRequiredFields = array("NAME", "EMAIL", "PERSONAL_PHONE");

	// get phone auth params
	list($bPhoneAuthSupported, $bPhoneAuthShow, $bPhoneAuthRequired, $bPhoneAuthUse) = Aspro\Next\PhoneAuth::getOptions();

	// add phone field after email field if phone auth supported and need for to register
	if($bPhoneAuthSupported && $bPhoneAuthShow){
		$arShowFields[] = "PHONE_NUMBER";

		// remove phone field
		$phoneKey = array_search("PERSONAL_PHONE", $arShowFields);
		if($phoneKey !== false){
			unset($arShowFields[$phoneKey]);
		}

		// search email field
		$emailKey = array_search("EMAIL", $arShowFields);
		if($emailKey !== false){
			$arShowFields = array_merge(array_slice($arShowFields, 0, $emailKey + 1), array("PERSONAL_PHONE"), array_slice($arShowFields, $emailKey + 1));
		}
		else{
			$arShowFields[] = "PERSONAL_PHONE";
		}

		if($bPhoneAuthRequired){
			$arRequiredFields[] = "PERSONAL_PHONE";
		}
	}
	?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.register",
		"main",
		Array(
			"USER_PROPERTY_NAME" => "",
			"SHOW_FIELDS" => $arShowFields,
			"REQUIRED_FIELDS" => $arRequiredFields,
			"AUTH" => "Y",
			"USE_BACKURL" => "Y",
			"SUCCESS_PAGE" => "",
			"SET_TITLE" => "N",
			"USER_PROPERTY" => array()
		)
	);?>
<?else:?>
	<?$url = ($arTheme["PERSONAL_PAGE_URL"]["VALUE"] ? $arTheme["PERSONAL_PAGE_URL"]["VALUE"] : $arParams["SEF_FOLDER"]);?>
	<?LocalRedirect($url);?>
<?endif;?>

<script type="application/javascript">
    function getYClientID() {
        var match = document.cookie.match('(?:^|;)\\s*_ym_uid=([^;]*)');
        return (match) ? decodeURIComponent(match[1]) : false;
    }

    function getGoogleClientID()
    {
        var match = document.cookie.match('(?:^|;)\\s*_ga=([^;]*)');
        var raw = (match) ? decodeURIComponent(match[1]) : null;
        if (raw)
        {
            match = raw.match(/(\d+\.\d+)$/);
        }
        var gacid = (match) ? match[1] : null;
        if (gacid)
        {
            return gacid;
        }
    }

    document.addEventListener('DOMContentLoaded', function(){
		document.getElementById('input_UF_YANDEX_CLIENTID').type = "hidden";
		document.getElementById('input_UF_GOOGLE_CLIENTID').type = "hidden";
        document.getElementById('input_UF_YANDEX_CLIENTID').value=getYClientID();
        document.getElementById('input_UF_GOOGLE_CLIENTID').value=getGoogleClientID();
	});

</script>