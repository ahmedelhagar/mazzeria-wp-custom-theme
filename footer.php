<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Useful Links</h3>
                        <ul>
                            <?php leftFooterMenu(); ?>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Policies</h3>
                        <ul>
                            <?php centerFooterMenu(); ?>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3><?php echo bloginfo('title'); ?></h3>
                        <p>
                            <?php echo get_option('about'); ?>
                        </p>
                    </div>
                    <div class="col item social">
                        <a href="https://instagram.com/<?php echo get_option('instagram_field'); ?>">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
                <p class="copyright">MAZZERIA LTD © 2022</p>
            </div>
        </footer>
    </div>
        <?php wp_footer(); ?>
    </body>
</html>
