<?php

add_action('wp_head','fly_head');

function fly_head() {

  echo "
    <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'>
    <link rel='icon' href='/favicon.ico' type='image/x-icon'>
  ";

}
