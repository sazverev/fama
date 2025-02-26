<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
 <?global $isShowSale, $isShowCatalogSections, $isShowCatalogElements, $isShowMiddleAdvBottomBanner, $isShowBlog;?>
<div class="grey_block">
	<div class="batter3 maxwidth-theme" style="max-width: 1920px;
    width: 100%;
    padding: 0;
	height: auto;
	background: #fff;">

<?global $arTheme;?>

<?$bHideCatalogMenu = (isset($arParams["HIDE_CATALOG"]) && $arParams["HIDE_CATALOG"] == "Y");?>
<?if(!CNext::IsMainPage()):?>
	<?if(CNext::IsCatalogPage()):?>
		<?if(!$bHideCatalogMenu):?>
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left_front_catalog",
	Array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CACHE_SELECTED_ITEMS" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "left_front_catalog",
		"DELAY" => "Y",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?>
		<?endif;?>
	<?else:?>
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CACHE_SELECTED_ITEMS" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "left_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?>
	<?endif;?>
<?elseif(!$bHideCatalogMenu):?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left_front_catalog1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CACHE_SELECTED_ITEMS" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "172800",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "left_front_catalog1"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "N"
	)
);?>								

<?endif;?>
</div>
		 <?$APPLICATION->IncludeComponent(
	"aspro:com.banners.next", 
	"top_one_banner", 
	array(
		"BANNER_TYPE_THEME" => "TOP",
		"BANNER_TYPE_THEME_CHILD" => "TOP_SMALL_BANNER",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "172800",
		"CACHE_TYPE" => "A",
		"CATALOG" => "/catalog/",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "top_one_banner",
		"FILTER_NAME" => "",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "aspro_next_adv",
		"NEWS_COUNT" => "10",
		"NEWS_COUNT2" => "1",
		"PROPERTY_CODE" => array(
			0 => "BANNER_SIZE",
			1 => "TEXT_POSITION",
			2 => "TARGETS",
			3 => "TEXTCOLOR",
			4 => "URL_STRING",
			5 => "BUTTON1TEXT",
			6 => "BUTTON1LINK",
			7 => "BUTTON2TEXT",
			8 => "BUTTON2LINK",
			9 => "",
		),
		"SET_BANNER_TYPE_FROM_THEME" => "Y",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"TYPE_BANNERS_IBLOCK_ID" => "5"
	),
	false
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_DIR."include/mainpage/comp_tizers.php"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'N'
)
);?>
	</div>
	<!--<hr>-->
</div>
 <?global $isShowSale, $isShowCatalogSections, $isShowCatalogElements, $isShowMiddleAdvBottomBanner, $isShowBlog;?><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
	"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?> <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <!--<br>-->
 <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--<div class="row wrap_md" style=" background: rgba(188, 205, 152, 0.5); margin: 0;">
<div class="maxwidth-theme" style="background: rgba(251, 251, 251, 0)">
	<div class="blog_wrapper banners-small blog">
		<div class="top_block" style=" margin-left: 4%; margin-top: 10%; ">
			<a href="/to-customers/tsentr-znaniy/"><h3 class="centrz title_block">Центр знаний</h3></a>
			 <a href="/to-customers/tsentr-znaniy/" style="font-size: 14pt">Обучающие материалы по применению продуктов BIOFA</a>
		</div>
		<div class="items">
			<div class="row">
				<div class="znan1 col-m-50 first-item col-md-4 col-sm-6 col-xs-6" style="padding: 0;"><a href="/to-customers/12-pravil-pri-rabote-s-maslami-biofa/">
					<table border="1" cellpadding="1" cellspacing="1" style=" height: 528px; ">
					<tbody>
					<tr>
						<td style="background-color: #e7a328;;padding: 52px;line-height: 150%;">
 <span style="font-size: 24pt;color: #ffffff;letter-spacing: 0.02em;align-items: center;display: flex;text-transform: uppercase;line-height: 130%;"><span style="color: #ffffff;">12 ПРАВИЛ ПРИ РАБОТЕ С МАСЛАМИ</span></span><br>
 <br>
 <span style="color: #ffffff;"> </span><span style="font-size: 14pt;color: #ffffff;line-height: 130%;/* font-size: 24px; *//* letter-spacing: 0.02em; *//* align-items: center; *//* display: flex; *//* text-transform: uppercase; */">В приведенных примерах мы предлагаем обратить внимание на правила работы и характерные ошибки, которые допускают наши покупатели при работе с маслами и красками BIOFA.</span><br>
 <br>
 <span style="font-size: 14pt;"> </span><span style="color: #ffffff; font-size: 14pt;"> </span><span style="font-size: 14pt; color: #ffffff;">
							Для того что бы вам было понятнее и проще работать с нашим продуктом мы описали правила при работе с маслами.</span><br>
 <span style="font-size: 14pt;"> </span><span style="color: #ffffff; font-size: 14pt;"> </span><br>
 <span style="font-size: 14pt;"> </span><span style="color: #ffffff; font-size: 14pt;"> </span><span style="font-size: 14pt; color: #ffffff;">Подробнее</span></span></td>
					</tr>
					</tbody>
					</table></a>
				</div>
				<div class="znan2 col-m-60 first-item col-md-4 col-sm-6 col-xs-6" style="padding: 0;">
					<div class="item shadow animation-boxs shine" style="background-image: url(&quot;/upload/medialibrary/d7c/d7c3880b8489c6625cae002d62e77e58.png&quot;);height: auto;/* margin-right: 12%; */margin: 0;padding: 0;" id="bx_651765591_249">
						<div class="inner-item">
 <a href="/to-customers/12-pravil-pri-rabote-s-maslami-biofa/" class="gradient_block"></a>
							<div class="image shine">
 <a href="/to-customers/12-pravil-pri-rabote-s-maslami-biofa/"> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div></div>-->
