<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/([\\w\\d\\-]+)?(/)?(([\\w\\d\\-]+)(/)?)?#',
    'RULE' => 'REQUEST_OBJECT=$1&METHOD=$4',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  42 => 
  array (
    'CONDITION' => '#^/bitrix/services/yandex.market/trading/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/yandex.market/trading/index.php',
    'SORT' => 100,
  ),
  37 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  39 => 
  array (
    'CONDITION' => '#^/video/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => 'bitrix:im.router',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/personal/history-of-orders/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/personal/history-of-orders/index.php',
    'SORT' => 100,
  ),
  163 => 
  array (
    'CONDITION' => '#^/blog/videoinstruktsii/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/blog/videoinstruktsii/index.php',
    'SORT' => 100,
  ),
  38 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  40 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  186 => 
  array (
    'CONDITION' => '#^/contacts/stores/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store1',
    'PATH' => '/contacts/stores/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/company/vacancy/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/vacancy/index.php',
    'SORT' => 100,
  ),
  154 => 
  array (
    'CONDITION' => '#^/company/brendy/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/brendy/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/personal/order/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/personal/order/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/company/staff/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/staff/index.php',
    'SORT' => 100,
  ),
  191 => 
  array (
    'CONDITION' => '#^/company/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/news/index.php',
    'SORT' => 100,
  ),
  71 => 
  array (
    'CONDITION' => '#^/info/brands/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/info/brands/index.php',
    'SORT' => 100,
  ),
  86 => 
  array (
    'CONDITION' => '#^/portfolio/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/portfolio/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 100,
  ),
  43 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  171 => 
  array (
    'CONDITION' => '#^/novosti/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/more/novosti/index.php',
    'SORT' => 100,
  ),
  188 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  190 => 
  array (
    'CONDITION' => '#^/company/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/index.php',
    'SORT' => 100,
  ),
  187 => 
  array (
    'CONDITION' => '#^/stores/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/contacts/stores/index.php',
    'SORT' => 100,
  ),
  169 => 
  array (
    'CONDITION' => '#^/color/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/color/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/auth/#',
    'RULE' => '',
    'ID' => 'aspro:auth.next',
    'PATH' => '/auth/index.php',
    'SORT' => 100,
  ),
  168 => 
  array (
    'CONDITION' => '#^/sale/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/sale/index.php',
    'SORT' => 100,
  ),
  185 => 
  array (
    'CONDITION' => '#^/blog/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/blog/index.php',
    'SORT' => 100,
  ),
);
