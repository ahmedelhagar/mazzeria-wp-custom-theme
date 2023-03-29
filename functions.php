<?php

require_once('wp-bootstrap-navwalker.php');

add_theme_support('menus');
add_theme_support('post-thumbnails');

//Require Parts
require_once('function_parts/enqueue_style.php');
require_once('function_parts/enqueue_script.php');
require_once('function_parts/user_menus.php');
require_once('function_parts/admin_menus.php');
require_once('function_parts/admin_form.php');
require_once('function_parts/admin_options.php');
require_once('function_parts/admin_inputs_callback.php');
 
//Add 'active' css class to active link
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

//Declare Woocommerce Support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
   add_theme_support( 'wc-product-gallery-slider' );
   add_theme_support( 'wc-product-gallery-lightbox' );
   add_theme_support( 'wc-product-gallery-zoom' );
}


// this should only ever fire on non-cached pages (so it SHOULD fire
// whenever we add to cart / update cart / etc
function update_cart_total_cookie()
{
    global $woocommerce;
    $cart_total = $woocommerce->cart->cart_contents_count;
    setcookie('woocommerce_cart_total', $cart_total, 0, '/');
}
add_action('init', 'update_cart_total_cookie');


//AUTO Update Cart Page
add_action( 'wp_head', function() {

	?><style>
	.woocommerce button[name="update_cart"],
	.woocommerce input[name="update_cart"] {
		display: none;
	}</style><?php
	
} );

add_action( 'wp_footer', function() {
	
	?><script>
	jQuery( function( $ ) {
		let timeout;
		$('.woocommerce').on('change', 'input.qty', function(){
			if ( timeout !== undefined ) {
				clearTimeout( timeout );
			}
			timeout = setTimeout(function() {
				$("[name='update_cart']").trigger("click"); // trigger cart update
			}, 1000 ); // 1 second delay, half a second (500) seems comfortable too
		});
	} );
	</script><?php
	
} );

add_action('woocommerce_after_shop_loop_item', 'add_star_rating',0 );
function add_star_rating()
{
global $woocommerce, $product;
$average = $product->get_average_rating();
?>
<div class="p-rate" id="shop-p-rate">
	<i class="bi bi-star<?php
		if($average >= 1){
			echo '-fill';
		}elseif($average === 0){
			echo '';
		}elseif($average < 1 && $average > 0){
			echo '-half';
		};
	?>"></i>
	<i class="bi bi-star<?php
		if($average >= 2){
			echo '-fill';
		}elseif($average === 1){
			echo '';
		}elseif($average < 2 && $average > 1){
			echo '-half';
		};
	?>"></i>
	<i class="bi bi-star<?php
		if($average >= 3){
			echo '-fill';
		}elseif($average === 2){
			echo '';
		}elseif($average < 3 && $average > 2){
			echo '-half';
		};
	?>"></i>
	<i class="bi bi-star<?php
		if($average >= 4){
			echo '-fill';
		}elseif($average === 3){
			echo '';
		}elseif($average < 4 && $average > 3){
			echo '-half';
		};
	?>"></i>
	<i class="bi bi-star<?php
		if($average >= 5){
			echo '-fill';
		}elseif($average === 4){
			echo '';
		}elseif($average < 5 && $average > 4){
			echo '-half';
		};
	?>"></i>
	(<?php echo $average; ?>)
</div>
<?php
}

add_action( 'woocommerce_before_calculate_totals', 'one_applied_coupon_only', 10, 1 );
function one_applied_coupon_only( $cart ) {
    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 )
        return;

    // For more than 1 applied coupons only
    if (  sizeof($cart->get_applied_coupons()) > 1 && $coupons = $cart->get_applied_coupons() ){
        // Remove the first applied coupon keeping only the last appield coupon
        $cart->remove_coupon( reset($coupons) );
    }
}




// Alternative
// Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
wp_dequeue_style( 'wp-block-library' ); // Wordpress core
wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress core
wp_dequeue_style( 'wc-block-style' ); // WooCommerce
wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme

wp_deregister_script('wp-mediaelement');
wp_deregister_style('wp-mediaelement');

wp_deregister_style('wc-blocks-style');
wp_deregister_style('wc-blocks-vendors-style');
wp_deregister_style('woocommerce-layout');
}
 ?>