<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?if($GET["debug"] == "y")
	error_reporting(E_ERROR | E_PARSE);
global $USER;
if(!$USER->IsAdmin())
    die();
IncludeTemplateLangFile(__FILE__);
global $APPLICATION, $arRegion, $arSite, $arTheme;
$arSite = CSite::GetByID(SITE_ID)->Fetch();
$htmlClass = ($_REQUEST && isset($_REQUEST['print']) ? 'print' : false);
$bIncludedModule = (\Bitrix\Main\Loader::includeModule("aspro.next"));
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>" <?=($htmlClass ? 'class="'.$htmlClass.'"' : '')?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTDT7NT');</script>
<!-- End Google Tag Manager -->
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" href="/favicon.svg" type="image/svg+xml" />
	<?$APPLICATION->ShowMeta("viewport");?>
	<?$APPLICATION->ShowMeta("HandheldFriendly");?>
	<?$APPLICATION->ShowMeta("apple-mobile-web-app-capable", "yes");?>
	<?$APPLICATION->ShowMeta("apple-mobile-web-app-status-bar-style");?>
	<?$APPLICATION->ShowMeta("SKYPE_TOOLBAR");?>

	<?
	$APPLICATION->ShowMeta("robots");
	$APPLICATION->ShowMeta("description");
	$APPLICATION->ShowLink("canonical");

    use Bitrix\Main\Page\Asset;

	//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/dist/css/styles.css');
	//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/dist/js/scripts.js');

	$APPLICATION->ShowCSS();
	$APPLICATION->ShowHeadStrings();
	$APPLICATION->ShowHeadScripts();
	?>

	<?$APPLICATION->AddHeadString('<script>BX.message('.CUtil::PhpToJSObject( $MESS, false ).')</script>', true);?>
	<?if($bIncludedModule)
		CNext::Start(SITE_ID);?>

<script type="text/javascript">
(function() {
var s = document.createElement('script');
s.type = 'text/javascript';
s.async = true;
s.src = 'https://tracking.datadrivenpromotion.com/tracking/counter?condition=ZG9tYWluPUZhbWFwcm9maS5ydSZpZD0xNzA=&document_url='+ encodeURIComponent(document.URL);
var d = document.getElementsByTagName('script')[0];
d.parentNode.insertBefore(s, d);
})();
</script>

<link href="/local/templates/aspro_next_lum/dist/css/styles.css?v=1" rel="stylesheet" type="text/css">

