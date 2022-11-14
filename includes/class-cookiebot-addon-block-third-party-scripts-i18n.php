<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://rootagency.be/
 * @since      1.0.0
 *
 * @package    Cookiebot_Addon_Block_Third_Party_Scripts
 * @subpackage Cookiebot_Addon_Block_Third_Party_Scripts/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cookiebot_Addon_Block_Third_Party_Scripts
 * @subpackage Cookiebot_Addon_Block_Third_Party_Scripts/includes
 * @author     Root Agency <development@rootagency.be>
 */
class Cookiebot_Addon_Block_Third_Party_Scripts_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cookiebot-addon-block-third-party-scripts',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
