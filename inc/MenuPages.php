<?php
/**
 * @package BBSmtp
 */

class MenuPages {

    
    public static function add_menu_pages() {
        add_menu_page( 'BB SMTP', 'BB SMTP', 'manage_options', 'bb_smtp', array( 'MenuPages', 'main_page_html' ), 'dashicons-store', 110 );
        add_submenu_page( 'bb_smtp', 'Dashboard', 'Dashboard', 'manage_options', 'bb_smtp', '' );
        add_submenu_page( 'bb_smtp', 'Settings', 'Settings', 'manage_options', 'bb_smtp_settings', array( 'MenuPages', 'settings_html' ) );
    }
        
    public static function main_page_html() {
        require_once PLUGIN_PATH . 'templates/admin.php';
    }
        
    public static function settings_html() {
        require_once PLUGIN_PATH . 'templates/settings.php';
    }
}