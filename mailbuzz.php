<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.mailbuzz.io/
 * @since             1.0.0
 * @package           Mailbuzz
 *
 * @wordpress-plugin
 * Plugin Name:       Mailbuzz 
 * Plugin URI:        https://mailbuzz.io/wordpress
 * Description:       Automate your email marketing.
 * Version:           1.0.0
 * Author:            jamesstanley
 * Author URI:        https://www.mailbuzz.io/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mailbuzz
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Current plugin path.
 * Current plugin url.
 * Current plugin version.
 *
 * Rename these constants for your plugin
 * Update version as you release new versions.
 */

define('MAILBUZZ_PATH', plugin_dir_path(__FILE__));
define('MAILBUZZ_URL', plugin_dir_url(__FILE__));
define('MAILBUZZ_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mailbuzz-activator.php
 */
function activate_mailbuzz()
{
	require_once MAILBUZZ_PATH . 'includes/class-mailbuzz-activator.php';
	Mailbuzz_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mailbuzz-deactivator.php
 */
function deactivate_mailbuzz()
{
	require_once MAILBUZZ_PATH . 'includes/class-mailbuzz-deactivator.php';
	Mailbuzz_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_mailbuzz');
register_deactivation_hook(__FILE__, 'deactivate_mailbuzz');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require MAILBUZZ_PATH . 'includes/class-mailbuzz.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mailbuzz()
{
	$plugin = new Mailbuzz();
	$plugin->run();
}
run_mailbuzz();