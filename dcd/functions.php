<?php

function load_stylesheets() {
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );


function load_jquery()
{

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-v3.5.1.min.js', '', 1, true);
    wp_enqueue_script('jquery');

}
add_action('wp_enqueue_scripts', 'load_jquery');


function load_js()
{

    wp_register_script('main', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('main');

}
add_action('wp_enqueue_scripts', 'load_js');


// nav regsistration
add_theme_support('menus');

register_nav_menus( 
    
    array(
        'side-menu' => __('Side Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )

);


function dcd_custom_logo_setup() 
{
    $args = array(
    'height'      => 100,
    'width'       => 100,
    'header-text' => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $args );
}
add_action('after_setup_theme', 'dcd_custom_logo_setup');



function dcd_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/jumbotron-image.jpg',
        'default-text-color' => '000',
        'width'              => 1538,
        'height'             => 550,
    );
    add_theme_support( 'custom-header', $args );
}
add_action('after_setup_theme', 'dcd_custom_header_setup');

   
?>

