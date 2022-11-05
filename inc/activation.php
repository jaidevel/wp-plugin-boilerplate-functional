<?php
/**
 * Plugin Activation and Deactivation.
 **/

namespace Package_name;

defined( 'ABSPATH' ) || exit;

function activate() {
	write_log('Activated');
}

function deactivate() {
	write_log('Deactivated');
}

