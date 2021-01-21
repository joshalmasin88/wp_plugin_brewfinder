<?php

// Add Scripts
function bfs_add_scripts()
{
//    Add Main CSS
    wp_enqueue_style('bfs-main-style', plugins_url(). '/brewfind/css/style.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');

    wp_enqueue_style('owlmin-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('owlmin-css-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"');

    //    Add Main JS
    wp_enqueue_script('bfs-main-style', plugins_url(). '/brewfind/js/main.js', array( 'jquery' ), '3.5.1',  true);
    wp_enqueue_script('owl-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
}


// Add Scripts
add_action('wp_enqueue_scripts', 'bfs_add_scripts');