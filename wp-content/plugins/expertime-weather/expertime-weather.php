<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://profiles.wordpress.org/tbenmoussa
 * @since             1.0.0
 * @package           Expertime_Weather
 *
 * @wordpress-plugin
 * Plugin Name:       Expertime Weather
 * Plugin URI:        http://expertime-weather.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Théo Benmoussa
 * Author URI:        http://profiles.wordpress.org/tbenmoussa
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       expertime-weather
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if (!define("OWT_BOILER_PLAGIN_DIR"))
    define("OWT_BOILER_PLAGIN_DIR",plugin_dir_path(__FILE__));
if (!define("OWT_BOILER_PLAGIN_URL"))
    define("OWT_BOILER_PLAGIN_URL",plugins_url()."/expertime-weather");

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EXPERTIME_WEATHER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-expertime-weather-activator.php
 */
function activate_expertime_weather() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-expertime-weather-activator.php';
	Expertime_Weather_Activator::activate();
}


/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-expertime-weather-deactivator.php
 */
function deactivate_expertime_weather() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-expertime-weather-deactivator.php';
	Expertime_Weather_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_expertime_weather' );
register_deactivation_hook( __FILE__, 'deactivate_expertime_weather' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-expertime-weather.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_expertime_weather() {

	$plugin = new Expertime_Weather();
	$plugin->run();

}
run_expertime_weather();
