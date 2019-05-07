<?php


// This is a sample block, not intended to be used
// Replace all versions of `Sample Block` with the new block name


// Declare a block
add_action('acf/init', 'my_acf_init_sample_block');
function my_acf_init_sample_block() {
	// check function exists
	if( function_exists('acf_register_block') ) {
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'sample-block',	// The ID of the block
			'title'				=> __('A sample block'),	// The name of the block as it will be displayed in the Gutenberg block list
			'description'		=> __('This is a sample block. It should not be declared.'),	// The description to provide context to the block
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',	// Where the block will be put in the block categories for easy browsing
			'icon'				=> 'marker', // The block icon, get full list of icons here: https://developer.wordpress.org/resource/dashicons/  (just be sure to not include the `dashicons` part of the icon ID)
			'keywords'			=> array( 'link', 'promote', 'cta' ),	// A list of keywords to aid in block search - maximum of 3
		));
	}
}
