<?php
   /*
   Plugin Name: Image Alt Reminder
   Plugin URI: 
   description: Only showing to admins and editors. Reminds you if you have forgotten to add an alt tag to any of your images on the frontend of your site.
   Version: 1.1
   Author: Toast Websites
   Author URI: https://www.toastwebsites.co.uk/
   */ ?>
<?php function image_alt_reminder(){ ?>
<?php if(current_user_can('editor') || current_user_can('administrator')) { ?><?php function iar_enqueue_scripts(){
wp_enqueue_script( 'iar_script', plugin_dir_url( __FILE__ ) . '/script.js', array('jquery'), 'null', false );
wp_enqueue_style( 'iar_style', plugin_dir_url( __FILE__ ) . '/style.css', array(), 'null', false );
wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/5.4.0/css/font-awesome.min.css');
} ?><?php add_action('wp_enqueue_scripts', 'iar_enqueue_scripts'); ?>
<?php } ?>
<?php } ?>
<?php add_action('init', 'image_alt_reminder'); ?>