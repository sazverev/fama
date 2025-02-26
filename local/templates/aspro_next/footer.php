						<?CNext::checkRestartBuffer();?>
						<?IncludeTemplateLangFile(__FILE__);?>
							<?if(!$isIndex):?>
								<?if($isBlog):?>
									</div> <?// class=col-md-9 col-sm-9 col-xs-8 content-md?>
									<div class="col-md-3 col-sm-3 hidden-xs hidden-sm right-menu-md">
										<div class="sidearea">
											<?$APPLICATION->ShowViewContent('under_sidebar_content');?>
											<?CNext::get_banners_position('SIDE', 'Y');?>
											<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "sidebar",
		"AREA_FILE_RECURSIVE" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "include_area.php",
		"PATH" => SITE_DIR."include/left_block/menu.left_menu.php"
	),
	false
);?>
										</div>
									</div>
								</div><?endif;?>
								<?if($isHideLeftBlock && !$isWidePage):?>
									</div> <?// .maxwidth-theme?>
								<?endif;?>
								</div> <?// .container?>
							<?else:?>
								<?CNext::ShowPageType('indexblocks');?>
							<?endif;?>
							<?CNext::get_banners_position('CONTENT_BOTTOM');?>
						</div> <?// .middle?>
					<?//if(!$isHideLeftBlock && !$isBlog):?>
					<?if(($isIndex && $isShowIndexLeftBlock) || (!$isIndex && !$isHideLeftBlock) && !$isBlog):?>
						</div> <?// .right_block?>				
						<?if($APPLICATION->GetProperty("HIDE_LEFT_BLOCK") != "Y" && !defined("ERROR_404")):?>
							<div class="left_block">
								<?CNext::ShowPageType('left_block');?>
							</div>
						<?endif;?>
					<?endif;?>
				<?if($isIndex):?>
					</div>
				<?elseif(!$isWidePage):?>
					</div> <?// .wrapper_inner?>				
				<?endif;?>
			</div> <?// #content?>
			<?CNext::get_banners_position('FOOTER');?>
		</div><?// .wrapper?>
		<footer id="footer">
			<?if($APPLICATION->GetProperty("viewed_show") == "Y" || $is404):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"basket", 
					array(
						"COMPONENT_TEMPLATE" => "basket",
						"PATH" => SITE_DIR."include/footer/comp_viewed.php",
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "",
						"AREA_FILE_RECURSIVE" => "Y",
						"EDIT_TEMPLATE" => "standard.php",
						"PRICE_CODE" => array(
							0 => "BASE",
						),
						"STORES" => array(
							0 => "",
							1 => "",
						),
						"BIG_DATA_RCM_TYPE" => "bestsell"
					),
					false
				);?>					
			<?endif;?>
			<?CNext::ShowPageType('footer');?>
		</footer>
		
		<?CNext::ShowPageType('search_title_component');?>
		<?CNext::setFooterTitle();
		CNext::showFooterBasket();?>

<?//sotbit seometa meta start
global $sotbitSeoMetaTitle;
global $sotbitSeoMetaKeywords;
global $sotbitSeoMetaDescription;
global $sotbitSeoMetaBreadcrumbTitle;
global $sotbitSeoMetaH1;
if(!empty($sotbitSeoMetaH1))
{
$APPLICATION->SetTitle($sotbitSeoMetaH1);
}
if(!empty($sotbitSeoMetaTitle))
{
$APPLICATION->SetPageProperty("title", $sotbitSeoMetaTitle);
}
/*
if(!empty($sotbitSeoMetaKeywords))
{
$APPLICATION->SetPageProperty("keywords", $sotbitSeoMetaKeywords);
}
*/
if(!empty($sotbitSeoMetaDescription))
{
$APPLICATION->SetPageProperty("description", $sotbitSeoMetaDescription);
}
if(!empty($sotbitSeoMetaBreadcrumbTitle) ) {
$APPLICATION->AddChainItem($sotbitSeoMetaBreadcrumbTitle  );
}
//sotbit seometa meta end ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(93432764, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/93432764" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>

document.addEventListener("DOMContentLoaded", () => {

    (function() {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'https://tracking.datadrivenpromotion.com/tracking/counter?condition=ZG9tYWluPUZhbWFwcm9maS5ydSZpZD0xNzA=&document_url='+ encodeURIComponent(document.URL);
        var d = document.getElementsByTagName('script')[0];
        d.parentNode.insertBefore(s, d);
    })();

      (function(w,d,u){
               var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
               var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
       })(window,document,'https://cdn-ru.bitrix24.ru/b11298180/crm/site_button/loader_2_ntyvic.js');


(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init?referrer="+encodeURIComponent(d.location.href);
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', 'c34681e740787788c83be59fc3b61d53');


(function(w, d, s, h) {
    w.roistatLanguage = '';
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = "/static/marketplace/Bitrix24Widget/script.js";
    var js = d.createElement(s); js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com');


});



</script>
<?/*style type="text/css"> dofollow { display: none; }</style><dofollow>unica hija episode 62 full episode <a href="https://teleseryeepesodes.com/" title="teleseryeepesodes.com mmk today">teleseryeepesodes.com</a> probinsyano june 24 2021
gujarati sax video <a href="https://indianfuckertube.com" rel="dofollow">indianfuckertube.com</a> orissa sex
おばさん パンツ <a href="https://javmobile.mobi/" target="_self" title="javmobile.mobi 今日は孕むまでナカに出して… 篠田ゆう">javmobile.mobi</a> フェラ散歩
xnnn porn <a href="https://pornonaft.net" target="_self" title="pornonaft.net hq retro porn">pornonaft.net</a> indian hindi xnxx
kannada aunty sex videos <a href="https://originalhindiporn.mobi/" target="_blank">originalhindiporn.mobi</a> tabu sex picture
</dofollow>
<style type="text/css"> dofollow { display: none; }</style><dofollow>سكس حضن <a href="https://izleporno.biz/">izleporno.biz</a> مقاطع فيديو جنس
desi aunty fucking videos <a href="https://pornjob.info" rel="dofollow" target="_self" title="pornjob.info">pornjob.info</a> instagram sex videos
سكس نيك فى الحمام <a href="https://www.ounoun.com/" rel="dofollow" target="_blank" title="ounoun.com جنس المراهقات">ounoun.com</a> sxxxx
bf xxr6 20 <a href="https://tubezonia.info" rel="dofollow" target="_blank">tubezonia.info</a> hindi aunty xnxx
kannada videos sex <a href="https://orgyvids.info" rel="dofollow" title="orgyvids.info porn teen hd">orgyvids.info</a> film x
</dofollow>
<style type="text/css"> dofollow { display: none; }</style><dofollow>www.desipapa <a href="https://www.pelisporno.org/" target="_self" title="pelisporno.org incest porn tube video">pelisporno.org</a> playmatehunter
dsvr-313 <a href="https://www.eroterest.mobi/" rel="dofollow" target="_blank">eroterest.mobi</a> ipz-969
ولد ينيك مرات اخوه <a href="https://vosyed.com/" rel="dofollow" target="_self" title="vosyed.com">vosyed.com</a> سكسيك
america college sex videos <a href="https://porndorn.net" rel="dofollow" target="_blank">porndorn.net</a> indian best porn sites
افلام سكس خدمات <a href="https://www.crazypornonline.com/" rel="dofollow" target="_self" title="crazypornonline.com عيل ينيك">crazypornonline.com</a> اب ينيك بنته مترجم
</dofollow*/?>
	</body>
</html>