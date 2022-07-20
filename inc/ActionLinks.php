<?php
/**
 * @package BBSmtp
 */

class ActionLinks {

    public static function action_links( $links ) {
        $settings_link = '<a href="admin.php?page=bb_smtp">Settings</a>';
        array_push( $links, $settings_link );
        return $links;
    }
    
}