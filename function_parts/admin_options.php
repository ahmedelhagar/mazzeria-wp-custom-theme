<?php
/*** Options fields ***/
 
 add_action('admin_init','ff_custom_setting');
 function ff_custom_setting(){
    /*
    add_settings_section( string $id, string $title, callable $callback, string $page )
    Description
    Part of the Settings API. Use this to define new settings sections for an admin page. Show settings
    sections in your admin page callback function with do_settings_sections(). Add settings fields
    to your section with add_settings_field().

    The $callback argument should be the name of a function that echoes out any content you want
    to show at the top of the settings section before the actual fields. It can output nothing if you want.
    */
    add_settings_section('ff_theme_options','Theme Options', null, 'theme_options');
    add_settings_section('ff_theme_options','Slides Options', null, 'theme_options');
    /*
        register_setting( string $option_group, string $option_name, array $args = array() )
        Registers a setting and its data.
        $option_group
        (string) (Required) A settings group name. Should correspond to an allowed option
        key name. Default allowed option key names include 'general', 'discussion',
        'media', 'reading', 'writing', and 'options'.

        $option_name
        (string) (Required) The name of an option to sanitize and save.

        $args
        (array) (Optional) Data used to describe the setting when registered.
    */
     register_setting('ff_theme_options', 'instagram_field');
     register_setting("ff_theme_options", "email"); 
     register_setting("ff_theme_options", "logo"); 
     register_setting("ff_theme_options", "about"); 

     register_setting("ff_theme_options", "first_slide_title"); 
     register_setting("ff_theme_options", "first_slide_link"); 
     register_setting("ff_theme_options", "first_slide_image"); 
     register_setting("ff_theme_options", "first_slide_desc");

     register_setting("ff_theme_options", "second_slide_title"); 
     register_setting("ff_theme_options", "second_slide_link"); 
     register_setting("ff_theme_options", "second_slide_image"); 
     register_setting("ff_theme_options", "second_slide_desc");

     register_setting("ff_theme_options", "third_slide_title"); 
     register_setting("ff_theme_options", "third_slide_link"); 
     register_setting("ff_theme_options", "third_slide_image"); 
     register_setting("ff_theme_options", "third_slide_desc");
    
     /*
     add_settings_field( string $id, string $title,
     callable $callback, string $page, string $section = 'default', array $args = array() )
     Adds a new field to a section of a settings page.
     Parameters
        $id
        (string) (Required) Slug-name to identify the field. Used in the 'id' attribute of tags.

        $title
        (string) (Required) Formatted title of the field. Shown as the label for the field during output.

        $callback
        (callable) (Required) Function that fills the field with the desired form inputs. The function should echo its output.

        $page
        (string) (Required) The slug-name of the settings page on which to show the section (general, reading, writing, ...).

        $section
        (string) (Optional) The slug-name of the section of the settings page in which to show the box.

        Default value: 'default'

        $args
        (array) (Optional) Extra arguments used when outputting the field.

        'label_for'
        (string) When supplied, the setting title will be wrapped in a <label> element, its for attribute populated with this value.
        'class'
        (string) CSS Class to be added to the <tr> element when the field is output.
        Default value: array()
     */
     
     add_settings_field('theme-instagram','Instagram','theme_instagram_func', 'theme_options','ff_theme_options');
     add_settings_field('email','Email in header','email_display', 'theme_options','ff_theme_options');
     add_settings_field('logo','Website Logo','logo_display', 'theme_options','ff_theme_options');
     add_settings_field('about','Footer About','about_display', 'theme_options','ff_theme_options');

     add_settings_field('first_slide_title','First Slide Title','first_slide_title_display', 'theme_options','ff_theme_options');
     add_settings_field('first_slide_link','first Slide link','first_slide_link_display', 'theme_options','ff_theme_options');
     add_settings_field('first_slide_image','first Slide image','first_slide_image_display', 'theme_options','ff_theme_options');
     add_settings_field('first_slide_desc','first Slide desc','first_slide_desc_display', 'theme_options','ff_theme_options');

     add_settings_field('second_slide_title','Second Slide Title','second_slide_title_display', 'theme_options','ff_theme_options');
     add_settings_field('second_slide_link','second Slide link','second_slide_link_display', 'theme_options','ff_theme_options');
add_settings_field('second_slide_image','second Slide image','second_slide_image_display', 'theme_options','ff_theme_options');
add_settings_field('second_slide_desc','second Slide desc','second_slide_desc_display', 'theme_options','ff_theme_options');

     add_settings_field('third_slide_title','Third Slide Title','third_slide_title_display', 'theme_options','ff_theme_options');
     add_settings_field('third_slide_link','third Slide link','third_slide_link_display', 'theme_options','ff_theme_options');
add_settings_field('third_slide_image','third Slide image','third_slide_image_display', 'theme_options','ff_theme_options');
add_settings_field('third_slide_desc','third Slide desc','third_slide_desc_display', 'theme_options','ff_theme_options');
 }
 
 /*function ff_theme_options(){
     echo 'Add your theme options';
 }
 function ff_theme_options(){
    echo 'Add your slides options';
}*/
?>