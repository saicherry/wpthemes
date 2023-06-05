<?php


function my_plugin_assets() {
    wp_register_style( 'main-styles', get_template_directory_uri() . 'assets/css/style.css', array(), false, 'all');
    wp_enqueue_style('main-styles');
    wp_register_style( 'bootstrap-styles', get_template_directory_uri() . 'assets/css/bootstrap.min.css' , array(), false, 'all');
    wp_enqueue_style('bootstrap-styles');
    // wp_register_script( 'custom-gallery', plugins_url( '/js/gallery.js' , __FILE__ ) ); 
}

add_action( 'wp_enqueue_scripts', 'my_plugin_assets' );

