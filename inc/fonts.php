<?php

// Google Fonts
/*
function af_google_fonts() {
	wp_enqueue_style( 'font_primary', 'https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Source+Sans+Pro:300,300i', false );
}
add_action( 'wp_enqueue_scripts', 'af_google_fonts' );
*/

// Typekit

add_action('wp_head','typekit');

function typekit() {

  echo '<script src="https://use.typekit.net/ssp2ggd.js"></script>';
  echo '<script>try{Typekit.load({ async: true });}catch(e){}</script>';

}
