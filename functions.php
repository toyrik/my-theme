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
        // Альтернативный логотип.
        $logo_width  = 120;
        $logo_height = 90;

        // Настройки для ретины.
        if ( get_theme_mod( 'retina_logo', false ) ) {
            $logo_width  = floor( $logo_width * 2 );
            $logo_height = floor( $logo_height * 2 );
        }

        add_theme_support( 'html5', [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'script',
            'style',

        ]);

        add_theme_support(
            'custom-logo',
            array(
                'height'      => $logo_height,
                'width'       => $logo_width,
                'flex-height' => true,
                'flex-width'  => true,
            )
        );
        add_theme_support('post-thumbnails');
        register_nav_menu('header', 'Меню в шапке');
        register_nav_menu('footer', 'Меню для подвала');
    });

    add_action('widgets_init', function(){        
        register_sidebar([
            'name'          => 'Боковая колонка',
            'id'            => "sidebar-post-single",
            'description'   => 'Выводится только на странице одного поста',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>\n",
            'before_title'  => '<div class="h3">',
            'after_title'   => "</div>\n",
            'before_sidebar' => '', // WP 5.6
            'after_sidebar'  => '', // WP 5.6
        ]);
    });
    add_action('widgets_init', function(){        
        register_sidebar([
            'name'          => 'Левая колонка подвала',
            'id'            => "sidebar-footer-left",
            'description'   => 'Выводится слева в подвале',
        ]);
    });
    add_action('widgets_init', function(){        
        register_sidebar([
            'name'          => 'Центральная колонка подвала',
            'id'            => "sidebar-footer-center",
            'description'   => 'Выводится по центру в подвале',
        ]);
    });
    add_action('widgets_init', function(){        
        register_sidebar([
            'name'          => 'Правая колонка подвала',
            'id'            => "sidebar-footer-right",
            'description'   => 'Выводится справа в подвале',
        ]);
    });