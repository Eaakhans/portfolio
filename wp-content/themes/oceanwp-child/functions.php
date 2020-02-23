<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    
    wp_enqueue_style("my-animate-css","https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css");
    wp_enqueue_style('my-permanent', 'https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap');
    wp_enqueue_style('my-raleway', 'https://fonts.googleapis.com/css?family=Raleway&display=swap');


    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
