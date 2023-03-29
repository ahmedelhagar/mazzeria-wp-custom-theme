<?php
function register_menus(){
    register_nav_menus(array(
    'topBlackMenu' => 'Top Black Nav Menu',
    'leftFooterMenu' => 'Left Footer Nav Menu',
    'centerFooterMenu' => 'Center Footer Nav Menu',
    'topColoredMenu' => 'Top Colored Nav Menu'
    ));
}
function topBlackMenu(){
    wp_nav_menu(array(
    'theme_location' => 'topBlackMenu',
    'container'      => '',
    'menu_class'     => 'float-left',
    'depth'          => 1,
    'walker'         => new WP_Bootstrap_Navwalker()
    ));
}

function leftFooterMenu(){
    wp_nav_menu(array(
    'theme_location' => 'leftFooterMenu',
    'container'      => '',
    'menu_class'     => '',
    'depth'          => 1,
    'walker'         => new WP_Bootstrap_Navwalker()
    ));
}

function centerFooterMenu(){
    wp_nav_menu(array(
    'theme_location' => 'centerFooterMenu',
    'container'      => '',
    'menu_class'     => '',
    'depth'          => 1,
    'walker'         => new WP_Bootstrap_Navwalker()
    ));
}

function topColoredMenu(){
    wp_nav_menu(array(
    'theme_location' => 'topColoredMenu',
    'container'      => '',
    'menu_class'     => 'nav-item',
    'depth'          => 2,
    'walker'         => new WP_Bootstrap_Navwalker()
    ));
}


add_action('init','register_menus');
?>