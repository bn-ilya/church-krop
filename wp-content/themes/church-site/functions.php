<?php

function churchSite_scripts() {
    wp_enqueue_style('style', get_template_directory_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.css');
}

add_action('wp_enqueue_scripts', 'churchSite_scripts');