<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Theme Freesia
 * @subpackage storexmas
 * @since storexmas 1.0
 */
/*********** storexmas ADD THEME SUPPORT FOR INFINITE SCROLL **************************/
function storexmas_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'storexmas_jetpack_setup' );
