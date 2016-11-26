jQuery(document).ready(function($) {

function flyNav() {

  var $ham = $('#ham');
  var $body = $('body');
  var $navItem = $('.nav-item');
  var $nav = $('nav');

  $ham.click(function() {

    $body.toggleClass('menu-open');

  });

  $navItem.click(function() {

    $body.removeClass('menu-open');
    setTimeout(function() {$nav.addClass('up');},15);

  });

  var lastScroll = 0;

  $(document).scroll(function() {

    var scroll = $body.scrollTop();
    var heroHeight = $('#hero').height();

    if (scroll > lastScroll) {

      if (scroll > 300 && !$('body').hasClass('menu-open')) {$nav.addClass('up');}

      if (scroll > heroHeight) {$nav.addClass('scrolling');}

    } else {

      $nav.removeClass('up');
      if (scroll < heroHeight) {$nav.removeClass('scrolling');}
      
    }

    lastScroll = scroll;

  });

}

flyNav();

}); // End jQuery
