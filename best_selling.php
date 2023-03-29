<div class="container best-selling">
    <h3 class="font-weight-bold">Best Selling Products</h3>
    <ul class="col-xs-12 col-lg-12 col-md-12 col-sm-12 float-left">
    <?php
    $args = array(
        'post_type' => 'product',
        'meta_key' => 'total_sales',
        'orderby' => 'meta_value_num',
        'posts_per_page' => 7,
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); 
    global $product; ?>

        <li class="col-xs-4 col-lg-4 col-md-4 col-sm-12 float-left shop-products-data">
            <div class="p-holder col-xs-12 col-lg-12 col-md-12 col-sm-12 float-left">
                <a href="<?php the_permalink(); ?>" id="id-<?php the_id(); ?>" title="<?php the_title(); ?>">
                    <?php if (has_post_thumbnail( $loop->post->ID )) 
                            echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
                            else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="product placeholder Image" />'; ?>

                    <div class="p-title"><?php the_title(); ?></div>
                    <?php
                    $average = (float) $product->get_average_rating();
                    ?>
                    <div class="p-rate">
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
                    <div class="p-price">$<?php
                    echo $product->get_price();
                    ?> USD</div>
                </a>
            </div>
        </li>
    
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    </ul>
</div>