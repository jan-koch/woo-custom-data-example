<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wpmastery.xyz
 * @since      1.0.0
 *
 * @package    Woo_Custom_Data_Example
 * @subpackage Woo_Custom_Data_Example/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woo_Custom_Data_Example
 * @subpackage Woo_Custom_Data_Example/includes
 * @author     Jan Koch <jan@wpmastery.xyz>
 */
class Woo_Custom_Data_Example_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woo-custom-data-example',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
