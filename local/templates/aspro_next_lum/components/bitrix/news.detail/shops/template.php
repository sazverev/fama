<div class="wrapper_inner shop detail">
				<div class="contacts_left1">
					<div class="store_description">
							<div class="store_property">
								<img src="<? echo $arResult['DETAIL_PICTURE']['SRC']?>">
							</div>
							<div class="store_property">
								<div class="title">Название</div>
								<div class="value"><?echo $arResult['NAME']?></div>
							</div>
							<div class="store_property">
								<div class="value"><?echo $arResult['DETAIL_TEXT']?></div>
							</div>
							<div class="store_property">
								<div class="title">Адрес</div>
								<div class="value"><?echo $arResult["PROPERTIES"]["ADDRESS"]["VALUE"]?></div>
							</div>
							<div class="store_property">
								<div class="title">Телефон</div>
								<div class="value">

									<div class="phone">
								<?foreach($arResult["PROPERTIES"]["PHONE"]["VALUE"] as $val):?>


								   <a rel="nofollow" href="tel:<?print_r($val);?>"><a href="tel:<?print_r($val);?>"><?print_r($val);?></a></a>
								<?endforeach;?>


									</div>
								</div>
							</div>
							<? if(!empty($arResult["PROPERTIES"]["SCHEDULE"]["VALUE"]["TEXT"])){?>
							<div class="store_property">
								<div class="title">Режим работы</div>
								<div class="value"><?echo $arResult["PROPERTIES"]["SCHEDULE"]["VALUE"]["TEXT"]?></div>
							</div>
							<? } ?>

							<? if(!empty($arResult["PROPERTIES"]["SITE"]["VALUE"])){?>
							<div class="store_property">
								<div class="title">Сайт</div>
								<div class="value"><a href="<?=(strpos($arResult["PROPERTIES"]["SITE"]["VALUE"], 'http') === false ? 'http://' : '').$arResult["PROPERTIES"]["SITE"]["VALUE"];?>" rel="nofollow" target="_blank">
											<?=$arResult["PROPERTIES"]["SITE"]["VALUE"];?>
										</a></div>
							</div>
							<? } ?>

							<?if (!empty($arResult["PROPERTIES"]["BRANDS"]["VALUE"])):?>
							<div class="store_property">
								<div class="title">Представленные бренды</div>
								<div style="text-align: center;">
									
										<?foreach($arResult["PROPERTIES"]["BRANDS"]["VALUE"] as $photo):?>
											<img width="20%" src="<?=CFile::GetPath($photo)?>" />
										<?endforeach?>
								</div>
							</div>
							<?endif?>
					</div>
				</div>

				<div class="clearboth"></div>

				<div class="content">

					<? if(is_array($arResult["PROPERTIES"]["MORE_PHOTOS"]["VALUE"]))?>
					<div class="store_property">
						<div class="title">Фото магазина</div>
					</div>
							<?foreach($arResult["PROPERTIES"]["MORE_PHOTOS"]["VALUE"] as $id)
							{
								$img = CFile::GetPath($id);
								?> <div class="col-md-4 col-sm-6">
										<a href="https://<?=$_SERVER['HTTP_HOST'].$img?>" class="color-item fancybox" data-fancybox-group="gallery490">
											<img src="<?=$img?>" alt=""/>
										</a>
									</div>
								<?

							}

					?>
				</div>

				<!-- noindex--><a rel="nofollow" href="javascript:history.back();" class="back-url url-block"><i class="fa fa-angle-left"></i><span>Вернуться</span></a><!-- /noindex-->

</div>