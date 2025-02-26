<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
 <div class="d7">
	<form action="<?=$arResult["FORM_ACTION"]?>">	
		<?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
		"bitrix:search.suggest.input",
		"",
		array(
			"NAME" => "q",
			"VALUE" => "",
			"INPUT_SIZE" => 15,
			"DROPDOWN_SIZE" => 10,
		),
		$component, array("HIDE_ICONS" => "Y")
		);?><?else:?>
		<input type="text" name="q" placeholder="Поиск"/><?endif;?>
		<button  name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>">
			<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M6.92981 12.7634C10.2113 12.7634 12.8596 10.1235 12.8596 6.88169C12.8596 3.63988 10.2113 1 6.92981 1C3.64829 1 1 3.63988 1 6.88169C1 10.1235 3.64829 12.7634 6.92981 12.7634Z" stroke="#BDBDBD" stroke-width="2"/>
				<path d="M10.8461 12.1793C10.4543 11.7902 10.4521 11.157 10.8412 10.7651C11.2304 10.3733 11.8635 10.371 12.2554 10.7602L10.8461 12.1793ZM16.8173 15.2904C17.2092 15.6796 17.2114 16.3128 16.8222 16.7046C16.4331 17.0965 15.7999 17.0987 15.408 16.7096L16.8173 15.2904ZM12.2554 10.7602L16.8173 15.2904L15.408 16.7096L10.8461 12.1793L12.2554 10.7602Z" fill="#BDBDBD"/>
			</svg>
		</button>
	</form>
</div>