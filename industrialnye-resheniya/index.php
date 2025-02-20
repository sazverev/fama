<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("BLOG_PAGE", "Y");
$APPLICATION->SetPageProperty("WIDE_PAGE", "Y");
$APPLICATION->SetPageProperty("HIDE_LEFT_BLOCK", "N");
$APPLICATION->SetPageProperty("HIDETITLE", "Y");?>

<div class="grey_block">
	<div class="batter3 maxwidth-theme" style="max-width: 1920px;
    width: 100%;
    padding: 0;
	height: auto;">
		 <?$APPLICATION->IncludeComponent(
	"aspro:com.banners.next", 
	"top_one_banner", 
	array(
		"BANNER_TYPE_THEME" => "TOP",
		"BANNER_TYPE_THEME_CHILD" => "TOP_SMALL_BANNER",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CATALOG" => "/catalog/",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "top_one_banner",
		"FILTER_NAME" => "arRegionLink",
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
);?> <div id="bx_incl_area_15" title="Двойной щелчок - Редактировать включаемую область текущей страницы"><div class="row wrap_md" style="margin: 0px;">
		<div class="banka1 banki col-md-6 col-sm-9 big banki">
			<div class="banki12">
				<h3 class="banka1_2"> <span style="color: #ffffff;">Внешние работы</span> </h3>
				 Мы предлагаем лучшие решения<br>
				 для внешних работ по дереву<br><br>
 <a href="/catalog/dlya_vneshnikh_rabot/"><span style="color: #ffffff;"><u>Подробнее</u></span></a><span style="color: #ffffff;">&nbsp;</span>&nbsp; &nbsp;
			</div>
		</div>
		<div class="banka2 banki col-md-6 col-sm-9 big banki">
			<div class="banki12">
				<h3 class="banka1_2"><span style="color: #ffffff;">Внутренние работы</span></h3>
				 Мы предлагаем лучшие цветовые<br>
				 решения<br><br>
 <a href="/catalog/dlya_vnutrennikh_rabot/"><span style="color: #ffffff;"><u>Подробнее</u></span></a><br>
			</div>
		</div>
	</div>

<div class="row wrap_md" style="margin: 0;    background-image: url(/upload/medialibrary/6d5/6d5b6170864e8ed6b67edd11efa0a759.png);    background-repeat: no-repeat;    background-size: cover;">
	<div class="col-md-12 col-sm-9 big" style="position: absolute; text-align: center;padding-top:8%; width: 100%;">
		<h3 class="title_block lg" style="
    font-family: Gotham Pro;
    font-size: 42px;
    line-height: 130%;
/* or 55px */
    letter-spacing: 0.02em;
    color: #4A4A4A;
margin-right: 0;
">
		Лидер на рынке </h3>
 <br>
		<h5 style="
    font-family: Gotham Pro;
    font-size: 33px;
    line-height: 130%;
    letter-spacing: 0.01em;
    color: #4A4A4A;
"> натуральных красок и масел</h5>
		<br>
		В России мы являемся без исключения лидером и эксклюзивным дистрибьютором<br>
		 немецкого производителя натуральных экологически чистых красок<br>
		 BIOFA NATURPRODUKTE W. HAHN GMBH<br>
 <div style="
    background-image: url(/upload/medialibrary/037/037bd1941d38f6341adc04874a309120.webp);
    background-position: center;
    background-size: 41%;
   
    background-repeat: no-repeat;
"><img alt="50+.png" src="/upload/medialibrary/2f1/2f1bf571d7d2d0995738ac8189959c1a.png" title="50+.png" style="height: auto;padding-top: 6%;max-width: 100%;">
</div>
	</div>
 <img alt="shutterstock_173827883.png" src="/upload/medialibrary/6d5/6d5b6170864e8ed6b67edd11efa0a759.png" title="shutterstock_173827883.png" class="fon_gl" width="1024" height="243">
</div><br><br></div>
</div>
 <?global $isShowSale, $isShowCatalogSections, $isShowCatalogElements, $isShowMiddleAdvBottomBanner, $isShowBlog;?><?$APPLICATION->IncludeComponent("bitrix:main.include", "template4", Array(
	"AREA_FILE_SHOW" => "page",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "inc",	// Суффикс имени файла включаемой области
		"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
	),
	false
);?> <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <br>
 <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="row wrap_md" style=" background: rgba(188, 205, 152, 0.5); margin: 0;">
<div class="maxwidth-theme" style="background: rgba(251, 251, 251, 0)">
	<div class="blog_wrapper banners-small blog">
		<div class="top_block" style=" margin-left: 4%; margin-top: 10%; ">
			<a href="/to-customers/tsentr-znaniy/"><h3 class="centrz title_block">Центр знаний</h3></a>
			 <a href="/to-customers/tsentr-znaniy/" style="font-size: 14pt">Обучающие материалы по применению продуктов BIOFA</a>
		</div>
		<div class="items">
			<div class="row">
				<div class="col-m-50 first-item col-md-4 col-sm-6 col-xs-6" style="padding: 0;"><a href="/to-customers/12-pravil-pri-rabote-s-maslami-biofa/">
					<table border="1" cellpadding="1" cellspacing="1" style=" height: 528px; ">
					<tbody>
					<tr>
						<td style="background-color: #326111;;padding: 52px;line-height: 150%;">
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
				<div class="col-m-60 first-item col-md-4 col-sm-6 col-xs-6" style="padding: 0;">
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
</div></div>
<div class="wrap_md" style=" background: rgb(243, 243, 243);">
<div class="maxwidth-theme" style=" padding-top: 0; background-color: #F3F3F3; margin-top: 0;">
	<div class="blog_wrapper banners-small blog">
		<div class="items">
			<div class="row">
				<div class="nonam col-m-40 first-item col-md-4 col-sm-6 col-xs-6" style=" width: 90%; padding: 0; margin-left: 5%; ">
					<div class="item shadow animation-boxs shine 1" style="background-color: #ffffff;margin: 0px 0px 103px;padding-bottom: 2%;" id="bx_651765591_249">
						<div class="zayavka1 col-md-4 col-sm-6">
							<h2 style=" font-size: 16px; line-height: 140%; /* or 22px */ align-items: center; letter-spacing: 0.02em; text-transform: uppercase; font-family: Gotham Pro; ">Анкета качества</h2>
						</div>
						<div class="zayavka2 col-md-4 col-sm-6">
							 Нам важна обратная связь. пожалуйста, поделитесь мнением о работе с нами
						</div>
						<div class="zayavka3 col-md-4 col-sm-6">
 <a href="https://test.ros-kar.ru/feedback/" class="btn btn-default" style=" border: 1.5px solid #6EAB3F; border-radius: 70px; background-color: #0000; color: #000; ">Заполнить</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h3 class="title_2">Спецпредложения</h3>
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
		"CACHE_TIME" => "36000000",
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
			0 => "ID",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"OFFERS_LIMIT" => "0",
		"OFFERS_PROPERTY_CODE" => array(
			0 => "ARTICLE",
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
		"PAGE_ELEMENT_COUNT" => "6",
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
		"SECTION_ID" => "84",
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
		"SHOW_MEASURE" => "Y",
		"SHOW_MEASURE_WITH_RATIO" => "N",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_RATING" => "Y",
		"STIKERS_PROP" => "",
		"STORES" => array(
			0 => "",
			1 => "2",
			2 => "",
		),
		"TABS_CODE" => "HIT",
		"USE_PRICE_COUNT" => "Y",
		"USE_PRODUCT_QUANTITY" => "N"
	),
	false
);?>
</div>
	<div class="maxwidth-theme" style="background: #6EAB3F;max-width: 1929px;/*margin: 0;*/">
	<div class="col-md-12 col-sm-9 big" style="
    padding-top: 0;
    max-width: 1807px;
