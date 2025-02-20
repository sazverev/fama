

$(document).ready(function () {
  
  $('.burger').click(function () {
    if ($('.burger,.header-menu,body').hasClass('open')) {
      $('.burger,.header-menu,body').removeClass('open');
    } else {
      $('.burger,.header-menu,body').addClass('open');
    }
  });

 
});




$(document).ready(function () {
  const filterGroups = document.querySelectorAll('.filter-item__group');

  filterGroups.forEach(group => {
      const checkboxes = group.querySelectorAll('.filter-item__group ul li');
      const viewBlock = group.querySelector('.filter-view');

      // Проверяем количество чекбоксов
      if (checkboxes.length > 5) {
          viewBlock.style.display = 'block';  // Показываем блок фильтра
      }

      // Обработчик клика на "Показать все"
      viewBlock.querySelector('.filter-view__show').addEventListener('click', function (e) {
          e.preventDefault();
          group.classList.add('open');
      });

      // Обработчик клика на "Свернуть"
      viewBlock.querySelector('.filter-view__hide').addEventListener('click', function (e) {
          e.preventDefault();
          group.classList.remove('open');
      });
  });
});

$(document).ready(function () {
  const filterGroups = document.querySelectorAll('.filter-item__group');

  filterGroups.forEach(group => {
      const checkboxes = group.querySelectorAll('.filter-checkbox');
      const viewBlock = group.querySelector('.filter-view');

      // Проверяем количество чекбоксов
      if (checkboxes.length > 5 && viewBlock) {
          viewBlock.style.display = 'block';  // Показываем блок фильтра
          
          // Проверка на наличие кнопок перед их добавлением обработчиков событий
          const showButton = viewBlock.querySelector('.filter-view__show');
          const hideButton = viewBlock.querySelector('.filter-view__hide');

          if (showButton) {
              showButton.addEventListener('click', function (e) {
                  e.preventDefault();
                  group.classList.add('open');
              });
          }

          if (hideButton) {
              hideButton.addEventListener('click', function (e) {
                  e.preventDefault();
                  group.classList.remove('open');
              });
          }
      }
  });
});
 


$(document).ready(function () {
  

  var slider = document.getElementById('slider');

  noUiSlider.create(slider, {
    start: [0,3000],
    connect: true,
    range: {
      'min': 0,
      'max': 3000
    },
    margin:10
  });
  
  slider.noUiSlider.on('update',function(e){
    $('#l_label').html(e[0]);
    $('#r_label').html(e[1]);
  });

});
$(document).ready(function () {
  $('.video-slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    variableWidth: true,
    arrows: true,
    focusOnSelect: true,      
  });

  var video = $('.video-responsive').hover(hoverVideo, hideVideo);

  function hoverVideo(e) {
      $('video', this).get(0).play(); 
  }
  
  function hideVideo(e) {
      $('video', this).get(0).pause(); 
  }
});

$(document).ready(function () {
  // Устанавливаем ведение видимости для элементов палитры в зависимости от ширины экрана
  function updatePaletteVisibility() {
      const items = $('.palette-item');
      const screenWidth = $(window).width();

      items.removeClass('visible'); // Сначала скрываем все элементы

      if (screenWidth < 768) {
          // Показываем только первые 4 элемента, если ширина экрана меньше 768
          items.slice(0, 4).addClass('visible');
      } else {
          // Показываем первые 8 элементов для ширины больше или равной 768
          items.slice(0, 8).addClass('visible');
      }
  }

  // Инициализация видимости при загрузке страницы
  updatePaletteVisibility();

  // Обработчик события для кнопки
  $('.palette-btn').on('click', function () {
      const items = $('.palette-item');

      if ($(this).hasClass('open')) {
          // Если кнопка уже открыта, скрываем все элементы и убираем класс
          items.removeClass('visible');
          $(this).removeClass('open');
          updatePaletteVisibility(); // Обновляем видимость для соответствия размерам экрана
      } else {
          // Если кнопка закрыта, показываем все элементы и добавляем класс
          items.addClass('visible');
          $(this).addClass('open');

          // Прокручиваем на 200px вниз от последнего элемента, если ширина экрана больше или равна 768px
          if ($(window).width() >= 768) {
              $('html, body').animate({
                  scrollTop: items.last().offset().top - 200 // Прокрутка на 200px вниз
              }, 600); // скорость прокрутки в миллисекундах
          }
      }
  });

  // Обновляем видимость при изменении размеров окна
  $(window).on('resize', updatePaletteVisibility);
});


