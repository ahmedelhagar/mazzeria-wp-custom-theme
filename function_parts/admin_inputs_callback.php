<?php
function theme_instagram_func(){
     $instagram = esc_attr(get_option( 'instagram_field' )); 
     echo '<input type="text" name="instagram_field" value="'.$instagram.'" placeholder="Instagram username">';
 }
 function email_display()
 {
     echo '<input type="email" name="email" value="'.get_option('email').'" placeholder="E-Mail">';
 }
 function logo_display()
 {
     echo '<input type="text" name="logo" value="'.get_option('logo').'" placeholder="logo link">';
 }
 function about_display()
 {
     echo '<textarea name="about" placeholder="Footer About">'.get_option('about').'</textarea>';
 }
 function first_slide_title_display()
 {
     echo '<input type="text" name="first_slide_title" value="'.get_option('first_slide_title').'" placeholder="First Slide Title">';
 }
 function first_slide_link_display()
 {
     echo '<input type="text" name="first_slide_link" value="'.get_option('first_slide_link').'" placeholder="First Slide link">';
 }
function first_slide_image_display()
 {
     echo '<input type="text" name="first_slide_image" value="'.get_option('first_slide_image').'" placeholder="First Slide image">';
 }
function first_slide_desc_display()
 {
     echo '<input type="text" name="first_slide_desc" value="'.get_option('first_slide_desc').'" placeholder="First Slide desc">';
 }


 function second_slide_title_display()
 {
     echo '<input type="text" name="second_slide_title" value="'.get_option('second_slide_title').'" placeholder="second Slide Title">';
 }
 function second_slide_link_display()
 {
     echo '<input type="text" name="second_slide_link" value="'.get_option('second_slide_link').'" placeholder="second Slide link">';
 }
function second_slide_image_display()
 {
     echo '<input type="text" name="second_slide_image" value="'.get_option('second_slide_image').'" placeholder="second Slide image">';
 }
function second_slide_desc_display()
 {
     echo '<input type="text" name="second_slide_desc" value="'.get_option('second_slide_desc').'" placeholder="second Slide desc">';
 }



 function third_slide_title_display()
 {
     echo '<input type="text" name="third_slide_title" value="'.get_option('third_slide_title').'" placeholder="third Slide Title">';
 }
 function third_slide_link_display()
 {
     echo '<input type="text" name="third_slide_link" value="'.get_option('third_slide_link').'" placeholder="third Slide link">';
 }
function third_slide_image_display()
 {
     echo '<input type="text" name="third_slide_image" value="'.get_option('third_slide_image').'" placeholder="third Slide image">';
 }
function third_slide_desc_display()
 {
     echo '<input type="text" name="third_slide_desc" value="'.get_option('third_slide_desc').'" placeholder="third Slide desc">';
 }
 
 ?>