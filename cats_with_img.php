<div class="container-fluid float-left" style="padding-top: 100px;padding-bottom: 100px;">
    <div class="container">
        
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
            $all_cats_wimg = array_reverse(get_categories($args));
            $cat_colors = array(
                '#eedac2',
                '#d2cce0',
                '#dfe2d7',
                '#cce0ec',
                '#eae1b8',
                '#d5ebdd',
                '#ebd5d5',
                '#d5eaeb',
                '#e2eccc',
                '#c0ddd7'
            );
            $x = 0;
            foreach ($all_cats_wimg as $catwi) {
                if($catwi->slug !== 'uncategorized'){
                    $thumbnail_id = get_term_meta( $catwi->term_id, 'thumbnail_id', true );
                    $image_url = wp_get_attachment_url( $thumbnail_id ); // This variable is returing the product category thumbnail image URL.
                    if($x === 0 || $x === 3 || $x === 6 || $x === 9 || $x === 12){
        ?>
        <div class="col-xs-6 col-lg-6 col-md-6 col-sm-12 float-left px-0 py-0">
        <?php } ?>
            <div class="<?php 
            if($x === 9){
                echo 'col-xs-12 col-lg-12 col-md-12 ';
            }else{
                echo 'col-xs-6 col-lg-6 col-md-6 ';
            }
            ?>col-sm-12 float-left px-2 py-2">
                <a style="background: <?php echo $cat_colors[$x]; ?>;<?php
                if($x !== 0 && $x !== 3 && $x !== 6 && $x !== 9){
                    echo 'height: 150px;';
                }else {
                    echo 'height: auto;max-height: 319px;';
                }
                ?>" onmouseover="this.style.background='#fff';" 
                onmouseout="this.style.background='<?php echo $cat_colors[$x]; ?>';" class="cat_block_link col-xs-12 col-lg-12 col-md-12 col-sm-12 float-left" href="<?php echo site_url().'/product-category/'.$catwi->slug; ?>">
                    <div class="cat_block">
                        <?php echo $catwi->name; ?>
                        <p><?php echo $catwi->count; ?> Products</p>
                        <img class="cat_img" style="<?php 
                        if($x !== 0 && $x !== 3 && $x !== 6 && $x !== 9){
                            echo 'margin-top: -70px;width: 100px;float: right;';
                        }elseif($x === 9){
                            echo 'max-height: 221px;display: block;margin: auto;';
                        }else{
                            echo 'margin-bottom: -20px;';
                        }
                        ?>" src="<?php echo $image_url; ?>.webp" alt="<?php echo $catwi->name; ?>" />
                    </div>
                </a>
            </div>
        <?php
        if($x === 2 || $x === 5 || $x === 8 || $x === 9 || $x === 11){
            echo '</div>';
        }
                $x++;}
            }
        ?>
        
    </div>
</div>