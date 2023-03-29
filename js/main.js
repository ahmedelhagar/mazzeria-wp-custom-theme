jQuery('#menu-top-colored-menu').removeClass('nav-item');
    jQuery('#menu-top-colored-menu').addClass('navbar-nav mr-auto');
    jQuery('.shop-products-data:first').addClass('_1st-item');
    var checkCookie = function() {

        var lastCookie = Cookies.get('woocommerce_cart_total'); // 'static' memory between function calls
    
        return function() {
    
            var currentCookie = Cookies.get('woocommerce_cart_total');
    
            if (currentCookie != lastCookie) {
    
                // something useful like parse cookie, run a callback fn, etc.
    
                lastCookie = currentCookie; // store latest cookie
                if(currentCookie >= 0){
                    jQuery('#items_count').html(currentCookie + ' pieces');
                }else{
                    jQuery('#items_count').html(0 + ' pieces');
                }
                console.log(currentCookie);
            }
        };
    }();
    
    window.setInterval(checkCookie, 100); // run every 100 ms
    
jQuery(document).ready(function(){
    jQuery('.woocommerce-product-gallery__trigger').html('<i class="bi bi-card-image"></i> Gallery');
});