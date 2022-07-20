<?php
/**
 * @package BBSmtp
 */

class Enqueue {

    public static function enqueue() {
        wp_enqueue_style( 'bb-smtp-style', PLUGIN_URL . 'assets/css/style.css' );

        wp_enqueue_script( 'bb-smtp-script', PLUGIN_URL . 'assets/js/script.js' );
    }
    
}