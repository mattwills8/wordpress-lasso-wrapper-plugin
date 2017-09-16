<?php

/**
 *
 * @link              https://github.com/mattwills8
 * @since             1.0.0
 * @package           Lasso_Wrapper
 *
 * @wordpress-plugin
 * Plugin Name:       Lasso Wrapper
 * Plugin URI:        https://github.com/mattwills8
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Matt Wills
 * Author URI:        https://github.com/mattwills8
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lasso-wrapper
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_VERSION', '1.0.0' );


function activate_lasso_wrapper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lasso-wrapper-activator.php';
	Lasso_Wrapper_Activator::activate();
}

function deactivate_lasso_wrapper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lasso-wrapper-deactivator.php';
	Lasso_Wrapper_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lasso_wrapper' );
register_deactivation_hook( __FILE__, 'deactivate_lasso_wrapper' );


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-lasso-wrapper.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 */
function run_lasso_wrapper() {

	$plugin = new Lasso_Wrapper();
	$plugin->run();

}
run_lasso_wrapper();
