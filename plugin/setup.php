<?php

    // Database setup
    function setup_nitro_tables() {
        global $wpdb;
        $table_name = $wpdb->prefix . "nitro_payments";
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
              id mediumint(9) NOT NULL AUTO_INCREMENT,
              nitro_id INTEGER NOT NULL,
              created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
              UNIQUE KEY id (id)
            ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }

    register_activation_hook( __FILE__, 'setup_nitro_tables' );

?>