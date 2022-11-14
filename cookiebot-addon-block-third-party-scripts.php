<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://rootagency.be/
 * @since             1.0.0
 * @package           Cookiebot_Addon_Block_Third_Party_Scripts
 *
 * @wordpress-plugin
 * Plugin Name:       CookieBot Add-on - Block third party scripts until consent is given
 * Plugin URI:        https://rootagency.be/en/plugins/cookiebot-addon-block-third-party-scripts
 * Description:       A lightweight plugin that serves as an add-on to CookieBot to comply with EU Privacy Laws. Giving users the choice which cookies they accept is required by law. But did you know that connecting to third parties via scripts also requires consent from the users end. With this plugin you can manage which scripts, e.g. Google Maps, Google Analytics, tracking pixels, ... , can run in a users browser based on their Consent Status set by CookieBot.
 * Version:           1.0.0
 * Author:            Root Agency
 * Author URI:        https://rootagency.be/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cookiebot-addon-block-third-party-scripts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'COOKIEBOT_ADDON_BLOCK_THIRD_PARTY_SCRIPTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cookiebot-addon-block-third-party-scripts-activator.php
 */
function activate_cookiebot_addon_block_third_party_scripts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cookiebot-addon-block-third-party-scripts-activator.php';
	Cookiebot_Addon_Block_Third_Party_Scripts_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cookiebot-addon-block-third-party-scripts-deactivator.php
 */
function deactivate_cookiebot_addon_block_third_party_scripts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cookiebot-addon-block-third-party-scripts-deactivator.php';
	Cookiebot_Addon_Block_Third_Party_Scripts_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cookiebot_addon_block_third_party_scripts' );
register_deactivation_hook( __FILE__, 'deactivate_cookiebot_addon_block_third_party_scripts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cookiebot-addon-block-third-party-scripts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cookiebot_addon_block_third_party_scripts() {

	$plugin = new Cookiebot_Addon_Block_Third_Party_Scripts();
	$plugin->run();

}
run_cookiebot_addon_block_third_party_scripts();