<div class="wrap_md" style=" background: rgb(243, 243, 243);">
<div class="maxwidth-theme" style=" background-color: #F3F3F3; margin-top: 0;">
	<!--<div class="blog_wrapper banners-small blog">
		<div class="items">
			<div class="row">
				<div class="nonam col-m-40 first-item col-md-4 col-sm-6 col-xs-6" style=" width: 90%; padding: 0; margin-left: 5%; ">
					<div class="item shadow animation-boxs shine 1" style="background-color: #ffffff;margin: 0px 0px 103px;padding-bottom: 2%;" id="bx_651765591_249">
						<div class="zayavka1 col-md-4 col-sm-6">
							<h2 style=" font-size: 16px; line-height: 140%; /* or 22px */ align-items: center; letter-spacing: 0.02em; text-transform: uppercase; font-family: Gotham Pro; ">Анкета качества</h2>
						</div>
						<div class="zayavka2 col-md-4 col-sm-6">
							 Нам важна обратная связь. Пожалуйста, поделитесь мнением о работе с нами
						</div>
						<div class="zayavka3 col-md-4 col-sm-6">
 <a href="/feedback/" class="btn btn-default" style=" border: 1.5px solid #6EAB3F; border-radius: 70px; background-color: #0000; color: #000; ">Заполнить</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<div class="col-md-12 col-sm-9" style="width: 100%; padding-top:10px;">
	<h3 class="title_2"style="font-family: AGOpusHighResolution Roman; color: #222a58;     margin-top: 0;    padding-top: 20px;">Спецпредложения</h3>
	</div>
	 <?$APPLICATION->IncludeComponent(
	"aspro:tabs.next", 
	"main", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/basket/",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "300000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "main",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_URL" => "",
		"DISCOUNT_PRICE_CODE" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_WISH_BUTTONS" => "Y",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilterProp",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "21",
		"IBLOCK_TYPE" => "aspro_next_catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINE_ELEMENT_COUNT" => "4",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "ARTICLE",
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "0",
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "4",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SALE_STIKER" => "SALE_TEXT",
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_NAME_FILTER" => "",
		"SECTION_SLIDER_FILTER" => "21",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_ADD_FAVORITES" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_BUY_BTN" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"SHOW_DISCOUNT_TIME" => "N",
		"SHOW_DISCOUNT_TIME_EACH_SKU" => "N",
		"SHOW_MEASURE" => "N",
		"SHOW_MEASURE_WITH_RATIO" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_RATING" => "N",
		"STIKERS_PROP" => "",
		"STORES" => array(
			0 => "2",
			1 => "",
		),
		"TABS_CODE" => "HIT",
		"USE_PRICE_COUNT" => "Y",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
</div>
	<!--<div class="maxwidth-theme" style="background: #6EAB3F;max-width: 1929px;/*margin: 0;*/">
	<div class="col-md-12 col-sm-9 big" style="
    padding-top: 0;
    max-width: 1807px;
">
		<div class="col-md-6 col-sm-9 big" style="text-align: center;padding: 0;">
			<table cellpadding="0" cellspacing="0" style="height: 521px;margin: 0px;">
			<tbody>
			<tr>
				<td class="profc">
 <span style="font-size: 24pt;color: #ffffff;letter-spacing: 0.02em;align-items: center;display: flex;text-transform: uppercase;line-height: 130%;text-align: left;"><span style="color: #ffffff;">FAMA Profi centre</span></span><br>
 <span style="color: #ffffff;"> </span><span style="font-size: 14pt;color: #ffffff;line-height: 130%;letter-spacing: 0.02em;display: flex;text-align: left;">Команда специалистов и экспертов, нацеленных решить любые задачи. Мы подобрали предложения торговых марок, каждая из которых в своем классе всесторонне сильна. Система представительств и региональных дилеров позволяет соответствовать ожиданиям партнеров. </span> <br>
 <span style="font-size: 14pt;color: #ffffff;font-size: 14pt;color: #ffffff;line-height: 130%;letter-spacing: 0.02em;display: flex;text-align: left;">Подробнее</span>
				</td>
			</tr>
			</tbody>
			</table>
		</div>
		<div class="col-md-6 col-sm-9 big" style="text-align: center; padding: 0;">
 <img width="967" alt="Screenshot_4.png" src="/upload/medialibrary/81b/81b119126fd07e9955d8b0eb7b662956.png" height="574" title="Screenshot_4.png" style="
    max-width: 100%;height: auto; min-height: 521px;
" class="nonam">
		</div>
	</div>
</div>

-->
</div> 

<?//if($isShowBlog):?>
<div class="maxwidth-theme" style="max-width: 1929px;
    background-color: #f9f9fa;
">
	<?//$APPLICATION->IncludeComponent("bitrix:main.include", "template1_new", array(
//"AREA_FILE_RECURSIVE" => "Y",
//		"AREA_FILE_SHOW" => "file",
//		"AREA_FILE_SUFFIX" => "",
//		"COMPONENT_TEMPLATE" => "template1_new",
//		"EDIT_TEMPLATE" => "standard.php",
//		"PATH" => SITE_DIR."include/mainpage/comp_blog.php",
//		"PRICE_CODE" => array(
//			0 => "",
//			1 => "",
//		),
//		"SALE_STIKER" => "SALE_TEXT",
//		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
//		"STIKERS_PROP" => "HIT",
//		"STORES" => array(
//			0 => "",
//			1 => "",
//		)
///	),
//	false,
//	array(
//	"ACTIVE_COMPONENT" => "Y"
//	)
//);?>
<!--</div>-->
	<?//endif;?> 

</div>
<div class="maxwidth-theme" style="/*max-width: 100%;margin: 0;*/background-repeat: no-repeat;background-size: cover;/* background: #e7a328; */">

<!-- <div class="col-md-12 col-sm-9 big" style="
    background: #e7a328;
    margin-top: 2%;
    width: 100%;
    padding-bottom: 20px;
">
    <div class="glav-chto" style="
    float: left;
"><h3 class="title_2" style="
        font-family: AGOpusHighResolution Roman;
        color: #222a58;
        
        padding-right: 20px;
        padding-top: 0px;
width: 100%;
        ">Что красим?</h3></div>
<div class="glav-chto1" style="
"><p style="text-align: justify;margin-top: 2%;padding-top: 13px;font-family: Century Gothic;  font-size: 16px;" font-family:="" century=""><span style="padding-right: 1%;">Фасад деревянного дома</span>
 
<span style="padding-right: 1%;">Фасад или интерьер каменного дома</span>
 
<span style="padding-right: 2%;">Стены и потолки деревянного дома</span>
 
<span style="padding-right: 2%;">Паркет или массивную доску</span>
 
<span style="padding-right: 2%;">Террасы, настилы или садовую мебель</span>
 
<span style="padding-right: 2%;">Баня или сауна</span>
 
<span style="padding-right: 2%;">Окраска детских игрушек</span>
 
<span style="padding-right: 2%;">Окраска стола в гостиной</span>
 
<span style="padding-right: 2%;">Окраска кухонной столешницы</span>
 
    <span style="padding-right: 2%;">Как покрасить обшивной материал</span></p><p></p></div>

		
	

<!--<div class="glav-chto2"><h3 class="title_2" style="
        font-family: AGOpusHighResolution Roman;
        color: #336112;
        
        padding-right: 20px;
        padding-top: 0px;
width: 100%;
text-align: initial;
    margin-bottom: 0;
        ">Что красим?</h3></div>-->
<!--<div class="glav-chto3" style="
"><p style="text-align: justify;margin-top: 2%;padding-top: 13px;font-family: Century Gothic;" font-family:="" century="">Фасад деревянного дома<br>
 
Фасад или интерьер каменного дома<br>
 
Стены и потолки деревянного дома<br>
 
Паркет или массивную доску<br>
 
Террасы, настилы или садовую мебель<br>

Баня или сауна<br>

Окраска детских игрушек<br>
 
Окраска стола в гостиной<br>
 
Окраска кухонной столешницы<br>

   Как покрасить обшивной материал</span></p><p></p></div>
	

	</div>-->


<!--		<div class="col-md-12 col-sm-9 big" style="
    background: #e5f3dc;
    margin-top: 2%;
width: 100%;
"><div class="col-md-2 col-sm-12 big" style="/*text-align: center*/;padding: 0;">
    <h3 class="title_2" style="font-family: AGOpusHighResolution Roman;  color: #326111;
        margin-top: 7%;
    padding-top: 8px; ">Что красим?</h3>
    
		</div>
		<div class="col-md-10 col-sm-12 big" style=" margin: 2% 0; font-family: Century Gothic;"> <p style="text-align: justify;" font-family:="" century=""><span style="padding-right: 2%;">Фасад деревянного дома</span>
 
<span style="padding-right: 2%;">Фасад или интерьер каменного дома</span>
 
<span style="padding-right: 2%;">Стены и потолки деревянного дома</span>
 
<span style="padding-right: 2%;">Паркет или массивную доску</span>
 
<span style="padding-right: 2%;">Террасы, настилы или садовую мебель</span>
 
<span style="padding-right: 2%;">Баня или сауна</span>
 
<span style="padding-right: 2%;">Окраска детских игрушек</span>
 
<span style="padding-right: 2%;">Окраска стола в гостиной</span>
 
<span style="padding-right: 2%;">Окраска кухонной столешницы</span>
 
Как покрасить обшивной материал</p></div>
	</div> --> 

<div class="company_bottom_block">            
    <div class="row wrap_md">
        <div class="col-md-3 col-sm-3 hidden-xs img">
            <?$APPLICATION->IncludeFile(SITE_DIR."include/mainpage/company/front_img.php", Array(), Array( "MODE" => "html", "NAME" => GetMessage("FRONT_IMG") )); ?>
        </div>
        <div class="col-md-9 col-sm-9 big">
            <?if($arRegion):?>
                <?$frame = new \Bitrix\Main\Page\FrameHelper('text-regionality-block');?>
                <?$frame->begin();?>
                    <?=$arRegion['DETAIL_TEXT'];?>
                <?$frame->end();?>
            <?else:?>
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "front", Array("AREA_FILE_SHOW" => "file","PATH" => SITE_DIR."include/mainpage/company/front_info.php","EDIT_TEMPLATE" => ""));?>
            <?endif;?>
        </div>
    </div>            
