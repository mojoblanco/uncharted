<?php
/*
Plugin Name: Uncharted
Description: Hide unpublish pages from google robots
Version:     1.0
Author:      John 'mojoblanco' Olawale
Author URI:  https://developer.wordpress.org/
License:     MIT
*/


// Block direct file access
if( ! defined( 'ABSPATH' ) ) {
	die();
}

add_action('wp_head', function() {
	$status = get_post_status();

	if ($status != 'publish') {
		echo '<meta name="robots" content="noindex,nofollow">';
		echo '<meta name="googlebot" content="noindex,nofollow">';
	}
}, 1);
