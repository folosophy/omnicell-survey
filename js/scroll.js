jQuery(document).ready(function($){

function scrollReveal() {

  revealEls();

  $(document).on('scroll',function() {

    revealEls();

  });

}

function revealEls() {

  var winHeight = $(window).height();
  var pos = $('body').scrollTop() + (winHeight / 2);
  var modules = $('.mod');

  modules.each(function() {

    var elPos = $(this).offset().top;
    var diff = Math.abs(elPos - pos);
    var $mod = $(this);

    if (diff < (winHeight / 2.5)) {

      $mod.removeClass('inactive');

    }

  });

}

scrollReveal();

}); //  End jQuery
