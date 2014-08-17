<?php

/**
 * Plugin Name: Bootstrap Effects
 * Plugin URI: http://lsdev.biz
 * Description: Effects plugin for themes using the BootStrap Framework.
 * Author: Richard Miles
 * Version: 1.0
 * Author URI: http://lsdev.biz
 */

function effects_register_scripts() {
	wp_register_script( 'jquery-transit', plugins_url( '/js/transit.js', __FILE__ ) , array('jquery'), null, true );
	wp_enqueue_script( 'jquery-transit' );
}

function effects_shortcode( $atts, $content = null ) {
	global $post;
	extract($atts);

}
// add_shortcode( 'effects', 'effects_shortcode' );

	    add_action( 'admin_init', array( $this, 'shortcode_ui' ) );
	    add_action( 'admin_enqueue_scripts', array( $this, 'shortcode_ui_style' ) );

	    

// with [effects pooh="horizontalslide"]asdasdasd[/effects] as short code
add_action( 'wp_enqueue_scripts', 'effects_register_scripts' );
