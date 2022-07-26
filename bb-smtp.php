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

// Creating class for the plugin all settings.
class BBSmtp {

    function __construct() {
        require_once 'inc/Enqueue.php';
        require_once 'inc/ActionLinks.php';
        require_once 'inc/MenuPages.php';
        require_once 'inc/AddSettings.php';
    }

    function register() {
        add_action( 'admin_enqueue_scripts', array( 'Enqueue', 'enqueue' ) );
        add_filter( 'plugin_action_links_' . PLUGIN, array( 'ActionLinks', 'action_links' ) );
        add_action( 'admin_menu', array( 'MenuPages', 'add_menu_pages' ) );
        add_action( 'admin_init', array( 'AddSettings', 'add_settings' ) );
    }  

}
$bbSmtp = new BBSmtp();
$bbSmtp->register();