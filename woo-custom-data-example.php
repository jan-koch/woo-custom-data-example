<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpmastery.xyz
 * @since             1.0.0
 * @package           Woo_Custom_Data_Example
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Custom Data Example
 * Plugin URI:        https://wpmastery.xyz/plugins/woo-custom-data-example
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Jan Koch
 * Author URI:        https://wpmastery.xyz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woo-custom-data-example
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woo-custom-data-example-activator.php
 */
function activate_woo_custom_data_example() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-custom-data-example-activator.php';
	Woo_Custom_Data_Example_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woo-custom-data-example-deactivator.php
 */
function deactivate_woo_custom_data_example() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-custom-data-example-deactivator.php';
	Woo_Custom_Data_Example_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woo_custom_data_example' );
register_deactivation_hook( __FILE__, 'deactivate_woo_custom_data_example' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woo-custom-data-example.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woo_custom_data_example() {

	$plugin = new Woo_Custom_Data_Example();
	$plugin->run();

}
run_woo_custom_data_example();
