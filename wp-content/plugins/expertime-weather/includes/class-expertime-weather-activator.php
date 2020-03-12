<?php

/**
 * Fired during plugin activation
 *
 * @link       http://profiles.wordpress.org/tbenmoussa
 * @since      1.0.0
 *
 * @package    Expertime_Weather
 * @subpackage Expertime_Weather/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Expertime_Weather
 * @subpackage Expertime_Weather/includes
 * @author     Théo Benmoussa <theo.benmoussa@epitech.eu>
 */
class Expertime_Weather_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
    static function activate() {


        global $wpdb;
        $table_name = 'abctable';
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
          id mediumint(9) NOT NULL AUTO_INCREMENT,
          time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
          name tinytext NOT NULL,
          text text NOT NULL,
          url varchar(55) DEFAULT '' NOT NULL,
          PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );



    }

}


register_activation_hook( __FILE__,array( 'Horse_Exchange_Activator', 'activate' )  );