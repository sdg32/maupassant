<?php

if ( ! isset( $content_width ) ) {
    $content_width = 900;
}

if ( ! function_exists( 'maupassant_setup' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function maupassant_setup() {
        load_theme_textdomain( 'maupassant', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 800, 500, true );

        // Enable support for background image
        add_theme_support( 'custom-background' );

        // Enable support for Post Formats.
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );

        // This theme styles the visual editor to resemble the theme style.
        add_editor_style( 'css/editor-style.css' );

        // Use wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'maupassant' )
        ) );
    }
endif;
add_action( 'after_setup_theme', 'maupassant_setup' );

/**
 * Register widget area.
 */
function maupassant_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget Area', 'maupassant' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'maupassant' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'maupassant_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function maupassant_scripts() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'maupassant-style', get_stylesheet_uri() );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'maupassant_scripts' );

require get_template_directory() . '/inc/tpls.php';