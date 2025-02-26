<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<div class="footer_inner <?=($arTheme["SHOW_BG_BLOCK"]["VALUE"] == "Y" ? "fill" : "no_fill");?> footer-grey ext_view">
    <div class="bottom_thin">&nbsp </div>
	<div class="bottom_wrapper">
		<div class="wrapper_inner">
			<div class="row bottom-middle">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-4 col-sm-4 col_ft_4" style="margin-left: auto;margin-right: auto;">
							<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
							<div class="douwf subscribe_wrap">
								<?$APPLICATION->IncludeComponent("bitrix:subscribe.form", "subscribe_2", Array(
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








<?/*$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/left_block/comp_subscribe.php",
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => "include_area.php"
								),
								false
);*/?>

								
								<?$APPLICATION->IncludeComponent(
									"aspro:regionality.list.next",
									"popup_regions_small",
									Array(
										"COMPONENT_TEMPLATE" => "popup_regions_small"
									)
								);?>




							<div class="info contacts_block_footer">
								<?/*$APPLICATION->IncludeFile(SITE_DIR."include/footer/contacts-title.php", array(), array(
										"MODE" => "html",
										"NAME" => "Title",
										"TEMPLATE" => "include_area.php",
									)
);*/?>
								<?CNext::ShowHeaderPhones('', true);?>
								<?/*CNext::showEmail('email blocks');*/?>
								<?CNext::showAddress('address blocks');?>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="underline_sub">
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"bottom", 
									array(
										"ROOT_MENU_TYPE" => "bottom_wholesale",
										"MENU_CACHE_TYPE" => "A",
										"MENU_CACHE_TIME" => "3600000",
										"MENU_CACHE_USE_GROUPS" => "N",
										"CACHE_SELECTED_ITEMS" => "N",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MAX_LEVEL" => "2",
										"CHILD_MENU_TYPE" => "left",
										"USE_EXT" => "N",
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "Y",
										"COMPONENT_TEMPLATE" => "bottom"
									),
									false
								);?>
	<br><br><br>

								<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"bottom", 
									array(
										"ROOT_MENU_TYPE" => "bottom_feedback",
										"MENU_CACHE_TYPE" => "A",
										"MENU_CACHE_TIME" => "3600000",
										"MENU_CACHE_USE_GROUPS" => "N",
										"CACHE_SELECTED_ITEMS" => "N",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MAX_LEVEL" => "1",
										"CHILD_MENU_TYPE" => "left",
										"USE_EXT" => "N",
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "Y",
										"COMPONENT_TEMPLATE" => "bottom"
									),
									false
								);?>
							</div>

						</div>
<!-- <div class="col-lg-6 col-md-12 col-sm-4 col-sm-offset-2"> -->



<!--						</div> -->
						<div class="col-md-4 col-sm-4">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
								"ROOT_MENU_TYPE" => "bottom_company",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "3600000",
								"MENU_CACHE_USE_GROUPS" => "N",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "Y"
								),
								false
							);?>
							<div class="bottom_logo">
								<svg style="display: block;" width="51" height="51" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<path fill="url(#pattern0)" d="M0 0h51v51H0z"/>
										<defs><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#image0" transform="scale(.02)"/></pattern><image id="image0" width="50" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyMTdkOTczYy04ZDhkLTY1NGQtODg1Mi03Mjc2ODlkYTY0OTAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDkzRkY0Q0EzQzc1MTFFNTkzMjNDOTAxMkQwQ0VBQTgiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDkzRkY0QzkzQzc1MTFFNTkzMjNDOTAxMkQwQ0VBQTgiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjIxN2Q5NzNjLThkOGQtNjU0ZC04ODUyLTcyNzY4OWRhNjQ5MCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoyMTdkOTczYy04ZDhkLTY1NGQtODg1Mi03Mjc2ODlkYTY0OTAiLz4gPC9y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"/></defs></svg>


							</div> 
							<div class="bottom_lable">Международная<br>ассоциация производителей<br>натуральных строительных<br>материалов</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
								"ROOT_MENU_TYPE" => "bottom_info",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "3600000",
								"MENU_CACHE_USE_GROUPS" => "N",
								"CACHE_SELECTED_ITEMS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "Y"
								),
								false
							);?>
<!-- <div class="social-block rounded_block"> -->
								
						<!-- 	</div> -->
							<div class="bottom_logo" style="padding-top: 30px;" >
								<img style="width: 51px;height: 51px;" src="<?=SITE_TEMPLATE_PATH?>/images/association-of_wooden_housing.png" alt="">


							</div> 
							<div class="bottom_lable">Ассоциация<br />деревянного домостроения</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<?$APPLICATION->IncludeComponent(
								"bitrix:menu", 
								"bottom", 
								array(
									"ROOT_MENU_TYPE" => "bottom_help",
									"MENU_CACHE_TYPE" => "A",
									"MENU_CACHE_TIME" => "3600000",
									"MENU_CACHE_USE_GROUPS" => "N",
									"CACHE_SELECTED_ITEMS" => "N",
									"MENU_CACHE_GET_VARS" => array(
									),
									"MAX_LEVEL" => "1",
									"CHILD_MENU_TYPE" => "left",
									"USE_EXT" => "N",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "Y",
									"COMPONENT_TEMPLATE" => "bottom"
								),
								false
							);?>
							<?$APPLICATION->IncludeComponent(
								"aspro:social.info.next", 
								"mail1", 
								array(
									"CACHE_TYPE" => "N",
									"CACHE_TIME" => "300000",
									"CACHE_GROUPS" => "N",
									"COMPONENT_TEMPLATE" => "mail1",
									"SOCIAL_TITLE" => GetMessage("SOCIAL_TITLE"),
									"TITLE_BLOCK" => "Время дружить",
									"COMPOSITE_FRAME_MODE" => "A",
									"COMPOSITE_FRAME_TYPE" => "AUTO"
								),
								false
							);?>
						</div>
					</div>
				</div>

			</div>
		<div class="bottom-under">
				<div class="row">
					<div class="col-md-12 outer-wrapper">
						<div class="inner-wrapper row">
							<div class="copy-block">
								<div class="copy">
									<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/copy/copyright.php", Array(), Array(
											"MODE" => "php",
											"NAME" => "Copyright",
											"TEMPLATE" => "include_area.php",
										)
									);?>
								</div>
								<div class="print-block"><?=CNext::ShowPrintLink();?></div>
								<div id="bx-composite-banner"></div>
							</div>
							
						</div>
					</div>
				</div>



			</div>
		</div>
	</div>
</div>