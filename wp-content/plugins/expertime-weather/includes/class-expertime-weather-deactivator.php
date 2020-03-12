<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://profiles.wordpress.org/tbenmoussa
 * @since      1.0.0
 *
 * @package    Expertime_Weather
 * @subpackage Expertime_Weather/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Expertime_Weather
 * @subpackage Expertime_Weather/includes
 * @author     Théo Benmoussa <theo.benmoussa@epitech.eu>
 */
class Expertime_Weather_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        global $wpdb;
        $wpdb->query("Drop table IF EXISTS ");
	}

}
