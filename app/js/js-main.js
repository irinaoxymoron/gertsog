$(document).ready(function(){

  $(".menu-trigger").click(function () {
    $(".ul-trigger").slideToggle();
    $(".menu-trigger").toggleClass('menu_state_open');
  });
  
  $('.menu-trigger').click(function(){
    if($(this).hasClass('menu_state_open')){
      $('body').css('overflow', 'hidden');
    }else{
      $('body').css('overflow', 'auto');
    }
  });

  $(window).resize(function(){
    if ($(window).width() > 1024) {
      $('.ul-trigger').removeAttr('style');
    };
  });

  $('body').scroll(function() {
    if($('body').scrollTop() > 400){
      $('.tags').addClass('fixed');
    }else{
      $('.tags').removeClass('fixed');
    }
  });
});

$('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 1,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
  {
    breakpoint: 1024,
    settings: "unslick"
  }
  ]
});

$('.multiple-items').slick({
  infinite: true,
  dots: false,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 1000,
  fade: true,
  cssEase: 'linear'
});

$(function(){
  jQuery("a.review__link").YouTubePopUp();
});

$(function () { 
  $('.menu a').each(function () {
    var location = window.location.href;
    var link = this.href;
    if(location == link) {
      $(this).addClass('active');
    }
  });
});