<?php
/**
 * @package BBSmtp
 */

class Enqueue {

    public static function enqueue() {
        wp_enqueue_style( 'bb-smtp-style', PLUGIN_URL . 'assets/css/style.css' );
        wp_enqueue_style( 'bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );

        wp_enqueue_script( 'bb-smtp-script', PLUGIN_URL . 'assets/js/script.js' );
        wp_enqueue_script( 'bbootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js' );
        wp_enqueue_script( 'bbootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js' );
        wp_enqueue_script( 'bbootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' );
    }
    
}