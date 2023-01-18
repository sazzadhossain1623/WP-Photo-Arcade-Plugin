<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/sazzadhossain1623
 * @since             1.0.0
 * @package           Photo_Arcade
 *
 * @wordpress-plugin
 * Plugin Name:       Photo Arcade
 * Plugin URI:        https://github.com/sazzadhossain1623
 * Description:       Photo Arcade is a fully responsive gallery plugin with advanced functionality. It allows having different photo galleries for your posts and pages. You can create unlimited number of galleries, combine them into albums, and provide descriptions and tags.
 * Version:           1.0.0
 * Author:            Sazzad Hossain
 * Author URI:        https://github.com/sazzadhossain1623
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       photo-arcade
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
define( 'PHOTO_ARCADE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-photo-arcade-activator.php
 */
function activate_photo_arcade() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-photo-arcade-activator.php';
	Photo_Arcade_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-photo-arcade-deactivator.php
 */
function deactivate_photo_arcade() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-photo-arcade-deactivator.php';
	Photo_Arcade_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_photo_arcade' );
register_deactivation_hook( __FILE__, 'deactivate_photo_arcade' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-photo-arcade.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_photo_arcade() {

	$plugin = new Photo_Arcade();
	$plugin->run();

}
run_photo_arcade();