</div>

<div class="catalog_block items row margin0 ajax_load block">
<div class="catalog_glav2 catalog_item_wrapp col-lg-3 col-md-4 col-sm-6 item_block" data-col="3" style="/* margin: 0 20px 20px 0; */">

				<div class="basket_props_block" id="bx_basket_div_1104_HIT" style="display: none;">
									</div>

				<div class="catalog_item item_wrap main_item_wrapper" id="bx_3966226736_1104_HIT" style="background: 0;">
<a href="" class="thumb shine">
																		
	<img class="noborder" src="/images/tizers/shop_on_board_orange_80.png" alt="" title="" style="
    max-height: 120.25px;
"></a>
				</div>
			</div>
    <div class="catalog_glav2 catalog_item_wrapp col-lg-3 col-md-4 col-sm-6 item_block" data-col="3" style="/* margin: 0 20px 20px 0; */">

				<div class="basket_props_block" id="bx_basket_div_1104_HIT" style="display: none;">
									</div>

				<div class="catalog_item item_wrap main_item_wrapper" id="bx_3966226736_1104_HIT" style="background: 0;">
<a href="" class="thumb shine">
					<img class="noborder" src="/images/tizers/training_orange_80.png" alt="" title="" style="
    max-height: 120.25px;
">
</a>
				</div>
			</div>
    <div class="catalog_glav2 catalog_item_wrapp col-lg-3 col-md-4 col-sm-6 item_block" data-col="3" style="/* margin: 0 20px 20px 0; */">

				<div class="basket_props_block" id="bx_basket_div_1104_HIT" style="display: none;">
									</div>

				<div class="catalog_item item_wrap main_item_wrapper" id="bx_3966226736_1104_HIT" style="background: 0;">
