<?php
/*
 * Plugin Name: first Plugin
 * Description: custom fun
 */
 /* Disable WordPress Admin Bar for all users */

add_filter( 'show_admin_bar', '__return_false' );
?>