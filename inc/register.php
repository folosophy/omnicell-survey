<?php

add_action('wp_enqueue_scripts','fly_register_user_script');

function fly_register_user_script() {

  wp_enqueue_script('register', get_template_directory_uri() . '/js/register.js');

}

add_action('wp_ajax_nopriv_fly_create_user','fly_create_user');
add_action('wp_ajax_fly_create_user','fly_create_user');

function fly_create_user() {

  // echo var_dump($_POST);

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $facility = $_POST['facility'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];

  if (username_exists($username)) {

    echo 'Username already exists. Please choose another.';

    wp_die();

  } else if (email_exists($email) == true) {

    echo 'Email address is already registered. Please use another.';

    wp_die();

  } else {

    $new_user = wp_create_user($username,$password,$email);
    $new_user_id = 'user_' . $new_user;

    wp_update_user(array(
      'ID' => $new_user,
      'first_name' => $fname,
      'last_name' => $lname
    ));

    update_field('facility_name',$facility,$new_user_id);

    $creds = array();
    $creds['user_login'] = $username;
    $creds['user_password'] = $password;
    $login = wp_signon($creds,false);

    $url = get_bloginfo('url');

    echo "<a class='button start' href='$url'>Start Survey</a>";

    wp_die();

  }

}
