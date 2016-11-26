jQuery(document).ready(function($){

function flyRegister () {

  var $form = $('form');
  var $fields = $form.find('.field :input');
  var $next = $('.button.next');
  var $info = $('#user-info');
  var $creds = $('#user-credentials');
  var $infoReq = $info.find('input[required]');
  var $submit = $('button[type="submit"]');

  $('input').on('keyup', function() {

    var $group = $(this).closest('.field-group');
    var $req = $group.find('input[required]');
    var $button = $group.find('.button:not(.back), button');

    $req.each(function(i) {

      $el = $(this);

      if ($el.val() == '' || $el.val() == null) {

        $button.addClass('disabled').removeClass('enabled');

      } else if ((i + 1) == $req.length) {

        $button.removeClass('disabled').addClass('enabled');

      }

    });

  });

  $info.on('click','.button.enabled',function() {

    $info.hide();
    $creds.show();

  });

  $form.submit(function(e) {

    e.preventDefault();

    $submit = $(this).find('button[type="submit"]');

    if ($submit.hasClass('enabled')) {

      var userInfo = $form.find('input:not([type="checkbox"])').serialize();

      $.post({
        url:my_ajax_object.ajax_url,
        data: {
          action:'fly_create_user',
          username:$form.find('[name="username"]').val(),
          email:$form.find('[name="email"]').val(),
          password:$form.find('[name="password"]').val(),
          fname:$form.find('[name="fname"]').val(),
          lname:$form.find('[name="lname"]').val(),
          facility:$form.find('[name="facility-name"]').val(),
        },
        success:function(r) {

          $submit.replaceWith(r);

        }

      });

    }

  });

}

flyRegister();

}); // End JQuery
