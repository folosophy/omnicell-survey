<?php

function fly_create_post_types() {

  register_post_type( 'capabilities',
		array(
			'labels' => array(
				'name' => __( 'Capabilities' ),
				'singular_name' => __( 'Capability' )
			),
			'public' => true,
			'has_archive' => false,
			'supports' => array('title'),
		)
	);

}

add_action('init','fly_create_post_types');
