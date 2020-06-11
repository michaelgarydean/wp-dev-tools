<?php
/**
 * Plugin Name:     WP Dev Tools
 * Plugin URI:      https://github.com/mykedean/wp-dev-tools.git
 * Description:     Functions and code to help while developing Wordpress plugins and themes
 * Author:          Michael Gary Dean
 * Author URI:      https://github.com/mykedean
 * Text Domain:     wp-dev-tools
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wp_Dev_Tools
 */


/*
 * Print to the JS console to debug PHP.
 * 
 * ex. debug_to_console(get_stylesheet_uri());
 * @see 		https://stackoverflow.com/questions/4323411/how-can-i-write-to-the-console-in-php
 * 
 * @param 		$data 	Any PHP data to be printed to console.
 * @returns 	void
 */
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}