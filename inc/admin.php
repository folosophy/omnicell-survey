<?php

// Remove Posts from Admin

function remove_menu () {
   remove_menu_page('edit.php');
}

add_action('admin_menu', 'remove_menu');

// Options Pages

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'App Options',
		'menu_title'	=> 'App Options',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Medication',
		'menu_title' 	=> 'Medication',
		'parent_slug' 	=> 'options',
	));

}

// Admin CSS

function adminCSS() {
	echo

	'<style>
		.acf-fields.inside > .acf-field > .acf-label {
			display: none;
		}
		.acf-field-checkbox .acf-label {
			display:none;
		}
  </style>';
}

// add_action('admin_head', 'adminCSS');

// Logout URL
add_action('wp_logout',create_function('','wp_redirect(home_url());exit();'));
