<!-- SLIDER -->
<div class="container-fluid float-left px-0 py-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                $carousal_items = array('first','second','third');
                $x = 1;foreach($carousal_items as $carousal_item){
                ?>
                <div class="carousel-item <?php echo ($x === 1) ?  'active' : '' ;?>">
                    <div class="pattern-bg<?php echo $x;?>">
                        <img src="<?php echo get_option($carousal_item.'_slide_image'); ?>" class="img-slide">
                        <div class="h_title"><?php echo strtoupper(get_option($carousal_item.'_slide_title')); ?></div>
                        <div class="divdesc"><?php
                        $desc = explode(' ',get_option($carousal_item.'_slide_desc'));
                        $desc[0] = '<span style="text-decoration:underline;padding: 10px;color: #609373;background: #fff;">'.$desc[0].'</span>';
                        echo implode(' ',$desc);
                        ?></div>
                        <div class="container-fluid float-left text-center vi-btn">
                            <a class="view-item" href="<?php echo get_option('first_slide_link'); ?>">View Product <i class="bi bi-arrow-bar-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php $x++;} ?>
            </div>
        </div>
    </div>