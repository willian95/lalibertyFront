// Menú responsive
$(function () {
  $('[data-toggle="offcanvas"]').on("click", function () {
    $(".offcanvas-collapse").toggleClass("open");
    $("body").toggleClasss("offcanvas-expanded");
  });
});

$(".hamburger").on("click", function () {
  $(this).toggleClass("is-active");
});

$(".nav-link").click(function () {
  $(".offcanvas-collapse").removeClass("open");
  $(".hamburger").toggleClass("is-active");
  $("body").removeClass("offcanvas-expanded");
});


/*

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  focusOnSelect: true
});
*/




/***************card product************ */
let title = $('#effect-title').offset();
let imgfix = $('.img-fix').offset();
let efecto = $('.card-transition').offset();

$(window).scroll(function () {
  if ($(window).scrollTop() >= title.top) {
    $('.title_custom').addClass("efect-title");
  } else {
    $(".title_custom").removeClass("efect-title");
  }

  if ($(window).scrollTop() >= imgfix.top) {
    $('.img-fix').addClass("efect-title");
    $('.card-transition').addClass("efect-none");
  } else {
    $(".img-fix").removeClass("efect-title");
    $(".card-transition").removeClass("efect-none");
  }


});
