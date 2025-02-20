/*
You can use this file with your scripts.
It will not be overwritten when you upgrade solution.
*/
$(document).ready(function(){
	if (document.documentElement.clientWidth >= 768) {
		$.fn.equivalent = function (){
			var $articleHeight = $(this),
				maxH	= $articleHeight.eq(0).height(); 
			$articleHeight.each(function(){
				maxH = ( $(this).height() > maxH ) ? $(this).height() : maxH;
			});
			$articleHeight.height(maxH); 
		}
		$('.catalog .catalog_block .item_info .dark_link').equivalent();
		$('.catalog .catalog_block .item_info .preview_text').equivalent();
		// $('.top_wrapper.items_wrapper .inner_wrap .item_info .dark_link').equivalent();
		//$('.top_wrapper.items_wrapper .inner_wrap .item_info .preview_text').equivalent();
	};
	console.log('hey');


});



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

window.addEventListener('b24:form:init', (event) => {
    let form = event.detail.object;
	console.log("form id = " + form.identification.id);
	
    //if (form.identification.id == 2)
	{
		
		form.setProperty("metrika_id", getYClientID());
		form.setProperty("google_id", getGoogleClientID());
    }
});
