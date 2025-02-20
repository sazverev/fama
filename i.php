<?

echo $_SERVER['DOCUMENT_ROOT']."<br>";

echo __DIR__."<br>";

// $df содержит размер свободного места в каталоге "/"
$df = disk_free_space(__DIR__."/");

$tf = disk_total_space(__DIR__."/");

echo "Свободно ".($df/pow(1024,3)). " Гб<br>";
echo " из ".(($tf/(1024*1024*1024)). " Гб<br>");

phpinfo();