<?php


// Copy / paste the ACF PHP into this file.

// This is very optional.
// The block data fields do not need to be called via PHP.
// Calling them via PHP allows them to be committed into Git,
// but it also means they can't be as readily edited.
// It is always a good idea to create a json export of just this block
// and store it in this directory.


if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ca63ea9a7d41',
	'title' => 'CTA Block',
	'fields' => array(
		array(
			'key' => 'field_5ca63f61c7ae3',
			'label' => 'CTA Text',
			'name' => 'cta_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ca63f6cc7ae4',
			'label' => 'Link',
			'name' => 'link',
			'type' => 'link',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cta',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
