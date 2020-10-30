function mainslider() {
  $('.single-slider').slick({
    arrows: true,
    dots:true,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000,
  });
};

function mouseenterrr() {
  $(".navbar__items a").hover(function(){
    $(this).css({"color":"#FB4B54","text-decoration":"none"});
  },
  function(){
    $(this).css("color", "#000000");
  });
};
function svghover() {
  $(".menu-controls__login").hover(function(){
    $(".menu-controls__login svg path").css("fill", "#0A2463");
  },
  function(){
    $(".menu-controls__login svg path").css("fill", "#FB4B54");
  });
  // Лупа меняет цвет
  $(".menu-search__button").hover(function(){
    $(".menu-search__button svg path").css("fill", "#0A2463");
  },
  function(){
    $(".menu-search__button svg path").css("fill", "#FB4B54");
  });

  $(".menu-controls__izbr").hover(function(){
    $(".menu-controls__izbr svg path").css("fill", "#0A2463");
  },
  function(){
    $(".menu-controls__izbr svg path").css("fill", "#FB4B54");
  });
  $(".menu-controls__cart").hover(function(){
    $(".menu-controls__cart svg path").css("fill", "#0A2463");
  },
  function(){
    $(".menu-controls__cart svg path").css("fill", "#FB4B54");
  });
};

function tovarislider() {
  $('.multiple-slider').slick({
    arrows: true,
    dots: false,
    slidesToShow: 5,
    centerMode: false,
    autoplay: false,
    autoplaySpeed: 4000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 605,
        settings: {
          arrows: false,
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
    ]
  });

  $('.slider-controls .slider-controls__prev').click(function() {
    $('.multiple-slider').slick('slickPrev');
  });
  $('.slider-controls .slider-controls__next').click(function() {
    $('.multiple-slider').slick('slickNext');
  });

};

function tovarinamesmvse() {
  $('.see-all__content').hover(function(){
    $(this).css({"background-color":"#EBEBEB","border-radius":"50px","color":"black"});
  },
  function(){
    $(this).css("background-color", "white");
  });
  $('.see-all__content a').hover(function(){
    $(this).css({"color":"black"});
  },
  function(){
    $(this).css();
  });
};

function sidebaroverlay() {
  $('.menu-header__catalog').on('click', function () {
    $('.sidebar-overlay').addClass('active');
    $('html').css('overflow', 'hidden');
    $('body').css('overflow', 'hidden');
  });
};

function sidebaroverlayoff() {
  $('.sidebar__close').on('click', function () {
    $('.sidebar').removeClass('show');
    $('.sidebar-overlay').removeClass('active');
    $('html').css('overflow', 'visible');
    $('body').css('overflow', 'visible');
  });
  $('.sidebar__back').on('click', function () {
    $('.sidebar__right').removeClass('active');
  });
};

function secondsidebar() {
  if ($(window).width() > 1199) {
    $('.sidebar__left .sidebar__item a').on('mouseenter', function () {
      $('.sidebar__right').addClass('active');
      $('.sidebar__list_right').hide();
      $($(this).data('sub')).show();
    })
    $('.sidebar__right').on('mouseleave', function () {
      $('.sidebar__right').removeClass('active');
    })
  } else if ($(window).width() > 575 && $(window).width() < 1200) {
    $('.sidebar__left .sidebar__item a').on('click', function () {
      $('.sidebar__right').addClass('active');
      $('.sidebar__list_right').hide();
      $($(this).data('sub')).show();
      return false;
    })
    $('.sidebar__right').on('mouseleave', function () {
      $('.sidebar__right').removeClass('active');
    })
  } else if ($(window).width() < 576) {
    $('.sidebar__left .sidebar__item a').on('click', function () {
      $('.sidebar__right').addClass('active');
      $('.sidebar__list_right').hide();
      $($(this).data('sub')).show();
      return false;
    })
    $('.sidebar__right').on('mouseleave', function () {
      $('.sidebar__right').removeClass('active');
    })
  }
}

function tovarslider() {
  $('.product-slider-big').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
});
$('.product-slider-small').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.product-slider-big',
  arrows: true,
  dots: false,
  centerMode: true,
  focusOnSelect: true,
  autoplay: true,
  autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
      }
    },
  ]
});
}

function modalslider() {
  function initmodalslider() {
    $('.modal-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
  });
  }
    $('.prod-preview').on('shown.bs.modal', initmodalslider);
}


$(document).ready(function() {
  mainslider();
  mouseenterrr();
  svghover();
  tovarislider();
  tovarinamesmvse();
  sidebaroverlay();
  sidebaroverlayoff();
  secondsidebar();
  tovarslider();
  modalslider();
});
