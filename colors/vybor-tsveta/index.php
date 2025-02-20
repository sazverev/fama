<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Выбор цвета");
?>

<div style="
    min-height: 600px;
"><style type="text/css">
#frame{
    overflow: hidden;
    width:100%;
    height:1000px;
}
</style>
<script type="text/javascript">
    function loadFrame(){
        document.getElementById('frame').scrollTop = 500;
        document.getElementById('frame').scrollLeft = 40;
    }
</script>
 

 
<div id="frame">
<iframe src="https://biofa.ru/color-matching/?popup"  width="1024" height="1000"  scrolling="yes" style="height: 1000px;border: 0;"></iframe>
</div></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>