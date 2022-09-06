<?php

function churchSite_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'churchSite_scripts');