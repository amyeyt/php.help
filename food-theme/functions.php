<?php 
    function food_theme() {
        wp_enqueue_style("food_theme_bootstrap", "//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
        wp_enqueue_script("food_theme_fontawesome", "//use.fontawesome.com/releases/v5.0.6/js/all.js");
        wp_enqueue_style("food_theme_style", get_theme_file_uri("/style.css"));
    }
    add_action("wp_enqueue_scripts", "food_theme");

    function food_theme_feature() {
        add_theme_support( 'post-thumbnails' );
        
        register_nav_menu('headerMenuLocation', 'Header Menu Location');

        register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    }
    add_action( 'after_setup_theme', 'food_theme_feature' );
