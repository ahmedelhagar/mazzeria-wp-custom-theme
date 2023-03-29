<?php

function blog_add_css(){
    wp_enqueue_style('bootstrap-css','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons-css','https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css');
    wp_enqueue_style('style-css',get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts','blog_add_css');







?>