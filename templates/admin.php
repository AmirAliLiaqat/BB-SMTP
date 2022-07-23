<div class="wrap">
    <h1 class="main-heading">Dashboard</h1>
    <?php settings_errors(); ?>
    <div class="wrap-content">
        <form action="options.php" method="post">
            <?php 
                settings_fields( 'bb_smtp_main_settings' );
                do_settings_sections( 'bb_smtp_main_settings' );
                submit_button();
            ?>
        </form>
    </div><!--wrap-content-->
</div>
