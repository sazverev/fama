<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>


<?
global $arTheme, $arRegion;
$arRegions = CNextRegionality::getRegions();
if($arRegion)
	$bPhone = ($arRegion['PHONES'] ? true : false);
else
	$bPhone = ((int)$arTheme['HEADER_PHONES'] ? true : false);
$logoClass = ($arTheme['COLORED_LOGO']['VALUE'] !== 'Y' ? '' : ' colored');
?>

<div class="header-v4 header-wrapper">
	<div class="logo_and_menu-row">
		<div class="logo-row">
			<div class="maxwidth-theme" style="padding: 0 9px;
">
				<div class="row">
					<div class="logo-block col-md-2 col-sm-3">
						<div class="logo<?=$logoClass?>">
							<?=CNext::ShowLogo();?>
						</div>
					</div>
					<?if($arRegions):?>
						<!--<div class="inline-block pull-left">
							<div class="top-description">

								<?$APPLICATION->IncludeComponent("bitrix:main.include", "template5", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/top_page/regionality.list.php",	// Путь к файлу области
		"AREA_FILE_SHOW" => "file",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "include_area.php",	// Шаблон области по умолчанию
	),
	false
);?>
							</div>
						</div>-->
					<?endif;?>
<!--telefon-->
								<?if($bPhone):?>
							
							<div class="pull-left">
								<div class="wrap_icon inner-table-block">
									<div class="phone-block">
										<?CNext::ShowHeaderPhones();?>
										<?$APPLICATION->IncludeComponent(
	"aspro:regionality.list.next", 
	"popup_regions_small", 
	array(
		"COMPONENT_TEMPLATE" => "popup_regions_small",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "DYNAMIC_WITHOUT_STUB"
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/top_page/regionality.list.php",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "standard.php"
	),
	false
);?>
									</div>
								</div>
							</div>	
							<div class="pull-left">
								<div class="wrap_icon inner-table-block">
									<div class="phone-block">
										<!--'start_frame_cache_header-allphones-block1'-->											<!-- noindex -->
			<div class="phone">
				<i class="svg svg-phone"></i>
				<a rel="nofollow" href="tel:+88005553379">8 (800) 555-33-79</a>
							</div>
			<!-- /noindex -->
							<!--'end_frame_cache_header-allphones-block1'-->
								<div class="callback-block">

<?if($arTheme['SHOW_CALLBACK']['VALUE'] == 'Y'):?>
											<div class="callback-block">
												<? /*<span class="animate-load twosmallfont colored" data-event="jqm" data-param-form_id="CALLBACK" data-name="callback"><?=GetMessage("CALLBACK")?></span>
												<span class="twosmallfont colored" data-event="jqm" data-param-form_id="CALLBACK" data-name="callback"><?=GetMessage("CALLBACK")?></span>*/ ?>

												<script data-b24-form="click/42/0b69rg" data-skip-moving="true">(function(w,d,u){var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})(window,document,'https://cdn-ru.bitrix24.ru/b11298180/crm/form/loader_42.js');</script>
												<button class="btn twosmallfont colored">Заказать звонок</button>
											</div>
										<?endif;?>

												
											</div>
																			</div>
								</div>
							</div>
						<?endif?>

					<div class="col-md-<?=($arRegions ? 2 : 3);?> col-lg-<?=($arRegions ? 2 : 3);?> search_wrap" style="width: 493px;opacity: 1;visibility: visible;">
						<div class="search-block inner-table-block">
							<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/top_page/search.title.catalog.php",
		"EDIT_TEMPLATE" => "include_area.php",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
						</div>
					</div>
					<div class="right-icons pull-right">
						<div class="pull-right block-link">
							<?=CNext::ShowBasketWithCompareLink('with_price', 'big', true, 'wrap_icon inner-table-block baskets');?>
						</div>


					</div>
				</div>
			</div>
		</div><?// class=logo-row?>
	</div>
	<div class="menu-row middle-block bg<?=strtolower($arTheme["MENU_COLOR"]["VALUE"]);?>">
		<div class="maxwidth-theme">
			<div class="row">
				<div class="col-md-12">
					<div class="menu-only">
						<nav class="mega-menu sliced">
							
							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/menu/menu.top.php",
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => "include_area.php"
								),
								false, array("HIDE_ICONS" => "Y")
							);?>
						</nav>
				</div>
			</div>
	</div>
	<div class="line-row visible-xs"></div>
</div>