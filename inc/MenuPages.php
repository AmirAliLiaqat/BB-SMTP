<?php
/**
 * @package BBSmtp
 */

class MenuPages {

    
    public static function add_menu_pages() {
        add_menu_page( 'BB SMTP', 'BB SMTP', 'manage_options', 'bb_smtp', array( 'MenuPages', 'main_page_html' ), 'dashicons-store', 110 );
    }
        
    public static function main_page_html() {
        require_once PLUGIN_PATH . 'templates/admin.php';
    }
}