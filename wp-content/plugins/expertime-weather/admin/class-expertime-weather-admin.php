<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://profiles.wordpress.org/tbenmoussa
 * @since      1.0.0
 *
 * @package    Expertime_Weather
 * @subpackage Expertime_Weather/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Expertime_Weather
 * @subpackage Expertime_Weather/admin
 * @author     Théo Benmoussa <theo.benmoussa@epitech.eu>
 */
class Expertime_Weather_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Expertime_Weather_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Expertime_Weather_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/expertime-weather-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( "bootstrap.min.css", plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Expertime_Weather_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Expertime_Weather_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/expertime-weather-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( "bootstrap.min.js", plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );

	}

    public function owt_menus_sections() {

        add_menu_page("Meteo", "Meteo", "manage_options", "my_weather", array($this, "my_weather"), "dashicons-admin-site", 30);
        add_submenu_page("my_weather", "configuration", "configuration", "manage_options", "owt_submenus",array($this, "owt_submenus"));
    }

    /**
     * @return string
     */
    public function my_weather()
    {
        include_once OWT_BOILER_PLAGIN_DIR.'/admin/partials/owt-menu-meteo.php';
    }

    public function owt_submenus()
    {
        include_once OWT_BOILER_PLAGIN_DIR.'/admin/partials/owt-menu-configuration.php';
    }

}
