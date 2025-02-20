<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<table class="top_top_menu"><tr>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<td><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<td><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</tr></table>
<?endif?>