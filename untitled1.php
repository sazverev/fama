<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?
	// сторонняя страница сайта, с которой будем брать контент. 
	$content = file_get_contents('https://biofa.ru/shops/');
 
	// определяем начало необходимого фрагмента кода, до которого мы удалим весь контент
	$pos = strpos($content, '<div class="catalogue">');
 
	// удаляем все до нужного фрагмента
	$content = substr($content, $pos);
 
	// находим конец необходимого фрагмента кода
	$pos = strpos($content, '</table>
		 </div>');
 
	// отрезаем нужное количество символов от конца фрагмента
	$content = substr($content, 0, $pos);
 
    //если в нужном контенте встречается не нужный кусок текста, то его вырезаем
    $content = str_replace('текст, который нужно вырезать','', $content); 
 
	// выводим необходимый контент
	echo $content;
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>