$(document).ready(function () {
  

 // Инициализация слайдера для проектов
 var $projectsSlider = $('.projects-slider').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  variableWidth: true,
  centerMode: true,
  arrows: false, // Отключаем встроенные стрелки
});

// Привязка кнопок "Previous" и "Next" для проектов
$('.slick-prev-project').on('click', function() {
  $projectsSlider.slick('slickPrev');
});

$('.slick-next-project').on('click', function() {
  $projectsSlider.slick('slickNext');
});
});



$(document).ready(function () {
  var $slider = $('.video-slider2').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 1,
      swipe: true,
      draggable: true,
      touchMove: true,
      touchThreshold: 10,  
      arrows: false,  // Отключаем встроенные стрелки
      responsive: [{
          breakpoint: 768,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      }]
  });

  // Привязка кнопок "Previous" и "Next"
  $('.slick-prev').on('click', function() {
      $slider.slick('slickPrev');
  });

  $('.slick-next').on('click', function() {
      $slider.slick('slickNext');
  });
});



$(document).ready(function () {
 

  // Инициализация слайдера для продуктов
  var $productsSlider = $('.products-slider').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false, // Отключаем встроенные стрелки
      responsive: [{
          breakpoint: 1280,
          settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 992,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 680,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      }]
  });

  // Привязка кнопок "Previous" и "Next" для продуктов
  $('.slick-prev-product').on('click', function() {
      $productsSlider.slick('slickPrev');
  });

  $('.slick-next-product').on('click', function() {
    $productsSlider.slick('slickNext');
});

// Инициализация слайдера для проектов
var $projectsSlider = $('.projects-slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    variableWidth: true,
    centerMode: true,
    arrows: false, // Отключаем встроенные стрелки
});

// Привязка кнопок "Previous" и "Next" для проектов
$('.slick-prev-project').on('click', function() {
    $projectsSlider.slick('slickPrev');
});

$('.slick-next-project').on('click', function() {
    $projectsSlider.slick('slickNext');
});
});
$(document).ready(function() {
  // Функция для остановки видео
  function stopVideo(iframe) {
      var src = iframe.attr('src');
      iframe.attr('src', src); // Перезагружаем src, чтобы остановить видео
  }

  // Слушаем событие изменения слайдов
  $('.video-slider2,.video-slider').on('afterChange', function(event, slick, currentSlide) {
      $('.video-responsive').each(function() {
          // Селектор для iframe в текущем элементе
          var iframe = $(this).find('iframe');
          if (!$(this).parent().hasClass('slick-active')) {
              stopVideo(iframe); // Останавливаем только текущее видео, если родитель не активен
          }
      });
  });
});


$(document).ready(function () {
    // Инициализация слайдера для продуктов
    var $productsSlider = $('.products-slider').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false, // Отключаем встроенные стрелки
      responsive: [{
          breakpoint: 1280,
          settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 992,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
          }
      },
      {
          breakpoint: 680,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
      }]
  });

  // Привязка кнопок "Previous" и "Next" для продуктов
  $('.slick-prev-product').on('click', function() {
      $productsSlider.slick('slickPrev');
  });

  $('.slick-next-product').on('click', function() {
      $productsSlider.slick('slickNext');
  });
 
});


$(document).ready(function () {
  


  [].forEach.call(document.querySelectorAll('.consultation-input'), function (input) {
    let keyCode;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        let pos = this.selectionStart;
        if (pos < 3) event.preventDefault()
        let matrix = "+7 (___) ___-__-__",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            newValue = matrix.replace(/[_\d]/g, function (a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
            });
        i = newValue.indexOf("_");
        if (i != -1) {
            i < 5 && (i = 3);
            newValue = newValue.slice(0, i);
        }
        let reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function (a) {
                return "\\d{1," + a.length + "}";
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = newValue;
        if (event.type == "blur" && this.value.length < 5) this.value = "";
    }
  
    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false);
    input.addEventListener('mouseup', event => {
      event.preventDefault()
      if (input.value.length < 4) {
        input.setSelectionRange(4, 4)
      } else {
        input.setSelectionRange(input.value.length, input.value.length)
      }
    })
  });
  
  
});






