<?php
/**
 * Plugin Name: Chris's Custom WP Functions
 * Plugin URI:
 * Description: This plugin enables various NPM modules and registers a secondary menu. Owl Carousel 2, animate.css and hover are all included. Run npm install with the correct package.json file!
 * Author: Chris Moore
 * Author URI:
 * Version: 0.5
 */

function register_products_menu() {
  register_nav_menu('products-menu',__( 'Products Menu' ));
}
add_action( 'init', 'register_products_menu' );

function enqueue_npm_scripts() {
    wp_enqueue_style( 'animate', plugin_dir_url( __FILE__ ).'node_modules/animate.css/animate.min.css' );
    wp_enqueue_style( 'owl', plugin_dir_url( __FILE__ ).'node_modules/owl-carousel-2/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-theme', plugin_dir_url( __FILE__ ).'node_modules/owl-carousel-2/assets/owl.theme.default.min.css' );
    wp_enqueue_style( 'hover', plugin_dir_url( __FILE__ ).'node_modules/hover.css/css/hover-min.css' );

    wp_enqueue_script( 'owl-carousel-js', plugin_dir_url( __FILE__ ).'node_modules/owl-carousel-2/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'parallax-js', plugin_dir_url( __FILE__ ).'node_modules/parallax-js/dist/parallax.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'custom-nav', plugin_dir_url( __FILE__ ).'custom-js/custom-nav.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'custom-body-height', plugin_dir_url( __FILE__ ).'custom-js/nav-height.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'owl-init', plugin_dir_url( __FILE__ ).'custom-js/bg-fade.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_npm_scripts' );

add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'class-name' ) );
} );
