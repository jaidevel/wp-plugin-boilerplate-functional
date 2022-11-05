<?php
/**
 * Hepler functions etc.
 **/

namespace Package_name;

defined( 'ABSPATH' ) || exit;

/**
 * Helper debug function Writes output to wp-content/debug.log file
 *
 * @return void
 **/
function write_log ( $log )  {
	if ( true === WP_DEBUG ) {
		if ( is_array( $log ) || is_object( $log ) ) {
			error_log( print_r( $log, true ) );
		} else {
			error_log( $log );
		}
	}
}

/**
 * Returns the type of request
 *
 * @param  string $type admin, ajax, cron or frontend.
 * @return bool
 */
function is_request( $type ) {
	switch ( $type ) {
		case 'admin':
			return is_admin();
		case 'ajax':
			return defined( 'DOING_AJAX' );
		case 'cron':
			return defined( 'DOING_CRON' );
		case 'frontend':
			return ( ! is_admin() || defined( 'DOING_AJAX' ) ) && ! defined( 'DOING_CRON' ) && ! defined( 'REST_REQUEST' );
	}
}
