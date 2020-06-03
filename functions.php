<!-- Adding stylesheets and scripts -->

<?php

function load_stylesheets(){

    // Bootstrap
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    // Main style sheet
    wp_register_style('mainStyle', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('mainStyle');
    
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js(){

    wp_register_script("Jquery", get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script("Jquery");

    wp_register_script("bootstrapJs", get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script("bootstrapJs");

    wp_register_script("customJs", get_template_directory_uri() . '/js/custom.js');
    wp_enqueue_script("customJs");
}

add_action('wp_enqueue_scripts', 'load_js');


// Adds menus tab under appearence on back end
add_theme_support("menus");


register_nav_menus(
    array(
        "navbar" => __("Navbar", "theme"),
        "footer_menu" => __("footer_menu", "theme"),
    )
);