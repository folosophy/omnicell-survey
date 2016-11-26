<?php

// MENU

add_theme_support('menus');

function register_theme_menus() {
 register_nav_menus(
   array(
     'main' => 'Main',

   )
 );
}

add_action('init','register_theme_menus');
