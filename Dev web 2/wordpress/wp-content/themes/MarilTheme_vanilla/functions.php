<?php
function marilvanilla_theme_support() {
    //Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'marilvanilla_theme_support');

function marilvanilla_menus() {
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}
add_action('init', 'marilvanilla_menus');




function marilvanilla_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('marilvanilla-style', get_template_directory_uri(). "/style.css", array('marilvanilla-bootstrap'), $version, 'all');
    wp_enqueue_style('marilvanilla-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('marilvanilla-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}
  
/* When wordpress runs 'wp_enqueue_scripts', run the function*/
add_action('wp_enqueue_scripts', 'marilvanilla_register_styles');




function marilvanilla_register_scripts() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('marilvanilla-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true); //We changed the default false parameter and it's going to place it in the footer part of the code (and not the head part).
    wp_enqueue_script('marilvanilla-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true); 
    wp_enqueue_script('marilvanilla-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true); 
    wp_enqueue_script('marilvanilla-jscript', get_template_directory_uri(). "/assets/js/main.js", array(), $version, true); 

}

/* When wordpress runs 'wp_enqueue_scripts', run the function*/
add_action('wp_enqueue_scripts', 'marilvanilla_register_scripts');



?>