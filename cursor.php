<?php
/*
Plugin Name: Cursor
Plugin URI: http://www.rico-weigand.tk
Description: Cursor for Wordpress.
Version: 1.0.0
Author: Rico Weigand
Author URI: http://rico-weigand.tk
License: Free
*/

define('CURSOR_VERSION', '1.0.0');

$images_url = plugins_url(basename(dirname(__FILE__)) . '/img/');
$css_url = plugins_url(basename(dirname(__FILE__)) . '/css/cursor-for-wordpress.css');

/**
 * CSS in Wordpress einbinden
 */
wp_register_style('cursor-for-wordpress', $css_url, array(), CSSCURSOR_VERSION, 'screen');
wp_enqueue_style('cursor-for-wordpress');
?>
