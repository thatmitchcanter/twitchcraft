<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mitchcanter.me
 * @since             1.0.0
 * @package           Twitchcraft
 *
 * @wordpress-plugin
 * Plugin Name:       Twitchcraft
 * Plugin URI:        https://github.com/thatmitchcanter/twitchcraft
 * Description:       Gutenberg Compatible Interface with the Twtich API
 * Version:           1.0.0
 * Author:            Mitch Canter
 * Author URI:        https://mitchcanter.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       twitchcraft
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
define( 'TWITCHCRAFT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-twitchcraft-activator.php
 */
function activate_twitchcraft() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-twitchcraft-activator.php';
	Twitchcraft_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-twitchcraft-deactivator.php
 */
function deactivate_twitchcraft() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-twitchcraft-deactivator.php';
	Twitchcraft_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_twitchcraft' );
register_deactivation_hook( __FILE__, 'deactivate_twitchcraft' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-twitchcraft.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_twitchcraft() {

	$plugin = new Twitchcraft();
	$plugin->run();

}
run_twitchcraft();
