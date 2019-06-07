<?php

// ACF Gutenberg Blocks


// Dynamically call ALL block templates
// No need to call each one individually other than the initial declaration
function my_acf_block_render_callback( $block ) {
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/content-blocks/{$slug}/block-{$slug}.php") ) ) {
		include( get_theme_file_path("/content-blocks/{$slug}/block-{$slug}.php") );
	}
}



//
// List of all declared blocks
//


		// View the readme in this directory for more information how to create and manage blocks
		// require get_template_directory() . '/content-blocks/sample-block/sample-block-register-block.php';



// Create the content promo ACF Block in PHP
require get_template_directory() . '/content-blocks/text-cta/acf-declaration.php';
// Declare the content promo block
require get_template_directory() . '/content-blocks/text-cta/text-cta-register-block.php';



// Create ACF fields and block layout
// Boostrap button with different options
require get_template_directory() . '/content-blocks/bs-button/acf-declaration.php';
require get_template_directory() . '/content-blocks/bs-button/bs-button-register-block.php';