">
		<div class="col-md-6 col-sm-9 big" style="text-align: center;padding: 0;">
			<table cellpadding="0" cellspacing="0" style="height: 528px;margin: 0px;">
			<tbody>
			<tr>
				<td class="profc">
 <span style="font-size: 24pt;color: #ffffff;letter-spacing: 0.02em;align-items: center;display: flex;text-transform: uppercase;line-height: 130%;text-align: left;"><span style="color: #ffffff;">FAMA Profi Сentre</span></span><br>
 <span style="color: #ffffff;"> </span><span style="font-size: 14pt;color: #ffffff;line-height: 130%;letter-spacing: 0.02em;display: flex;text-align: left;">Команда специалистов и экспертов, нацеленных решить любые задачи. Мы подобрали предложения торговых марок, каждая из которых в своем классе всесторонне сильна. Система представительств и региональных дилеров позволяет соответствовать ожиданиям партнеров. </span> <br>
 <span style="font-size: 14pt;color: #ffffff;font-size: 14pt;color: #ffffff;line-height: 130%;letter-spacing: 0.02em;display: flex;text-align: left;">Подробнее</span>
				</td>
			</tr>
			</tbody>
			</table>
		</div>
		<div class="col-md-6 col-sm-9 big" style="text-align: center; padding: 0;">
 <img width="967" alt="Screenshot_4.png" src="/upload/medialibrary/81b/81b119126fd07e9955d8b0eb7b662956.png" height="574" title="Screenshot_4.png" style="
    max-width: 100%;height: auto;
" class="nonam">
		</div>
	</div>
</div>


</div> 

<?if($isShowBlog):?>
<div class="maxwidth-theme" style="max-width: 1929px;
    background-color: #f9f9fa;
">
	 <?$APPLICATION->IncludeComponent("bitrix:main.include", "template1_new", array(
	"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"COMPONENT_TEMPLATE" => "template1_new",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_DIR."include/mainpage/comp_blog.php",
		"PRICE_CODE" => array(
			0 => "",
			1 => "",
		),
		"SALE_STIKER" => "SALE_TEXT",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"STIKERS_PROP" => "HIT",
		"STORES" => array(
			0 => "",
			1 => "",
		)
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
</div>
 <?endif;?> 

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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>