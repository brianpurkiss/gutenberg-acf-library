<?php

// Declare a block
add_action('acf/init', 'my_acf_init_bootstrap_button');
function my_acf_init_bootstrap_button() {
	// check function exists
	if( function_exists('acf_register_block') ) {
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'bs-button',
			'title'				=> __('Button'),
			'description'		=> __('A generic button using Bootstrap styles.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'admin-links', // https://developer.wordpress.org/resource/dashicons/
			'keywords'			=> array( 'button', 'link' ),
		));
	}
}
