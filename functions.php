<?php

/**
 * Ikitheme Functions
 * 
 * @package ikitheme
 */

// 1. SETUP TEMA
add_action('after_setup_theme', 'ikitheme_setup');

function ikitheme_setup()
{

    // Aktifkan title tag otomatis
    add_theme_support('title-tag');

    // Aktifkan featured image
    add_theme_support('post-thumbnails');

    // Aktifkan HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'gallery',
        'caption',
    ));

    // Daftarkan menu
    register_nav_menus(array(
        'menu-utama'  => 'Menu Utama',
        'menu-footer' => 'Menu Footer',
    ));
}

// 2. DAFTARKAN CSS & JS
add_action('wp_enqueue_scripts', 'ikitheme_assets');

function ikitheme_assets()
{

    // CSS utama
    wp_enqueue_style(
        'ikitheme-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // JS utama
    wp_enqueue_script(
        'ikitheme-script',
        get_template_directory_uri() . '/js/main.js',
        array(),
        '1.0.0',
        true
    );
}

// 3. ATUR EXCERPT
add_filter('excerpt_length', 'ikitheme_excerpt_length');

function ikitheme_excerpt_length($length)
{
    return 25;
}

add_filter('excerpt_more', 'ikitheme_excerpt_more');

function ikitheme_excerpt_more($more)
{
    return ' <a class="read-more" href="' . get_permalink() . '">Baca Selengkapnya →</a>';
}

// 4. KEAMANAN — HAPUS VERSI WORDPRESS
add_filter('the_generator', 'ikitheme_remove_version');

function ikitheme_remove_version()
{
    return '';
}
