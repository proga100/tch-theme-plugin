<?php


function tch_enqueue_my_styles() {

	wp_enqueue_style( 'tch_enqueue_my_styles', TCH_THEME_PLUGIN_URL.'/assets/css/style.css', array(), '', true );
	wp_enqueue_script('java_codes', TCH_THEME_PLUGIN_URL.'/assets/js/java_codes.js', array('jquery'), '1.0.0', 'true' );
}

add_action( 'wp_enqueue_scripts', 'tch_enqueue_my_styles' );
