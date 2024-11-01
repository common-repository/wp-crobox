<?php

/**
 * Crobox WP plugin
 *
 * @link              http://neshable.com
 * @since             1.0.0
 * @package           Wp_Crobox
 *
 * @wordpress-plugin
 * Plugin Name:       CroBox
 * Plugin URI:        http://neshable.com
 * Description:       Smart and customizable pop-up box for WordPress. 
 * Version:           1.0.0
 * Author:            Nesho Sabakov
 * Author URI:        http://neshable.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-crobox
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-crobox-activator.php
 */
function activate_wp_crobox() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-crobox-activator.php';
	Wp_Crobox_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-crobox-deactivator.php
 */
function deactivate_wp_crobox() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-crobox-deactivator.php';
	Wp_Crobox_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_crobox' );
register_deactivation_hook( __FILE__, 'deactivate_wp_crobox' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-crobox.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_crobox() {

	$plugin = new Wp_Crobox();
	$plugin->run();

}
run_wp_crobox();
