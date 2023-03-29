<?php
function blog_add_script(){
    wp_enqueue_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',array(),false,true);
    wp_enqueue_script('propper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',array('jquery'),false,true);
    wp_enqueue_script('bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',array('jquery','propper'),false,true);
    wp_enqueue_script('script-js',get_template_directory_uri() . '/js/main.js',array('jquery'),false,true);
}

add_action('wp_enqueue_scripts','blog_add_script');

?>