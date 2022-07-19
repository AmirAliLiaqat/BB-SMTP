<?php
/**
 * Plugin Name: BB SMTP
 * Plugin URI:  https://amir.bytebunch.com/plugins
 * Author:      Byte Ki Duniya
 * Author URI:  https://amir.bytebunch.com
 * Version:     1.0.0
 * Description: BB Smpt plugin is basically designed for sending mails from localhost to gmail through smtp.gmail.com
 * License:     GPL v2 or Later
*/

// Define condition to stop the direct access of file.
if( !defined( 'ABSPATH' ) ) {
    die();
}

// Define constant for plugin url
if( !defined( 'PLUGIN_PATH' ) ) {
    define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

// Define constant for plugin path
if( !defined( 'PLUGIN_URL' ) ) {
    define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

// Define constant for plugin basename
if( !defined( 'PLUGIN' ) ) {
    define( 'PLUGIN', plugin_basename( __FILE__ ) );
}