<a href="" class="thumb shine">
					<img class="noborder" src="/images/tizers/consultation_orange_80.png" alt="" title="" style="
    max-height: 120.25px;
">
</a>
				</div>
			</div>
    <div class="catalog_glav2 catalog_item_wrapp col-lg-3 col-md-4 col-sm-6 item_block" data-col="3" style="/* margin: 0 20px 20px 0; */">

				<div class="basket_props_block" id="bx_basket_div_1104_HIT" style="display: none;">
									</div>

				<div class="catalog_item item_wrap main_item_wrapper" id="bx_3966226736_1104_HIT" style="background: 0;">

					<img class="noborder" src="/images/tizers/trials_coloring_orange_80.png" alt="" title="" style="
    max-height: 120.25px;
">

				</div>
			</div>
    <div class="catalog_glav2 catalog_item_wrapp col-lg-3 col-md-4 col-sm-6 item_block" data-col="3" style="/* margin: 0 20px 20px 0; */">

				<div class="basket_props_block" id="bx_basket_div_1104_HIT" style="display: none;">
									</div>

				<div class="catalog_item item_wrap main_item_wrapper" id="bx_3966226736_1104_HIT" style="background: 0;">

					<img class="noborder" src="/images/tizers/color_selection_orange_80.png" alt="" title="" style="
    max-height: 120.25px;
