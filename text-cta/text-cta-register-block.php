<?php

// Declare a block
add_action('acf/init', 'my_acf_init_cta');
function my_acf_init_cta() {
	// check function exists
	if( function_exists('acf_register_block') ) {
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'text-cta',
			'title'				=> __('Text CTA'),
			'description'		=> __('A simple text based CTA Block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'admin-links', // https://developer.wordpress.org/resource/dashicons/
			'keywords'			=> array( 'link', 'cta' ),
		));
	}
}
