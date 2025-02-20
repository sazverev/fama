<? use Bitrix\Main\Application; ?>
<?
	global $USER;
	$recordset=0;

	$url = $APPLICATION->GetCurDir();
	$urls=explode("/", $url); 
	$ifilter =  array_search('filter', $urls);
	if($ifilter) {
		$url = implode("/",array_slice($urls, 0, $ifilter)); $url .="/";
	}

	$connection = Application::getConnection();
$sql = "SELECT NAME, TITLE, NEW_URL, SORT FROM b_sotbit_seometa_chpu WHERE ACTIVE = 'Y' AND REAL_URL LIKE '%".$url."filter/%' ORDER BY NAME";
	$recordset = $connection->query($sql);

	$down_tags=array();
	if($recordset)
	{
		while($tag = $recordset->fetch())
		{
			if($tag['SORT']>0)
				$down_tags[] = $tag;
		}
	}

	if(!empty($down_tags))
	{
		?>
		<div class="section_block">
			<div class="sections_wrapper">
				<div class="list items">
						<?

						$c='';
						foreach($down_tags as $sotbit)
						{

							?>
								<div class="item_tag">
									<div class="name">
										<a href="<?=$sotbit['NEW_URL']?>"><?=$sotbit['NAME']?></a> 	
									</div>
								</div>
							<?
						}
						?>
				</div>
			</div>
		</div>
		<?
	}
?>