">

				</div>
			</div>
		
					
		
				</div>
</div>
<div class="maxwidth-theme" style="/*max-width: 100%;margin: 0;*/background-repeat: no-repeat;background-size: cover;/* background: #e5f3dc; */">
	
<!--<div class="col-md-12 col-sm-9 big" style="
    background: #f3f3f3;
    margin-top: 2%;
    width: 100%;
    padding-bottom: 20px;
">
    <div style="
    float: left;
"><h3 class="title_2" style="
        font-family: AGOpusHighResolution Roman;
        color: #222a58;
        
        padding-right: 20px;
        padding-top: 0px;
width: 100%;
        ">Центр знаний</h3></div>
<div style="
"><p style="text-align: justify;margin-top: 2%;padding-top: 26px;font-family: Century Gothic;" font-family:="" century="">
 Обучающие материалы</p><p></p></div>
	
		
	</div>-->

<!--<div class="col-md-12 col-sm-9 big" style="
    background: #f3f3f3;
    margin: 2% 0 1% 0;
	width: 100%;
">
	<div class="col-md-2 col-sm-12 big" style="/*text-align: center;*/padding: 0;">
    <h3 class="title_2" style="
    font-family: AGOpusHighResolution Roman;
    color: #326111;
    margin-top: 0%;
    padding-top: 7%;
    font-size: 36px;
    width: 100%;
">Центр знаний</h3>
    
		</div>
		<div class="col-md-10 col-sm-12 big" style=" margin: 43px 0; font-family: Century Gothic;">
 Обучающие материалы</div>
	</div>
</div>-->
</div>
<div class="maxwidth-theme" style="/*max-width: 100%;margin: 0;*/background-repeat: no-repeat;background-size: cover;/* background: #e5f3dc; */ ">
	<div class="col-md-12 col-sm-9 big" style="
    /* background: #e5f3dc; */
    /* margin-top: 2%; */
    width: 100%;
">





<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "standard.php",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/mainpage/comp_brands.php"
	),
	false
);?>


		
</div></div></div></div></div></div>
<div class="wrap_md" style="background: rgb(255 255 255);">
<div class="maxwidth-theme" style="padding-top: 8px;background-color: #ffffff;margin-top: 0;">
	<div class="blog_wrapper banners-small blog">
		<div class="items">
			<div class="row">
				<div class="nonam col-m-40 first-item col-md-4 col-sm-6 col-xs-6" style=" width: 90%; padding: 0; margin-left: 5%; ">
					<div class="item shadow animation-boxs shine 1" style="background-color: #ffffff;margin: 0px 0px 5px;padding-bottom: 2%;" id="bx_651765591_249">
						<div class="zayavka1 col-md-4 col-sm-6">
							<h2 style=" font-size: 16px; line-height: 140%; /* or 22px */ align-items: center; letter-spacing: 0.02em; text-transform: uppercase; font-family: Gotham Pro; ">Анкета качества</h2>
						</div>
						<div class="zayavka2 col-md-4 col-sm-6">
							 Нам важна обратная связь. Пожалуйста, поделитесь мнением о работе с нами
						</div>
						<div class="zayavka3 col-md-4 col-sm-6">
 <a href="/feedback/" class="btn btn-default" style=" border: 1.5px solid #6EAB3F; border-radius: 70px; background-color: #0000; color: #000; ">Заполнить</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	 	
