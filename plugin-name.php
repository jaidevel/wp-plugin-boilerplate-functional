<?php
/**
 * WP Plugin Boilerplate Functional
 *
 * @package           Package_name
 * @author            Author_name
 * @copyright         Copyright
 * @license           GPL-2.0-or-later
 *
 * Plugin Name:       WP Plugin Boilerplate Functional
 * Plugin URI:        https://yourdomain.com
 * Description:
 * Version:           0.0.1
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Author_name
 * Author URI:        https://yourdomain.com/author
 * Text Domain:       boilerplate
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Plugin Prefix:     PLUGINPREFIX
 **/

namespace Package_name;

defined( 'ABSPATH' ) || exit;

// CONSTANTS
define( 'PLUGINPREFIX_VERSION', '0.0.1' );
define( 'PLUGINPREFIX_ABSPATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGINPREFIX_FILE', __FILE__ );
define( 'PLUGINPREFIX_BASENAME', plugin_basename( PLUGINPREFIX_FILE ) );
define( 'PLUGINPREFIX_URI', untrailingslashit( plugins_url( '/', PLUGINPREFIX_FILE ) ) );

// INCLUDES
require_once 'inc/extras.php';
require_once 'inc/activation.php';

// ACTIVATION
\register_activation_hook( __FILE__, __NAMESPACE__ . '\activate' );
\register_deactivation_hook( __FILE__, __NAMESPACE__ . '\deactivate' );

// HOOKS
if ( is_request( 'admin' ) ) {
	require_once 'inc/admin.php';
}
