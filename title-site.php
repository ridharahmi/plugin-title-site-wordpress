<?php

/*
 * Plugin Name: Title Site
 * Plugin URI: http://www.atec.tn
 * Description: Plugin return title page site
 * Version: 1.0
 * Author: Ridha Rahmi
 * Author URI: http://www.facebook.com/ridha411
 * License: GPL2
 * */

/*
 * Update Title Page Site
 * */
function update_title_page($title) {
	return $title . ' - Ridha Rahmi ';
}

add_filter('wp_title', 'update_title_page', 20);