</div>

</div>
<div class="maxwidth-theme smart_desk" style="background-repeat: no-repeat;background-size: cover;margin-top: 30px;">
	<div class="col-md-12 col-sm-9 big" style="width: 100%;">
		<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"blog_smart", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "DATE_ACTIVE_FROM",
			3 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LINK_GOODS",
			1 => "PHOTOPOS",
			2 => "FORM_ORDER",
			3 => "PERIOD",
			4 => "LINK_SERVICES",
			5 => "PHOTOS",
			6 => "DOCUMENTS",
			7 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arRegionLink",
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FORM_ID_ORDER_SERVISE" => "",
		"GALLERY_TYPE" => "small",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "22",
		"IBLOCK_TYPE" => "aspro_next_content",
		"IMAGE_CATALOG_POSITION" => "left",
		"IMAGE_POSITION" => "left",
		"IMAGE_WIDE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "PERIOD",
			2 => "REDIRECT",
			3 => "",
		),
		"LIST_VIEW" => "slider",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "3",
		"NUM_DAYS" => "30",
		"NUM_NEWS" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "Статьи",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PRICE_CODE" => array(
		),
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_2",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SHOW_CHILD_SECTIONS" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"SHOW_FILTER_DATE" => "N",
		"SHOW_NEXT_ELEMENT" => "N",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"STRICT_SECTION_CHECK" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVICE" => "",
		"S_ORDER_SERVISE" => "",
		"T_DOCS" => "",
		"T_GALLERY" => "",
		"T_GOODS" => "",
		"T_NEXT_LINK" => "",
		"T_PREV_LINK" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_SERVICES" => "",
		"T_STAFF" => "",
		"T_STUDY" => "",
		"T_VIDEO" => "",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"YANDEX" => "N",
		"COMPONENT_TEMPLATE" => "blog_smart",
		"SEF_FOLDER" => "/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "blog/#ELEMENT_CODE#/",
		)
	),
	false
);?>
</div>
</div>
<div class="maxwidth-theme smart_desk" style="background-repeat: no-repeat;background-size: cover;margin-top: 30px;">
	<div class="col-md-12 col-sm-9 big" style="width: 100%;">
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"news_smart", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "DATE_ACTIVE_FROM",
			3 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LINK_GOODS",
			1 => "FORM_ORDER",
			2 => "PERIOD",
			3 => "PHOTOPOS",
			4 => "LINK_SERVICES",
			5 => "PHOTOS",
			6 => "DOCUMENTS",
			7 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arRegionLink",
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FORM_ID_ORDER_SERVISE" => "",
		"GALLERY_TYPE" => "small",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "19",
		"IBLOCK_TYPE" => "aspro_next_content",
		"IMAGE_CATALOG_POSITION" => "left",
		"IMAGE_POSITION" => "left",
		"IMAGE_WIDE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DATE_ACTIVE_FROM",
			3 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "PERIOD",
			1 => "REDIRECT",
			2 => "",
		),
		"LIST_VIEW" => "slider",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "3",
		"NUM_DAYS" => "30",
		"NUM_NEWS" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PRICE_CODE" => array(
		),
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_2",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SHOW_CHILD_SECTIONS" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"SHOW_FILTER_DATE" => "N",
		"SHOW_NEXT_ELEMENT" => "N",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"STRICT_SECTION_CHECK" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVICE" => "",
		"S_ORDER_SERVISE" => "",
		"T_DOCS" => "",
		"T_GALLERY" => "",
		"T_GOODS" => "",
		"T_NEXT_LINK" => "",
		"T_PREV_LINK" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_SERVICES" => "",
		"T_STAFF" => "",
		"T_STUDY" => "",
		"T_VIDEO" => "",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"YANDEX" => "N",
		"COMPONENT_TEMPLATE" => "news_smart",
		"SEF_FOLDER" => "/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "/novosti/#ELEMENT_CODE#/",
		)
	),
	false
);?>
</div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_DIR."include/mainpage/comp_instagramm.php"
	)
);?>
