<!DOCTYPE>
<html <?php language_attributes(); ?>>
    <head>
        <?php
            global $wpdb;
            $all_cats = array();
            $args = array(
                'taxonomy' => 'product_cat',
                'orderby' => 'name',
                'field' => 'name',
                'order' => 'ASC',
                'hide_empty' => false
            );
            $all_cats = get_categories($args);
        ?>
        <meta charset="<?php bloginfo('charset'); ?>" />
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
        <link rel="pingback" href="<?php bloginfo('pingback'); ?>" />
        <title><?php bloginfo('title'); ?></title>
        <?php wp_head(); ?>
        <style type="text/css">
          @font-face {
            font-family: 'Cairo-Regular';
            src: url('<?php echo get_template_directory_uri(); ?>/fonts/Cairo-Regular.ttf') format('truetype');  
            font-weight: normal;
            font-style: normal;
          }
          *{
              font-family: 'Cairo-Regular';
          }
          .woocommerce-error {
        border-top-color: #b81c23;
        float: left !important;
        width: 100% !important;
    }
    .woocommerce-notices-wrapper {
    width: 100%;
    float: left;
}
.woocommerce-notices-wrapper p {
    width: 100%;
    float: left;
}
        </style>
    </head>
 <body>
    <!-- HEADER -->
 <div class="container-fluid float-left px-0 py-0">
        <div class="container-fluid float-left top-black-menu">
            <div class="container">
                <?php topBlackMenu(); ?>
                <div class="float-right service">
                    <i class="bi bi-chat-heart"></i>
                    24/7 CHAT
                </div>
            </div>
        </div>

        <div class="container-fluid float-left top-header">
        <div class="container-fluid float-left" style="padding: 20px;">
                <div class="container">
                    <a href="<?php echo site_url(); ?>">
                    <img class="top-logo" src="<?php echo get_option('logo'); ?>" alt="Mazzeria LTD">
                    </a>
                    <div class="col-xs-3 col-lg-3 col-md-3 col-5 float-left px-0 py-0 cont-con">
                        <div class="email-us">
                            <p class="mx-0 my-0">Send us a message?</p>
                            <p class="ask-an mx-0 my-0"><?php echo get_option('email'); ?></p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-lg-3 col-md-3 col-5 float-left px-0 py-0 cont-con">
                        <div class="email-us">
                            <p class="mx-0 my-0" style="color: #222222;font-weight: lighter;">Contact US</p>
                            <p class="ask-an mx-0 my-0" style="color: #222222;font-weight: bold;">
                                <a style="color: #222;" href="https://instagram.com/<?php echo get_option('instagram_field'); ?>">
                                    <i class="bi bi-instagram"></i>
                                    <?php echo get_option('instagram_field'); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="top-shopping-cart col-2">
                    <a href="<?php echo site_url(); ?>/cart">
                    <i class="bi bi-bag" style="color: #222;"></i>
                    <span id="items_count"><?php
                        if(isset($_COOKIE['woocommerce_cart_total'])){
                            echo $_COOKIE['woocommerce_cart_total'].' pieces';
                        }else{
                            echo '0 pieces';
                        }
                    ?></span>
                    <!--
                        https://woocommerce.com/document/show-cart-contents-total/
                    -->
                    </a>
                </div>
            </div>

            <div class="container-fluid float-left" style="padding: 10px;border-top: 2px solid #e4e4e4">
                <div class="container">
                    <div class="dropdown float-left">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SHOP BY CATEGORIES
                            <i class="bi bi-list-nested"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                                foreach ($all_cats as $cat) {
                                    if($cat->slug !== 'uncategorized'){
                            ?>
                                <a class="dropdown-item" href="<?php echo site_url().'/product-category/'.$cat->slug; ?>"><?php echo $cat->name; ?></a>
                            <?php
                                }
                                }
                            ?>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light float-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php topColoredMenu(); ?>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>
                    </nav>
                </div>

            </div>

        </div>
    </div>