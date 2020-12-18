<?php

/**************************************************************
    Function to load our styles & scripts into the head tag
 *************************************************************/

function load_site_style_and_scripts() {
    // Enqueue styles
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Volkhov:400,400i,700,700i',null);
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/layout.css',false,'1.0','all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',true,'4.5.0','all' );

    // Enqueue scripts

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),'1.16.0',true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array(),'4.5.0',true );
}

add_action( 'wp_enqueue_scripts', 'load_site_style_and_scripts' );

/**************************************************************
    Add support for Wordpress features
***************************************************************/

function custom_theme_styles() {

    add_theme_support( 'post-formats', array (       
            'aside',
            'image',
            'video',
            'quote',
            'link', 
            'gallery',
            'status',
            'audio',
            'chat'
        )
    );

    add_theme_support( 'html5', array( 'search-form' ) );

    add_theme_support( 'post-thumbnails' );

    register_default_headers(

        array( //enclosing array

            'codepoet' => array( //begin register image
                'url' => '%s/images/Code_Is_Poetry.png',
                'thumbnail_url' => '%s/images/Code_Is_Poetry.png',
                'description' => 'Code is Poetry',
            ), //end register image

            'trainingwheels' => array(
                'url' => '%s/images/Training_Wheels.jpg',
                'thumbnail_url' => '%s/images/Training_Wheels.jpg',
                'description' => 'Remove the Training Wheels',   
            ),
            'livethecode' => array(
                'url' => '%s/images/Live_By_The_Code.png',
                'thumbnail_url' => '%s/images/Live_By_The_Code.png',
                'description' => 'Web developers Live By The Code!',
            ),    

        ) //end enclosing array

    );

    $defaults = array(

        'default-image' => '%s/images/Live_By_The_Code.png',
        'default-text-color' => '000',
        'width' => 822,
        'height' => 250,
        'flex-width' => true,
        'flex-height' => true,
    );

    add_theme_support( 'custom-header', $defaults );

    $defaults_bkgnd = array(

        'default-color' => '',
        'default-image' => '%1$s/images/double-bubble-outline.png',
        'default-repeat' => 'repeat',
        'default-position-x' => 'left',
        'default-position-y' => 'top',
        'default-size' => 'auto',
    );

    add_theme_support( 'custom-background', $defaults_bkgnd );

}

add_action( 'after_setup_theme', 'custom_theme_styles' );

/************************************************************
    Create a function to handle all the theme setup items
 ***********************************************************/

 function load_on_initialize() {

    add_theme_support( 'menus' );
    register_nav_menu( 'main-menu', 'The main header menu' );
    
 }

 add_action( 'init', 'load_on_initialize' );

 /************************************************************
    Register the sidebars
 ***********************************************************/

 function theme_widgets_and_sidebars() {

    register_sidebar (

        array(

            'name' => 'Main Sidebar',
            'id' => 'main-sidebar',
            'description' => 'The main sidebar of our theme',
            'class' => 'widget_block',
            'before-widget' => '<article id="%1$s" class="widget %2$s">',
            'after-widget' => '</article>',
            'before-title' => '<h4 class="widget-title">',
            'after-title' => '</h4>',

            ));
    register_sidebar (

        array(
        
            'name' => '404 Sidebar',
            'id' => 'not-found-widget',
            'description' => 'The widget for the 404 page to direct visitors to more relevant content',
            'class' => 'widget_block',
            'before-widget' => '<article id="%1$s" class="widget %2$s">',
            'after-widget' => '</article>',
            'before-title' => '<h4 class="widget-title">',
            'after-title' => '</h4>',
        
                    ));
    register_sidebar (

        array(
                        
            'name' => 'Header Widget',
            'id' => 'header-widget',
            'description' => 'The widget for the header section of our theme',
            'class' => 'header_block widget_block',
            'before-widget' => '<article id="%1$s" class="widget %2$s">',
            'after-widget' => '</article>',
            'before-title' => '<h4 class="widget-title">',
            'after-title' => '</h4>',
                        
                    ));
         }

add_action( 'widgets_init', 'theme_widgets_and_sidebars' );