</head>
<?$bIndexBot = (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Lighthouse') !== false); // is indexed yandex/google bot?>
<body>


<div class="wrapper-main">
  <header class="header">

    <div class="header-mobile">
      <div class="header-mobile__left">
        <a class="burger"><span></span></a>
        <a href="#" class="logo"><img src="images/logo.svg" alt=""></a>
      </div>
      <div class="header-mobile__right">
          <a href="tel:" class="phone-mobile">
            <svg class="icon">
              <use xlink:href="images/sprite-header.svg#phone-icon"></use>
            </svg>
          </a>
          <a href="#" class="shopping-cart-mobile">
            <span class="shopping-cart-mobile__icon">
              <svg class="icon">
                <use xlink:href="images/sprite-header.svg#shopping-cart-icon"></use>
              </svg>
              <span class="shopping-cart-mobile__number">0</span>
            </span>
          </a>
      </div>
      
    </div>
    
      <div class="header-top">
        <div class="container">
          <div class="header-content">
            <div class="header-top-menu">
              <ul>
                <li><a href="">ОПЛАТА</a></li>
                <li><a href="">ДОСТАВКА</a></li>
                <li><a href="">О КОМПАНИИ</a></li>
                <li><a href="">ГДЕ КУПИТЬ</a></li>
                <li><a href="">НАПИСАТЬ ГЕНЕРАЛЬНОМУ ДИРЕКТОРУ</a></li>
              </ul>
            </div>
            <div class="header-content__right">
              <a href="#" class="header-location">
                <svg class="icon">
                  <use xlink:href="images/sprite-header.svg#location-icon"></use>
                </svg>
                Москва
              </a>
              <a href="#" class="button button--empty button--call">Заказать звонок</a>
              <a href="#" class="button button--entry">Войти</a>
            </div>
            
    
        </div>
        </div>
        
      </div>
      <div class="header-main">
        <div class="container">
          <div class="header-content">
            <a href="#" class="logo"><img src="images/logo.svg" alt=""></a>
            <div class="search-header">
              <form action="">
                <svg class="icon">
                  <use xlink:href="images/sprite-header.svg#search-icon"></use>
                </svg>
                <input type="text" placeholder="Что ищите">
                <button>Найти</button>
              </form>
              
            </div>
            <div class="header-phone">
              <a href="tel:">
                <svg class="icon">
                  <use xlink:href="images/sprite-header.svg#phone-icon"></use>
                </svg>
                +7 (499) 110-88-59
              </a>
              <a href="tel:">
                <svg class="icon">
                  <use xlink:href="images/sprite-header.svg#phone-icon"></use>
                </svg>
                8 (800) 555-33-79
              </a>
            </div>
            <div class="header-content__right">
              <div class="header-favorites  active">
                <a href="">
                  <span class="header-favorites__icon">
                    <svg class="icon">
                      <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                    </svg>
                    <span class="header-favorites__number">1</span>
                   
                  </span>
                  <span class="header-favorites__title">Избранное</span>
                </a>
                  
              </div>
              <div class="header-shopping-cart">
                <a href="">
                  <span class="header-shopping-cart__icon">
                    <svg class="icon">
                      <use xlink:href="images/sprite-header.svg#shopping-cart-icon"></use>
                    </svg>
                    <span class="header-shopping-cart__number">0</span>
                  </span>
                  
                  <span class="header-shopping-cart__title">Корзина<span>пуста</span> </span>
                </a>
                  
              </div>
            </div>
          
          </div>
        </div>
        
      </div>
      <div class="header-menu">
        <div class="container">
          <div class="header-content">
            <div class="header-content__mobile-bg">
              <div class="mobile-search">
                <form action="">
                  <svg class="icon">
                    <use xlink:href="images/sprite-header.svg#search-icon"></use>
                  </svg>
                  <input type="text" placeholder="Что ищите">
                </form>
              </div>
      
              <nav class="main-menu">
                <ul class="accordion">
                  <li class="opener-li"><a class="opener">Каталог</a>
                    <ul class="main-menu__dropdown">
                      <li>
                        <div class="main-menu__row">
                          <div class="main-menu__col">
                              <div class="main-menu__item  main-menu__item--mobile">
                                <span class="main-menu__item-logo"><img src="images/biofa-logo.png" alt=""></span>
                                <ul class="main-menu__second">
                                  <li><a href="">Натуральные немецкие краски и масла для дерева.</a></li>
                                </ul>
                              </div>
                              <div class="main-menu__item  main-menu__item--mobile">
                                <span class="main-menu__item-logo"><img src="images/fama-paint-logo.png" alt=""></span>
                                <ul class="main-menu__second">
                                  <li><a href="">Как покрасить акриловые матовые водно-дисперсионные краски и грунты </a></li>    
                                  <li><a href=""> для наружных и внутренних работ душевую   в бане</a></li>
                                </ul>
                              </div>
                          </div>
                          <div class="main-menu__col">
                            <div class="main-menu__item  main-menu__item--mobile">
                              <span class="main-menu__item-logo"><img src="images/fama-logo.png" alt=""></span>
                              <ul class="main-menu__second">
                                <li><a href="">Профессиональные продукты для малярных работ</a></li>
                              </ul>
                            </div>
                            <ul class="main-menu__second">
                              <li><strong>Другая продукция</strong></li>
                              <li><a href="">Абразивы, пады, круги, ленты</a></li>
                              <li><a href="">Малярный инструмент</a></li>
                              <li><a href="">Специальные продукты</a></li>
                              <li><a href="">Натуральная косметика</a></li>
                              <li><a href="">Средства по уходу за домом</a></li>
                              <li><a href="">Антибактериальные средства</a></li>
                            </ul>
                          </div>
                          <div class="main-menu__col">
                            <div class="main-menu__img"><img src="images/img-1.jpg" alt=""></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="opener-li"><a class="opener">Что красим?</a>
                    <ul class="main-menu__dropdown">
                      <li>
                        <div class="main-menu__row">
                          <div class="main-menu__col">
                            <div class="main-menu__item">
                            <ul class="main-menu__second">
                              <li><strong>Фасады</strong></li>
                              <li><a href="">Фасад деревянного дома</a></li>
                              <li><a href="">Фасад кирпичного дома</a></li>
                            </ul>
                            </div>
                            <div class="main-menu__item">
                            <ul class="main-menu__second">
                              <li><strong><a href="">Стены и потолки деревянного дома</a></strong></li>
                            </ul>
                          </div>
                          <div class="main-menu__item">
                            <ul class="main-menu__second">
                              <li><strong>Баня или сауна</strong></li>
                              <li><a href="">Как покрасить душевую в бане</a></li>
                            </ul>
                          </div>
                          <div class="main-menu__item">
                            <ul class="main-menu__second">
                              <li><strong>Террасы, садовая мебель</strong></li>
                              <li><a href="">Деревянные террасы, настилы</a></li>
                              <li><a href="">Уход за террасой</a></li>
                              <li><a href="">Окраска термодоски</a></li>
                              <li><a href="">Наличники, карнизы, декор</a></li>
                              <li><a href="">Окна, двери, ставни, подоконники</a></li>
                              <li><a href="">Заборы, ворота, изгороди</a></li>
                              <li><a href="">Беседки, перголы</a></li>
                              <li><a href="">Балконы, веранды, лоджии</a></li>
                              <li><a href="">Для камня и кирпича</a></li>
                            </ul>
                          </div>
                      
                          </div>
                          <div class="main-menu__col">
                            <div class="main-menu__item">
                              <ul class="main-menu__second">
                                <li><strong>Паркет или массивную доску</strong></li>
                                <li><a href="">Паркет</a></li>
                                <li><a href="">Уход и реставрация</a></li>
                                <li><a href="">Пол, паркет, лестницы</a></li>
                                <li><a href="">Личный опыт: Как нанести</a></li>
                              </ul>
                            </div>
                            <div class="main-menu__item">
                              <ul class="main-menu__second">
                                <li><strong>Окраска мебели из массива (NEW)</strong></li>
                                <li><a href="">Окраска стола в гостиной</a></li>
                                <li><a href="">Окраска кухонной столешницы</a></li>
                                <li><a href="">8 способов покраски слэба</a></li>
                                <li><a href="">Аксессуары из дерева</a></li>
                              </ul>
                            </div>
                            <div class="main-menu__item">
                              <ul class="main-menu__second">
                                <li><strong>Детские игрушки</strong></li>
                              </ul>
                            </div>
                          </div>
                          <div class="main-menu__col">
                            <div class="main-menu__img"><img src="images/img-2.jpg" alt=""></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  
                  </li>
                  <li><a href="">Услуги</a></li>
                  <li><a href="">Колористика</a></li>
                  <li><a href="">Центр знаний</a></li>
                  <li><a href="">Новости</a></li>
                  <li><a href="">О компании</a></li>
                  <li><a href="">Контакты</a></li>
                  <li class="main-menu__desktop-dropdown"><a>...</a>
                    <ul></ul>
                  </li>
                </ul>
              </nav>
            
              <div class="mobile-top-menu">
                <ul>
                  <li><a href="">ОПЛАТА</a></li>
                  <li><a href="">ДОСТАВКА</a></li>
                  <li><a href="">О КОМПАНИИ</a></li>
                  <li><a href="">ГДЕ КУПИТЬ</a></li>
                  <li><a href="">НАПИСАТЬ ГЕНЕРАЛЬНОМУ ДИРЕКТОРУ</a></li>
                </ul>
              </div>
            </div>
           
          </div>
        </div>
        
      </div>
    
      <div class="header-menu header-menu--fixed">
        <div class="container">
          <div class="header-content">
            <a href="#" class="logo"><img src="images/logo.svg" alt=""></a>
            <nav class="main-menu">
              <ul class="accordion">
                <li class="opener-li"><a class="opener">Каталог</a>
                  <ul class="main-menu__dropdown">
                    <li>
                      <div class="main-menu__row">
                        <div class="main-menu__col">
                            <div class="main-menu__item  main-menu__item--mobile">
                              <span class="main-menu__item-logo"><img src="images/biofa-logo.png" alt=""></span>
                              <ul class="main-menu__second">
                                <li><a href="">Натуральные немецкие краски и масла для дерева.</a></li>
                              </ul>
                            </div>
                            <div class="main-menu__item  main-menu__item--mobile">
                              <span class="main-menu__item-logo"><img src="images/fama-paint-logo.png" alt=""></span>
                              <ul class="main-menu__second">
                                <li><a href="">Как покрасить акриловые матовые водно-дисперсионные краски и грунты </a></li>    
                                <li><a href=""> для наружных и внутренних работ душевую   в бане</a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="main-menu__col">
                          <div class="main-menu__item  main-menu__item--mobile">
                            <span class="main-menu__item-logo"><img src="images/fama-logo.png" alt=""></span>
                            <ul class="main-menu__second">
                              <li><a href="">Профессиональные продукты для малярных работ</a></li>
                            </ul>
                          </div>
                          <ul class="main-menu__second">
                            <li><strong>Другая продукция</strong></li>
                            <li><a href="">Абразивы, пады, круги, ленты</a></li>
                            <li><a href="">Малярный инструмент</a></li>
                            <li><a href="">Специальные продукты</a></li>
                            <li><a href="">Натуральная косметика</a></li>
                            <li><a href="">Средства по уходу за домом</a></li>
                            <li><a href="">Антибактериальные средства</a></li>
                          </ul>
                        </div>
                        <div class="main-menu__col">
                          <div class="main-menu__img"><img src="images/img-1.jpg" alt=""></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="opener-li"><a class="opener">Что красим?</a>
                  <ul class="main-menu__dropdown">
                    <li>
                      <div class="main-menu__row">
                        <div class="main-menu__col">
                          <div class="main-menu__item">
                          <ul class="main-menu__second">
                            <li><strong>Фасады</strong></li>
                            <li><a href="">Фасад деревянного дома</a></li>
                            <li><a href="">Фасад кирпичного дома</a></li>
                          </ul>
                          </div>
                          <div class="main-menu__item">
                          <ul class="main-menu__second">
                            <li><strong><a href="">Стены и потолки деревянного дома</a></strong></li>
                          </ul>
                        </div>
                        <div class="main-menu__item">
                          <ul class="main-menu__second">
                            <li><strong>Баня или сауна</strong></li>
                            <li><a href="">Как покрасить душевую в бане</a></li>
                          </ul>
                        </div>
                        <div class="main-menu__item">
                          <ul class="main-menu__second">
                            <li><strong>Террасы, садовая мебель</strong></li>
                            <li><a href="">Деревянные террасы, настилы</a></li>
                            <li><a href="">Уход за террасой</a></li>
                            <li><a href="">Окраска термодоски</a></li>
                            <li><a href="">Наличники, карнизы, декор</a></li>
                            <li><a href="">Окна, двери, ставни, подоконники</a></li>
                            <li><a href="">Заборы, ворота, изгороди</a></li>
                            <li><a href="">Беседки, перголы</a></li>
                            <li><a href="">Балконы, веранды, лоджии</a></li>
                            <li><a href="">Для камня и кирпича</a></li>
                          </ul>
                        </div>
                    
                        </div>
                        <div class="main-menu__col">
                          <div class="main-menu__item">
                            <ul class="main-menu__second">
                              <li><strong>Паркет или массивную доску</strong></li>
                              <li><a href="">Паркет</a></li>
                              <li><a href="">Уход и реставрация</a></li>
                              <li><a href="">Пол, паркет, лестницы</a></li>
                              <li><a href="">Личный опыт: Как нанести</a></li>
                            </ul>
                          </div>
                          <div class="main-menu__item">
                            <ul class="main-menu__second">
                              <li><strong>Окраска мебели из массива (NEW)</strong></li>
                              <li><a href="">Окраска стола в гостиной</a></li>
                              <li><a href="">Окраска кухонной столешницы</a></li>
                              <li><a href="">8 способов покраски слэба</a></li>
                              <li><a href="">Аксессуары из дерева</a></li>
                            </ul>
                          </div>
                          <div class="main-menu__item">
                            <ul class="main-menu__second">
                              <li><strong>Детские игрушки</strong></li>
                            </ul>
                          </div>
                        </div>
                        <div class="main-menu__col">
                          <div class="main-menu__img"><img src="images/img-2.jpg" alt=""></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                
                </li>
                <li><a href="">Услуги</a></li>
                <li><a href="">Колористика</a></li>
                <li><a href="">Центр знаний</a></li>
                <li><a href="">Новости</a></li>
                <li><a href="">О компании</a></li>
                <li><a href="">Контакты</a></li>
                <li class="main-menu__desktop-dropdown"><a>...</a>
                  <ul></ul>
                </li>
              </ul>
            </nav>
    
            <div class="header-menu__right">
              <div class="header-favorites">
                <a href="">
                  <span class="header-favorites__icon">
                    <svg class="icon">
                      <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                    </svg>
                    <span class="header-favorites__number">0</span>
                   
                  </span>
                </a>
                  
              </div>
              <div class="header-shopping-cart">
                <a href="">
                  <span class="header-shopping-cart__icon">
                    <svg class="icon">
                      <use xlink:href="images/sprite-header.svg#shopping-cart-icon"></use>
                    </svg>
                    <span class="header-shopping-cart__number">0</span>
                  </span>
                </a>
                  
              </div>
              <a href="" class="search-btn">
                <svg class="icon">
                  <use xlink:href="images/sprite-header.svg#search-icon"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        
      </div>
    </header>
    
    <main class="main-inner">
    
      <div class="inner-banner"><img src="images/inner-banner-img.jpeg" alt=""></div>
     <div class="container">
    
      <div class="breadcrumbs-nav">
        <a href="">Главная</a>
        <span class="sep"></span>
        <a href="">Каталог</a>
        <span class="sep"></span>
        <a href="">Biofa</a>
        <span class="sep"></span>
        <span class="breadcrumbs-nav__current">Для внешних работ</span>
      </div>
    
      <h1 class="inner-title">Масло по дереву BIOFA для внешних работ</h1>
    
      <div class="main-tags">
        <a href="">Терассы, настилы</a>
        <a href="">Уход за терассой</a>
        <a href="">Окраска термодоски</a>
        <a href="">Наличники карнизы, декор</a>
      </div>
    
      <div class="catalog">
        <div class="catalog__side">
          <div class="catalog__side-sticky">
            <div class="catalog__side-filters">
    
              <span class="catalog-mobile-close">
                <svg class="icon">
                  <use xlink:href="images/sprite.svg#xmark-solid"></use>
                </svg>
              </span>
              <div class="filter-item">
                  <span class="filter-item__title">Категория</span>
      
                  <div class="filter-item__group">
                    <div class="filter-item__group-content filter-item__group-content--list">
                      <ul>
                        <li><a href="">Фасад дома</a></li>
                        <li><a href="">Наличники, карнизы, декор</a></li>
                        <li><a href="">Окна, двери, ставни, подоконники </a></li>
                        <li><a href="">Заборы, ворота, изгороди</a></li>
                        <li><a href="">Фасад дома</a></li>
                        <li><a href="">Наличники, карнизы, декор</a></li>
                        <li><a href="">Окна, двери, ставни, подоконники</a></li>
                        <li><a href="">Заборы, ворота, изгороди</a></li>
                      </ul>
                    </div>
                    
                    <span class="filter-view">
                      <a href="" class="filter-view__show">Показать все</a>
                      <a href="" class="filter-view__hide">Свернуть</a>
                    </span>
                  </div>
              </div>
              <div class="filter-item">
                  <span class="filter-item__title">Цена, руб</span>
                  <div class="filter-item__group">
                  <div id='slider_container' class="range-slider">
                    <div class="range-slider__inputs">
                      <div id='l_label'>0.00</div>
                      <div id='r_label'>1000.00</div>
                    </div>
                   
                    <div id='slider'></div>
                    
                  </div>
                  </div>
              </div>
              <div class="filter-item">
                <span class="filter-item__title">Бренд</span>
                
          
                <div class="filter-item__group">
                  <div class="filter-item__group-content">
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-1">
                      <label for="filter-1">BIOFA</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-2">
                      <label for="filter-2">FAMA PAINT</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-3">
                      <label for="filter-3">FAMA</label>
                    </div>
                  </div>
                 
      
                  <span class="filter-view">
                    <a href="" class="filter-view__show">Показать все</a>
                    <a href="" class="filter-view__hide">Свернуть</a>
                  </span>
                </div>
                
              </div>
              <div class="filter-item">
                 <span class="filter-item__title">Тип объекта</span>
                 <div class="filter-item__group">
                  <div class="filter-item__group-content">
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-4">
                      <label for="filter-4">Потолок</label>
                    </div>
        
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-5">
                      <label for="filter-5">Предметы интерьера</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-6">
                      <label for="filter-6">Садовая мебель</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-7">
                      <label for="filter-7">Стены</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-8">
                      <label for="filter-8">Суда, причалы</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-9">
                      <label for="filter-9">Термодревесина</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-10">
                      <label for="filter-10">Террасы, настилы</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-11">
                      <label for="filter-11">Торцы</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-12">
                      <label for="filter-12">Фасад дома</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-12">
                      <label for="filter-12">Фасад дома</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-12">
                      <label for="filter-12">Фасад дома</label>
                    </div>
                    <div class="filter-checkbox">
                      <input type="checkbox" id="filter-12">
                      <label for="filter-12">Фасад дома</label>
                    </div>
        
                  </div>
                
                  <span class="filter-view">
                    <a href="" class="filter-view__show">Показать все</a>
                    <a href="" class="filter-view__hide">Свернуть</a>
                  </span>
                </div>
               
              </div>
              <div class="filter-item">
                  <span class="filter-item__title">Назначение</span>
                  <div class="filter-item__group">
                    <div class="filter-item__group-content">
                      <div class="filter-checkbox">
                        <input type="checkbox" id="filter-13">
                        <label for="filter-13">Герметизация швов</label>
                      </div>
                      <div class="filter-checkbox">
                        <input type="checkbox" id="filter-14">
                        <label for="filter-14">Для торцов</label>
                      </div>
                      <div class="filter-checkbox">
                        <input type="checkbox" id="filter-15">
                        <label for="filter-15">Матовая краска для фасада</label>
                      </div>
                      <div class="filter-checkbox">
                        <input type="checkbox" id="filter-16">
                        <label for="filter-16">Потолки</label>
                      </div>
                      <div class="filter-checkbox">
                        <input type="checkbox" id="filter-17">
                        <label for="filter-17">Стены</label>
                      </div>
                      <div class="filter-checkbox">
                        <input type="checkbox" id="filter-18">
                        <label for="filter-18">Фасады</label>
                      </div>
                      <div class="filter-checkbox">
                        <input type="checkbox" id="filter-19">
                        <label for="filter-19">Фасады</label>
                      </div>
                      <div class="filter-checkbox">
                        <input type="checkbox" id="filter-20">
                        <label for="filter-20">Фасады</label>
                      </div>
                      <div class="filter-checkbox">
                        <input type="checkbox" id="filter-21">
                        <label for="filter-21">Фасады</label>
                      </div>
                    </div>
                  
      
                    <span class="filter-view">
                      <a href="" class="filter-view__show">Показать все</a>
                      <a href="" class="filter-view__hide">Свернуть</a>
                    </span>
                  </div>
                
             </div>
             <a class="clear-filters-btn">
              Сбросить фильтры
              <svg class="icon">
                <use xlink:href="images/sprite.svg#trash-icon"></use>
              </svg>
             </a>
             &nbsp;
            </div>
      
            <div class="subscribe-form">
                <span class="subscribe-form__title">Узнавайте о скидках и акциях первыми!</span>
                <span class="subscribe-form__img"><img src="images/attention.svg" alt=""></span>
                <form action="">
                  <div class="subscribe-input">
                    <input type="text" placeholder="Email">
                    <button>
                      <svg class="icon">
                        <use xlink:href="images/sprite.svg#arrow-btn"></use>
                      </svg>
                    </button>
                  </div>
                </form>
                <p>Нажимая стрелку «Далее», я даю согласие на получение рекламной рассылки и обработку <a href="">персональных данных</a></p>
            </div>
          </div>
          
        </div>
        
          <div class="catalog__content">
              <div class="catalog__top-filters">
                  <div class="catalog__sort">
                    <span class="catalog__sort-title">Сортировать по: </span>
                    <div class="catalog__sort-content">
                      <a class="filter-sort-item active">
                        <svg class="icon">
                          <use xlink:href="images/sprite.svg#sort-icon"></use>
                        </svg>
                        Цене
                      </a>
                      <a class="filter-sort-item">
                        <svg class="icon">
                          <use xlink:href="images/sprite.svg#sort-icon"></use>
                        </svg>
                        Названию
                      </a>
                      <a class="filter-sort-item">
                        <svg class="icon">
                          <use xlink:href="images/sprite.svg#sort-icon"></use>
                        </svg>
                        Популярности
                      </a>
                    </div>
                    
                  </div>
    
                  <div class="catalog__view">
                      <span class="catalog__view-block active">
                        <svg class="icon">
                          <use xlink:href="images/sprite.svg#filter-block-icon"></use>
                        </svg>
                      </span>
                      <span class="catalog__view-line">
                        <svg class="icon">
                          <use xlink:href="images/sprite.svg#filter-line-icon"></use>
                        </svg>
                      </span>
                  </div>
              </div>
    
              <div class="filter-mobile">
                <a class="button button--fuild">
                  Фильтр
                  <svg class="icon">
                    <use xlink:href="images/sprite.svg#filter-solid"></use>
                  </svg>
                </a>
              </div>
              
              <div class="catalog__products">
                <div class="product-item">
                  <span class="product-item__image-block">
                    <span class="product-item__category product-item__category--recommendation">Рекомендуем</span>
                    <a href="#"><img src="images/product-example.png" alt=""></a>
                    <span class="product-item__favorites">
                      <svg class="icon">
                        <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                      </svg>
                    </span>
                  </span>
                  <span class="product-item__content">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <span class="product-item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut impedit voluptatum, quisquam facilis nulla repellendus doloribus. Maxime inventore iste ab dignissimos excepturi rem, voluptatum nulla quia nisi, laudantium doloremque nobis?</span>
    
                    <span class="product-item__numbers out-stock"><span></span>Нет в наличии</span>
                    <p>Покрытие для наружных работ с антисептическим эффектом, изготовленное из натурального сырья. Применяется для защиты и декоративной обработки деревянных фасадов и прочих поверхностей, выполненных из любых сортов древесины.</p>
                  </span>
                  <span class="product-item__btn">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <a href="#" class="button button--fuild button--border">Выбрать</a>
                  </span>
                </div>
                <div class="product-item">
                  <span class="product-item__image-block">
                    <span class="product-item__category product-item__category--action">Акция</span>
                    <a href="#"><img src="images/product-example.png" alt=""></a>
                    <span class="product-item__favorites">
                      <svg class="icon">
                        <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                      </svg>
                    </span>
                  </span>
                  <span class="product-item__content">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <span class="product-item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut impedit voluptatum, quisquam facilis nulla repellendus doloribus. Maxime inventore iste ab dignissimos excepturi rem, voluptatum nulla quia nisi, laudantium doloremque nobis?</span>
    
                    <span class="product-item__numbers"><span></span>Достаточно</span>
                    <p>Покрытие для наружных работ с антисептическим эффектом, изготовленное из натурального сырья. Применяется для защиты и декоративной обработки деревянных фасадов и прочих поверхностей, выполненных из любых сортов древесины.</p>
                  </span>
                  <span class="product-item__btn">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <a href="#" class="button button--fuild button--border">Выбрать</a>
                  </span>
                </div>
                <div class="product-item">
                  <span class="product-item__image-block">
                    <a href="#"><img src="images/product-example.png" alt=""></a>
                    <span class="product-item__favorites">
                      <svg class="icon">
                        <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                      </svg>
                    </span>
                  </span>
                  <span class="product-item__content">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <span class="product-item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut impedit voluptatum, quisquam facilis nulla repellendus doloribus. Maxime inventore iste ab dignissimos excepturi rem, voluptatum nulla quia nisi, laudantium doloremque nobis?</span>
    
                    <span class="product-item__numbers"><span></span>Достаточно</span>
                    <p>Покрытие для наружных работ с антисептическим эффектом, изготовленное из натурального сырья. Применяется для защиты и декоративной обработки деревянных фасадов и прочих поверхностей, выполненных из любых сортов древесины.</p>
                  </span>
                  <span class="product-item__btn">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <a href="#" class="button button--fuild button--border">Выбрать</a>
                  </span>
                </div>
                <div class="product-item">
                  <span class="product-item__image-block">
                    <span class="product-item__category product-item__category--recommendation">Рекомендуем</span>
                    <a href="#"><img src="images/product-example.png" alt=""></a>
                    <span class="product-item__favorites">
                      <svg class="icon">
                        <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                      </svg>
                    </span>
                  </span>
                  <span class="product-item__content">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <span class="product-item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut impedit voluptatum, quisquam facilis nulla repellendus doloribus. Maxime inventore iste ab dignissimos excepturi rem, voluptatum nulla quia nisi, laudantium doloremque nobis?</span>
    
                    <span class="product-item__numbers remains"><span></span>Заканчивается</span>
                    <p>Покрытие для наружных работ с антисептическим эффектом, изготовленное из натурального сырья. Применяется для защиты и декоративной обработки деревянных фасадов и прочих поверхностей, выполненных из любых сортов древесины.</p>
                  </span>
                  <span class="product-item__btn">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <a href="#" class="button button--fuild button--border">Выбрать</a>
                  </span>
                </div>
                <div class="product-item">
                  <span class="product-item__image-block">
                    <span class="product-item__category product-item__category--action">Акция</span>
                    <a href="#"><img src="images/product-example.png" alt=""></a>
                    <span class="product-item__favorites">
                      <svg class="icon">
                        <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                      </svg>
                    </span>
                  </span>
                  <span class="product-item__content">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <span class="product-item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut impedit voluptatum, quisquam facilis nulla repellendus doloribus. Maxime inventore iste ab dignissimos excepturi rem, voluptatum nulla quia nisi, laudantium doloremque nobis?</span>
    
                    <span class="product-item__numbers"><span></span>Достаточно</span>
                    <p>Покрытие для наружных работ с антисептическим эффектом, изготовленное из натурального сырья. Применяется для защиты и декоративной обработки деревянных фасадов и прочих поверхностей, выполненных из любых сортов древесины.</p>
                  </span>
                  <span class="product-item__btn">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <a href="#" class="button button--fuild button--border">Выбрать</a>
                  </span>
                </div>
                <div class="product-item">
                  <span class="product-item__image-block">
                    <a href="#"><img src="images/product-example.png" alt=""></a>
                    <span class="product-item__favorites">
                      <svg class="icon">
                        <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                      </svg>
                    </span>
                  </span>
                  <span class="product-item__content">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <span class="product-item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut impedit voluptatum, quisquam facilis nulla repellendus doloribus. Maxime inventore iste ab dignissimos excepturi rem, voluptatum nulla quia nisi, laudantium doloremque nobis?</span>
    
                    <span class="product-item__numbers"><span></span>Достаточно</span>
                    <p>Покрытие для наружных работ с антисептическим эффектом, изготовленное из натурального сырья. Применяется для защиты и декоративной обработки деревянных фасадов и прочих поверхностей, выполненных из любых сортов древесины.</p>
                  </span>
                  <span class="product-item__btn">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <a href="#" class="button button--fuild button--border">Выбрать</a>
                  </span>
                </div>
                <div class="product-item">
                  <span class="product-item__image-block">
                    <span class="product-item__category product-item__category--recommendation">Рекомендуем</span>
                    <a href="#"><img src="images/product-example.png" alt=""></a>
                    <span class="product-item__favorites">
                      <svg class="icon">
                        <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                      </svg>
                    </span>
                  </span>
                  <span class="product-item__content">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <span class="product-item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut impedit voluptatum, quisquam facilis nulla repellendus doloribus. Maxime inventore iste ab dignissimos excepturi rem, voluptatum nulla quia nisi, laudantium doloremque nobis?</span>
    
                    <span class="product-item__numbers"><span></span>Достаточно</span>
                    <p>Покрытие для наружных работ с антисептическим эффектом, изготовленное из натурального сырья. Применяется для защиты и декоративной обработки деревянных фасадов и прочих поверхностей, выполненных из любых сортов древесины.</p>
                  </span>
                  <span class="product-item__btn">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <a href="#" class="button button--fuild button--border">Выбрать</a>
                  </span>
                </div>
                <div class="product-item">
                  <span class="product-item__image-block">
                    <span class="product-item__category product-item__category--action">Акция</span>
                    <a href="#"><img src="images/product-example.png" alt=""></a>
                    <span class="product-item__favorites">
                      <svg class="icon">
                        <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                      </svg>
                    </span>
                  </span>
                  <span class="product-item__content">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <span class="product-item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut impedit voluptatum, quisquam facilis nulla repellendus doloribus. Maxime inventore iste ab dignissimos excepturi rem, voluptatum nulla quia nisi, laudantium doloremque nobis?</span>
    
                    <span class="product-item__numbers"><span></span>Достаточно</span>
                    <p>Покрытие для наружных работ с антисептическим эффектом, изготовленное из натурального сырья. Применяется для защиты и декоративной обработки деревянных фасадов и прочих поверхностей, выполненных из любых сортов древесины.</p>
                  </span>
                  <span class="product-item__btn">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <a href="#" class="button button--fuild button--border">Выбрать</a>
                  </span>
                </div>
                <div class="product-item">
                  <span class="product-item__image-block">
                    <a href="#"><img src="images/product-example.png" alt=""></a>
                    <span class="product-item__favorites">
                      <svg class="icon">
                        <use xlink:href="images/sprite-header.svg#favorites-icon"></use>
                      </svg>
                    </span>
                  </span>
                  <span class="product-item__content">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <span class="product-item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut impedit voluptatum, quisquam facilis nulla repellendus doloribus. Maxime inventore iste ab dignissimos excepturi rem, voluptatum nulla quia nisi, laudantium doloremque nobis?</span>
    
                    <span class="product-item__numbers"><span></span>Достаточно</span>
                    <p>Покрытие для наружных работ с антисептическим эффектом, изготовленное из натурального сырья. Применяется для защиты и декоративной обработки деревянных фасадов и прочих поверхностей, выполненных из любых сортов древесины.</p>
                  </span>
                  <span class="product-item__btn">
                    <span class="product-item__cost">от 1 624 ₽</span>
                    <a href="#" class="button button--fuild button--border">Выбрать</a>
                  </span>
                </div>
    
                <div class="catalog__pages">
                  <a href="" class="active">1</a>
                  <a href="">2</a>
                  <a href="">3</a>
                  <span>...</span>
                  <a href="">26</a>
                  <a href="">
                    <svg class="icon">
                      <use xlink:href="images/sprite.svg#arrow-btn"></use>
                    </svg>
                  </a>
                </div>
    
                <div class="main-tags main-tags--light-color main-tags--last">
                  <a href="#">Терассы, настилы</a>
                  <a href="#">Окраска термодоски</a>
                  <a href="#">Уход за терассой</a>
                  <a href="#">Наличники карнизы, декор</a>
                  <a href="#">Терассы, настилы</a>
                  <a href="#">Окраска термодоски</a>
                  <a href="#">Уход за терассой</a>
                  <a href="#">Наличники карнизы, декор</a>
                  <a href="#">Терассы, настилы</a>
                  <a href="#">Окраска термодоски</a>
                  <a href="#">Уход за терассой</a>
                  <a href="#">Наличники карнизы, декор</a>
                </div>
              </div>
    
    
          </div>
      </div>
    
    
      <div class="content-without-side">
    
          <div class="text-block">
            <h2 class="h2-title">Фасадные краски, масла, пропитки и лазури для наружных работ</h2>
            <p>Материалы для фасада дома BIOFA надежно защитят его от агрессивной внешней среды. Масла бережно помогут не только подготовить фасады, выполненные из бревна, лафета, бруса к покраске, но и обеспечат защиту от синевы, грибка, микробиологических заболеваний, восстановят естественный цвет древесины спустя годы.</p>
            <p> Материалы для фасада дома BIOFA предназначены также для обработки и окраске торцов бревен и беседок. Они быстро сохнут, экономны в использовании. Материалы для фасада дома BIOFA защитят дерево от растрескивания, потемнения  и шелушения. В палитре BIOFA представлены бесцветные и цветные масла. Для дополнительной защиты рекомендуем применять грунт - антисептик и УФ защитное средство.</p>
            <h3 class="h3-title">Перед выбором продукта BIOFA ознакомьтесь, пожалуйста, с видеоуроком по нанесению:</h3>
            <ul>
              <li>12 Правил работы с маслами BIOFA</li>
              <li>20 возможных ошибок при работе с маслами</li>
            </ul>
          </div>
    
          <div class="content-block">
              <div class="content-block__top">
                <h2 class="h2-title">Полезные видео</h2>
              </div>
              <div class="video-slider">

       
                <div class="slide">
                 <div class="video-responsive">
                  <video src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4" loop></video> </div>
                </div>
                <div class="slide">
                  <div class="video-responsive">
                    <video src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4" loop></video>  </div>
                 </div>
                 <div class="slide">
                  <div class="video-responsive">
                    <video src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4" loop></video>  </div>
                 </div>
                 <div class="slide">
                  <div class="video-responsive">
                    <video src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4" loop></video> </div>
                 </div>  
                 </div>
          </div>
        
    
             <div class="consultation">
                  <div class="consultation__image"><img src="images/consultation-form-img.jpeg" alt=""></div>
                  <div class="consultation__content">
                      <span class="consultation__title">Нужна консультация?</span>
                      <p>Оставьте свои контактные данные и наши специалисты свяжутся с вами, для консультации или оформления заказа.</p>
                      <div class="consultation__main">
                        <div class="consultation__contacts">
                            <span class="consultation__name">Ролло Томасси</span>
                            <span class="consultation__positon">менеджер отдела продаж</span>
                            <span class="consultation__tel"><a href="tel:">тел.: +7 (911) 123-12-12</a></span>
                            <span class="consultation__email"><a href="mailto:sales1@famaprofi.ru">sales1@famaprofi.ru</a></span>
                        </div>
                        <div class="consultation-form">
                            <form action="">
                                <div class="consultation-form__input">
                                  <span class="consultation-form__icon"><img src="images/tel-icon.svg" alt=""></span>
                                  <input type="text" class="consultation-input" placeholder="+7 (___) ___-__-__">
                                </div>
                                <div class="form-checkbox">
                                  <input type="checkbox" id="consultation-checkbox">
                                  <label for="consultation-checkbox">Нажимая кнопку «отправить» вы даете согласие на обработку персональных данных</label>
                                </div>
                                <button class="button button--fuild button--border">Отправить</button>
                            </form>
                        </div>
                      </div>
                  </div>
             </div>
          </div>
      </div>
    
     </div>
    </main>
    
</div>

