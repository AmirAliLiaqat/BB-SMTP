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
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
        add_filter( 'plugin_action_links_' . PLUGIN, array( $this, 'action_links' ) );
    }

    function enqueue() {
        wp_enqueue_style( 'bb-smtp-style', PLUGIN_URL . 'assets/css/style.css' );
        wp_enqueue_script( 'bb-smtp-script', PLUGIN_URL . 'assets/js/script.js' );
    }
    
    function action_links( $links ) {
        $settings_link = '<a href="admin.php?bb_smtp">Settings</a>';
        array_push( $links, $settings_link );
        return $links;
    }

}
$bbSmtp = new BBSmtp();