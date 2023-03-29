<?php
/*** New menu item ***/

function my_admin_menu () {
    $page_title = 'Elhaggar Settings Page';
    $menu_title = 'Elhaggar Settings';
    $capability = 'edit_posts';
    $menu_slug = 'theme_options_page';
    $callback_function = 'my_theme_settings_page';
    $icon_url = '';
    $position = 20;
 
    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $callback_function, $icon_url, $position );
 }
 
 add_action('admin_menu', 'my_admin_menu');
?>