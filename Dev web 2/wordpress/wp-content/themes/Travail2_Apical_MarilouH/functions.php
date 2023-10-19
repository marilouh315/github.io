<?php 

//Loading header files (css + google fonts)
function travailapical_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('travailapical-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('travailapical-googlefonts1', 'https://fonts.googleapis.com', array(), $version, 'all');
    wp_enqueue_style('travailapical-googlefonts2', 'https://fonts.gstatic.com', array(), $version, 'all');
    wp_enqueue_style('travailapical-googlefonts3', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap', array(), $version, 'all');
    // wp_enqueue_style('travailapical-fontAwesome', 'https://kit.fontawesome.com/98b4877a77.js', array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'travailapical_register_styles');

//Loading footer files (javaScript)
function travailapical_register_scripts() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('travailapical-jscript', get_template_directory_uri(). "/assets/js/main.js", array(), $version, true); 

}
add_action('wp_enqueue_scripts', 'travailapical_register_scripts');





?>