<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that its ready for translation.
 *
 * @link       http://purecharity.com
 * @since      1.0.0
 *
 * @package    Purecharity_Wp_Trips
 * @subpackage Purecharity_Wp_Trips/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that its ready for translation.
 *
 * @since      1.0.0
 * @package    Purecharity_Wp_Trips
 * @subpackage Purecharity_Wp_Trips/includes
 * @author     Pure Charity <dev@purecharity.com>
 */
class Purecharity_Wp_Trips_i18n {

	/**
	 * The domain specified for this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $domain    The domain identifier for this plugin.
	 */
	private $domain;

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			$this->domain,
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

	/**
	 * Set the domain equal to that of the specified domain.
	 *
	 * @since    1.0.0
	 * @param    string    $domain    The domain that represents the locale of this plugin.
	 */
	public function set_domain( $domain ) {
		$this->domain = $domain;
	}

}
