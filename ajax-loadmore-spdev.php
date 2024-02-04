<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://spdeveloper.com
 * @since             1.0.0
 * @package           Ajax_Loadmore_Spdev
 *
 * @wordpress-plugin
 * Plugin Name:       AJAX Load more by SPDEV
 * Plugin URI:        https://spdeveloper.com
 * Description:       This is Description
 * Version:           1.0.0
 * Author:            SP Developer
 * Author URI:        https://spdeveloper.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ajax-loadmore-spdev
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
define( 'AJAX_LOADMORE_SPDEV_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ajax-loadmore-spdev-activator.php
 */
function activate_ajax_loadmore_spdev() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ajax-loadmore-spdev-activator.php';
	Ajax_Loadmore_Spdev_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ajax-loadmore-spdev-deactivator.php
 */
function deactivate_ajax_loadmore_spdev() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ajax-loadmore-spdev-deactivator.php';
	Ajax_Loadmore_Spdev_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ajax_loadmore_spdev' );
register_deactivation_hook( __FILE__, 'deactivate_ajax_loadmore_spdev' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ajax-loadmore-spdev.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ajax_loadmore_spdev() {

	$plugin = new Ajax_Loadmore_Spdev();
	$plugin->run();

}
run_ajax_loadmore_spdev();
