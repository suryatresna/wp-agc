<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://geekdisq.co
 * @since             1.0.0
 * @package           Agc
 *
 * @wordpress-plugin
 * Plugin Name:       Auto Generate Content
 * Plugin URI:        http://geekdisq.co/app/wordpress/agc
 * Description:       it will make your easy create content automatically with using rss-feed some website.
 * Version:           1.0.0
 * Author:            Surya Tresna Agung
 * Author URI:        http://geekdisq.co
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       agc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-agc-activator.php
 */
function activate_agc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-agc-activator.php';
	Agc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-agc-deactivator.php
 */
function deactivate_agc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-agc-deactivator.php';
	Agc_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_agc' );
register_deactivation_hook( __FILE__, 'deactivate_agc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-agc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_agc() {

	$plugin = new Agc();
	$plugin->run();

}
run_agc();
