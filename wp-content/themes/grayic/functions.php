<?php
function grayic_bootstrapping() {
    load_theme_textdomain('grayic');
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support('title-tag');
}

add_action( "after_setup_theme", "grayic_bootstrapping" );

function alpha_assets(){
    wp_enqueue_style( "bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" );
    wp_enqueue_style( "grayic_style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "alpha_assets");