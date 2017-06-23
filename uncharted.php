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
	?>
		<style>
            .wp_head_example {
                background-color : #f1f1f1;
            }
        </style>
	<?php
}, 1);
