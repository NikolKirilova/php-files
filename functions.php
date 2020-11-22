<?php
/*
function titlepage(){
    //Adds dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_theme_setup', 'titlepage');

*/
function load_stylesheets()
{
   
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('jqueryui', get_template_directory_uri() . '/css/jquery-ui.css',
    array(), false, 'all');
wp_enqueue_style('jqueryui');


    wp_register_style('style', get_template_directory_uri() . '/style.css',
        array(), false, 'all');
    wp_enqueue_style('style');


}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_bootstrap(){

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'include_bootstrap');


function include_jquery(){

    wp_deregister_script('jquery');

    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '', 1, true);
  
   
    
}

add_action('wp_enqueue_scripts', 'include_jquery');






function loadjs()
{

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js' , '', 1 , true);
    wp_enqueue_script('customjs');


}
add_action('wp_enqueue_scripts', 'loadjs');





add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(

    array(

        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),

    )

);


add_image_size('smallest', 200, 200, true);
add_image_size('largest', 800, 800, true);



