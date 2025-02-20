<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);

if($arResult["FILE"] <> '')
	include($arResult["FILE"]);
<div class="company_bottom_block">
	<div class="row wrap_md">
		<div class="col-md-6 col-sm-9 big banki" style=" background-image: url(&quot;/upload/medialibrary/b15/b154a2bba4cf6d70c665b4e136336ab3.jpg&quot;);background-size: 100%; height: 284px;; color: #fff;background-repeat: no-repeat;">
			<div style="padding-left:34%;">
				<h3> <span style="color: #ffffff;">Внешние работы</span> </h3>
				 Мы предлагаем лучшие решения<br>
				 для внешних работ по дереву<br>
 <a href="/catalog/"><span style="color: #ffffff;"><u>Подробнее</u></span></a><span style="color: #ffffff;">&nbsp;</span>&nbsp; &nbsp;
			</div>
		</div>
		<div class="col-md-6 col-sm-9 big banki" style=" background-image: url(&quot;/upload/medialibrary/e71/e71b5b135fb02ff4685cb113ee7c9d24.jpg&quot;);background-size: 100%; height: 284px;; color: #fff;background-repeat: no-repeat;">
			<div style="padding-left:38%;">
				<h3><span style="color: #ffffff;">Внутренние работы</span></h3>
				 Мы предлагаем лучшие цветовые<br>
				 решения<br>
 <a href="/catalog/"><span style="color: #ffffff;"><u>Подробнее</u></span></a><br>
			</div>
		</div>
	</div>
</div>