<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://github.com/sazzadhossain1623
 * @since      1.0.0
 *
 * @package    Photo_Arcade
 * @subpackage Photo_Arcade/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Photo_Arcade
 * @subpackage Photo_Arcade/includes
 * @author     Sazzad Hossain <sazzadhossain1623@gmail.com>
 */
class Photo_Arcade_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'photo-arcade',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
