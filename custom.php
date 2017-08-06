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
    wp_enqueue_style( 'animate', '/node_modules/animate.css/animate.min.css' );
    wp_enqueue_style( 'owl', '/node_modules/owl-carousel-2/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-theme', '/node_modules/owl-carousel-2/assets/owl.theme.default.min.css' );
    wp_enqueue_style( 'hover', '/node_modules/hover.css/css/hover-min.css' );

    wp_enqueue_script( 'owl-carousel-js', '/node_modules/owl-carousel-2/owl.carousel.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'parallax-js', '/node_modules/parallax-js/dist/parallax.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'owl-init-home.js', '/js/owl-init-home.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_npm_scripts' );
