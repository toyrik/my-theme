<?php

    define('MYTHEME_DIR_CSS', get_template_directory_uri() . '/assets/css/');
    define('MYTHEME_DIR_JS', get_template_directory_uri() . '/assets/js/');
    define('MYTHEME_DIR_IMG', get_template_directory_uri() . '/assets/img/');

    add_action('wp_enqueue_scripts', function(){
        wp_enqueue_style('bootstrap', MYTHEME_DIR_CSS . 'bootstrap.min.css');
        wp_enqueue_style('main', MYTHEME_DIR_CSS . 'main.css');
        wp_enqueue_script('main', MYTHEME_DIR_JS . 'main.js');
    });
    
    add_action('after_setup_theme', function(){
        add_theme_support('post-thumbnails');
    });