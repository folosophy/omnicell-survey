<?php

function af_theme_scripts() {

  wp_enqueue_script('jquery');
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');

  if (is_front_page()) {

    wp_enqueue_script('hero_script', get_template_directory_uri() . '/js/hero.js');

  }

}

add_action('wp_enqueue_scripts','af_theme_scripts');
