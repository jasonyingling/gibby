<?php
/**
 * gibby Color Palette
 *
 * @package gibby
 * 
 * Set up colors for the customizer and Gutenberg color palette.
 *
 * Add a new array to add new color options to the customizer and
 * Gutenberg color palette.
 *
 * @since 1.0.0
 *
 * @see add_theme_support( 'editor-color-palette' )
 */
$gibby_color_options = array(
	array(
		'name' => esc_html__( 'Gutenberg Primary', 'gibby' ),
		'description' => esc_html__( 'Describe how this color is used.', 'gibby' ),
		'slug' => 'gibby-primary',
		'option' => 'gibby_primary_color',
		'default' => '#bada55', // 🤘
		'transport' => 'postMessage',
	),
);

$gibby_color_options = apply_filters( 'gibby_filter_color_options', $gibby_color_options );

/**
 * Build out the Gutenberg color palette to be used in add_theme_support( 'editor-color-palette' );
 */
$gibby_color_palette = array();

foreach ( $gibby_color_options as $color ) {
	$gibby_color_palette[] = array(
		'name' => $color['name'],
		'slug' => $color['slug'],
		'color' => esc_html( get_theme_mod( $color['option'], $color['default'] ) ),
	);
}