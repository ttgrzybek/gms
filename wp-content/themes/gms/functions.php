<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function coderslab_enqueue_script() {
    wp_enqueue_script('js', get_stylesheet_directory_uri() . '/js/app.js', ['jquery'], null, true);
    //slick
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], null, true);
    //Add popper
    wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', ['jquery'], null, true);
    //Add bootstrap
    wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['jquery', 'popper'], null, true);

    //Add bootstrap styles
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

    //Add font

    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
    wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i&amp;subset=latin-ext');



    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', null, '1.0.0', 'all');

    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/main.css',
        ['bootstrap'],
        true );



}
add_action( 'wp_enqueue_scripts' , 'coderslab_enqueue_script' );