$(document).ready(function () {
  
  $('.product-item__favorites').on('click', function (event) {
    event.preventDefault();
    $(this).toggleClass('active');
  });
 
});
$(document).ready(function() {
  function toggleDropdown() {
    if ($(window).width() > 992) {
      $('.main-menu > ul > li').hover(function() {
        $(this).find('.main-menu__dropdown').stop(true, true).slideDown(200);
      }, function() {
        $(this).find('.main-menu__dropdown').stop(true, true).slideUp(200);
      });
    } else {
      // Удаляем обработчики события hover на маленьких экранах
      $('.main-menu > ul > li').off('mouseenter mouseleave');
      // Скрываем выпадающие меню, если они открыты
      $('.main-menu__dropdown').stop(true, true).slideUp(200);
    }
  }

  // Первичное выполнение функции
  toggleDropdown();

  // Обработчик события изменения размера окна
  $(window).resize(function() {
    toggleDropdown();
  });
});
$(document).ready(function () {
  function toggleAccordion() {
    $('ul.accordion a.opener').off('click'); // Удаляем предыдущие обработчики событий

    if ($(window).width() <= 992) {
      $('ul.accordion a.opener').on('click', function () {
        var submenu = $(this).parent().find("ul:first");

        // Проверяем, открыто ли подменю
        if (submenu.is(':visible')) {
          submenu.hide(); // Если открыто, скрываем его
        } else {
          submenu.show(); // Если закрыто, показываем
        }

        $(this).parent().toggleClass('active'); // Меняем класс активного элемента
        return false;
      });
    }
  }

  toggleAccordion(); // Инициализация

  $(window).resize(function () {
    toggleAccordion(); // Переинициализация при изменении размера окна
  });
});

$(document).ready(function () {
  
  const header = document.getElementsByClassName('header')[0]; 

  function handleScroll() {
      const scrollPosition = window.scrollY; 
      if (scrollPosition > 312) {
          header.classList.add('sticky'); 
      } else {
          header.classList.remove('sticky'); 
      }
  }

  window.addEventListener('scroll', handleScroll);
});



$(document).ready(function () {
  const viewBlock = document.querySelector('.catalog__view-block');
  const viewLine = document.querySelector('.catalog__view-line');
  const productItems = document.querySelectorAll('.product-item');

  viewLine.addEventListener('click', function () {
      // Добавляем класс active к viewLine и удаляем его у viewBlock
      viewLine.classList.add('active');
      viewBlock.classList.remove('active');

      // Добавляем класс .product-item—fuild ко всем product-item
      productItems.forEach(item => {
          item.classList.add('product-item--fuild');
      });
  });

  viewBlock.addEventListener('click', function () {
      // Удаляем класс active у viewLine и добавляем его к viewBlock
      viewLine.classList.remove('active');
      viewBlock.classList.add('active');

      // Удаляем класс .product-item—fuild у всех product-item
      productItems.forEach(item => {
          item.classList.remove('product-item--fuild');
      });
  });
});







$(document).ready(function () {
  const filterMobile = document.querySelector('.filter-mobile');
  const catalogSide = document.querySelector('.catalog__side');
  const catalogClose = document.querySelector('.catalog-mobile-close');

  // Добавляем обработчик клика на filter-mobile
  filterMobile.addEventListener('click', function (e) {
      e.preventDefault();
      catalogSide.classList.add('open');
      catalogSide.style.display = 'block'; // Убедитесь, что элемент видим
  });

  // Добавляем обработчик клика на catalog-mobile-close
  catalogClose.addEventListener('click', function (e) {
      e.preventDefault();
      catalogSide.classList.remove('open');
  });
});


