<?php
function my_theme_settings_page(){
    /*** New section ***/
    ?>
       <h1>Theme Settings Page</h1>
       <?php settings_errors(); ?> 
    
       <form method="post" action="options.php">
           <a href="media-new.php" target="_blank">Media Uploader</a>
           <?php settings_fields("ff_theme_options");?>
           <?php do_settings_sections('theme_options')?>
           <?php submit_button();?>
       </form>
    
<?php
    }
?>