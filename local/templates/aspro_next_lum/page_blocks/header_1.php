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


<div class="top-block top-block-v1"> 
          <div class="top_top_panel">
		<div class="maxwidth-theme_top">			
				<div class="wrapp_block">				
					<div class="row">

                                              	<div class="top-block-item pull-right show-fixed "> 
						        <div class="personal_wrap">
							         <div class="personal top login twosmallfont">
								          <?=CNext::ShowCabinetLink(true, true);?>
							        </div>
						       </div>
					        </div>


					      <?$APPLICATION->IncludeComponent("bitrix:menu", "top_top_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top_top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?><br>				
		</div></div></div>
	</div>
       
        <div class="top_top_thin">&nbsp </div>

	<div class="maxwidth-theme">
	
		<div class="wrapp_block">
		
			<div class="row">
			
				<?if($arRegions):?>
					<div class="top-block-item col-md-2">
						<div class="top-description">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/top_page/regionality.list.php",
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => "include_area.php"
								),
								false
							);?>
						</div>
					</div>
				<?else:?>
					<div class="top-block-item col-md-4">
						<div class="phone-block">
							<?if($bPhone):?>
								<div class="inline-block">
									<?CNext::ShowHeaderPhones();?>
								</div>
							<?endif?>
							<?if($arTheme['SHOW_CALLBACK']['VALUE'] == 'Y'):?>
								<div class="inline-block">
									<span class="callback-block animate-load twosmallfont colored" data-event="jqm" data-param-form_id="CALLBACK" data-name="callback"><?=GetMessage("CALLBACK")?></span>
								</div>
							<?endif;?>
						</div>
					</div>
				<?endif;?>
				<div class="top-block-item pull-left visible-lg">
					<?CNext::showAddress('address twosmallfont inline-block');?>
				</div>
				<div class="top-block-item pull-right show-fixed top-ctrl">
					<button class="top-btn inline-search-show twosmallfont">
						<?=CNext::showIconSvg("search", SITE_TEMPLATE_PATH."/images/svg/Search_black.svg");?>
						<span class="dark-color"><?=GetMessage('SEARCH_TITLE')?></span>
					</button>
				</div>
				<div class="top-block-item pull-right show-fixed top-ctrl">
					<div class="basket_wrap twosmallfont">
						<?CNext::ShowBasketWithCompareLink('', '');?>
					</div>
				</div>
				<div class="top-block-item pull-right show-fixed top-ctrl">
					<div class="personal_wrap">
						<div class="personal top login twosmallfont">
							<?=CNext::ShowCabinetLink(true, true);?>
						</div>
					</div>
				</div>
				<?if($arRegions):?>
					<div class="top-block-item pull-right">
						<div class="phone-block">
							<?if($bPhone):?>
								<div class="inline-block">
									<?CNext::ShowHeaderPhones();?>
								</div>
							<?endif?>
							<?if($arTheme['SHOW_CALLBACK']['VALUE'] == 'Y'):?>
								<div class="inline-block">
									<span class="callback-block animate-load twosmallfont colored" data-event="jqm" data-param-form_id="CALLBACK" data-name="callback"><?=GetMessage("CALLBACK")?></span>
								</div>
							<?endif;?>
						</div>
					</div>
				<?endif;?>
			</div>
		</div>
	</div>
</div>
<div class="header-wrapper topmenu-LIGHT">

	<div class="wrapper_inner">
	
	
	
		<div class="logo_and_menu-row">
			<div class="logo-row row">
				<div class="logo-block col-md-2 col-sm-3">
					<div class="logo<?=$logoClass?>">
						<?=CNext::ShowLogo();?>
					</div>
				</div>
				<div class="col-md-2 hidden-sm hidden-xs">
					<div class="top-description">
						<?$APPLICATION->IncludeFile(SITE_DIR."include/top_page/slogan.php", array(), array(
								"MODE" => "html",
								"NAME" => "Text in title",
								"TEMPLATE" => "include_area.php",
							)
						);?>
					</div>
				</div>
				<div class="col-md-8 menu-row">
					<div class="nav-main-collapse collapse in">
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


			</div><?// class=logo-row?>
		</div>
	</div>
	<div class="line-row visible-xs"></div>
</div>