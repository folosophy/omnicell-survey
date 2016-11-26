jQuery(document).ready(function($) {

function capMenu() {

  var $menuItem = $('.menu-item');
  var $menuItems = $('#menu-items');
  var $facilities = $('.facility-chart');

  $menuItem.click(function() {

    var $that = $(this);

    if (!$(this).hasClass('selected')) {

      var $selected = $('.selected');
      $selected.removeClass('selected');

      var id = '[post-id="' + $that.attr('post-id') + '"]';
      $(id).addClass('selected');

    }

  }).children('.menu-item-save').click(function(e){

    return false;

  });

}

capMenu();

function capCount() {

  var $update = $('.save-cap, .remove-cap');
  var $view = $('#view-saved');

  $update.click(function() {

    var $that = $(this);
    var id = $that.attr('post-id');
    var $cap = $('[post-id="' + id + '"]');
    var $count = $('#saved-count');

    if ($that.hasClass('save-cap')) {

      $cap.toggleClass('saved');

    } else if ($that.hasClass('remove-cap')) {

      $cap.removeClass('saved');

    }

    var saved = $('.data-row.saved').length;

    if (saved > 0) {

      $count.text(saved);
      $view.addClass('counting');

    } else {

      $view.removeClass('counting');
      $('#page').removeClass('medication');

    }

  });

}

capCount();

function serviceInfo() {

  var $service = $('.service');
  var $info = $('#service-info');
  var $text = $('#service-info-text');

  $service.hover(function() {

    $text.text('Pellentesque dapibus hendrerit tortor. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Etiam imperdiet imperdiet orci. Nullam vel sem.');
    $info.css('display','block');

    var elH = $(this).height();
    var elW = $(this).width();
    var elX = $(this).offset().left + (elW / 2) - $text.width();
    var elY = $(this).offset().top - $text.height();

    $info.css({
      left:elX,
      top:elY
    });

  },function() {

    $info.css('display','none');

  });

}

serviceInfo();

function viewSaved() {

  var $view = $('#view-saved');
  var $chartBack = $('#chart-back');
  var $page = $('#page');

  $view.click(function() {

    $page.addClass('medication');

  });

  $chartBack.click(function() {

    $page.removeClass('medication');

  });

}

viewSaved();

}); // End jQuery
