<?php
/**
 * @package BBSmtp
 */

class AddSettings {

    
    public static function add_settings() {

        add_settings_section( 'bb_smtp_main_section', 'Manage All Settings', function () {
            echo 'Sending mail form localhost to gmail just one time putting data in given text fields';
        },'bb_smtp_main_settings' );

        add_settings_field( 'bb_user_email', 'Email', array( 'AddSettings', 'bb_user_email_html' ), 'bb_smtp_main_settings', 'bb_smtp_main_section' );
        register_setting( 'bb_smtp_main_settings', 'user_email' );

        add_settings_field( 'bb_user_name', 'Username', array( 'AddSettings', 'bb_user_name_html' ), 'bb_smtp_main_settings', 'bb_smtp_main_section' );
        register_setting( 'bb_smtp_main_settings', 'user_name' );

        add_settings_field( 'bb_client_id', 'Client ID', array( 'AddSettings', 'bb_client_id_html' ), 'bb_smtp_main_settings', 'bb_smtp_main_section' );
        register_setting( 'bb_smtp_main_settings', 'client_id' );

        add_settings_field( 'bb_client_secret', 'Client Secret', array( 'AddSettings', 'bb_client_secret_html' ), 'bb_smtp_main_settings', 'bb_smtp_main_section' );
        register_setting( 'bb_smtp_main_settings', 'client_secret' );
    }

    public static function bb_user_email_html() { 
        $email = get_option( 'user_email' );
    ?>
        <input type="text" name="user_email" value="<?php echo $email; ?>">
    <?php }

    public static function bb_user_name_html() { 
        $name = get_option( 'user_name' );
    ?>
        <input type="text" name="user_name" value="<?php echo $name; ?>">
    <?php }

    public static function bb_client_id_html() { 
        $clientID = get_option( 'client_id' );
    ?>
        <input type="text" name="client_id" value="<?php echo $clientID; ?>">
    <?php }

    public static function bb_client_secret_html() { 
        $clientSecret = get_option( 'client_secret' );
    ?>
        <input type="text" name="client_secret" value="<?php echo $clientSecret; ?>">
    <?php }
}