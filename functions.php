<?php

/*
 * Add style.css to front end.
 *
 */
function trd_enqueue_scripts(){
	wp_enqueue_style( 'trd_styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'trd_enqueue_scripts' );

/* 
 * Add style.css to editor
 *
 */
function trd_after_setup_theme(){
	add_editor_style('style.css');
}
add_action( 'after_setup_theme', 'trd_after_setup_theme' );

/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERNS
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function trd_register_block_patterns() {

	// The block pattern categories included in trd.
	$trd_block_pattern_categories = apply_filters( 'trd_block_pattern_categories', array(
		'trd-blog' => array(
			'label'			=> esc_html__( 'TRD Blog', 'trd' ),
		),
		'trd-cta'  => array(
			'label'			=> esc_html__( 'TRD Call to Action', 'trd' ),
		),
		'trd-footer' => array(
			'label'			=> esc_html__( 'TRD Footer', 'trd' ),
		),
		'trd-general' => array(
			'label'			=> esc_html__( 'TRD General', 'trd' ),
		),
		'trd-header' => array(
			'label'			=> esc_html__( 'TRD Header', 'trd' ),
		),
		'trd-hero' => array(
			'label'			=> esc_html__( 'TRD Hero', 'trd' ),
		),
		'trd-portfolio' => array(
			'label'			=> esc_html__( 'TRD Portfolio', 'trd' ),
		),
	) );

	// Sort the block pattern categories alphabetically based on the label value, to ensure alphabetized order when the strings are localized.
	uasort( $trd_block_pattern_categories, function( $a, $b ) { 
		return strcmp( $a["label"], $b["label"] ); }
	);

	// Register block pattern categories.
	foreach ( $trd_block_pattern_categories as $slug => $settings ) {
		register_block_pattern_category( $slug, $settings );
	}

}
add_action( 'init', 'trd_register_block_patterns' );

/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

function trd_register_block_styles() {
	// Separator: Sunset
	register_block_style( 'core/separator', array(
			'name'         => 'sunset',
			'label'        => __( 'Sunset', 'trd' ),
			'is_default'   => false,
			'inline_style' => '.wp-block-separator.is-style-sunset{height:10px; border:none;background: var(--wp--preset--gradient--sunset) !important; width: auto !important;margin-block-start: 0; max-width: none;}',
	) );
	
	// Button: Arrow
	register_block_style( 'core/button', array(
		'name'  	=> 'trd-arrow',
		'label' 	=> esc_html__( 'Arrow', 'trd' ),
	) );
}
add_action( 'init', 'trd_register_block_styles' );