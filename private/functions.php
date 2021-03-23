<?php
/**
 * Error reporting.
 *
 * Display and log errors:
 * MAMP Pro:	Server > PHP > Error Handling
 * 						Check "All errors and warnings" box under "Write"
 *						Check "Display" box under "To"
 *						Overrides functions below I believe bc it sets php.ini.
 *						Toggles 'display_errors' field in php_info.php "On/Off"
 *
 * @link: https://stackify.com/display-php-errors/
 * @link: https://www.php.net/manual/en/ini.list.php
 *
 * ini_set tries to override php.ini file (no workie for me)
 *
 * error_reporting( E_ALL | E_STRICT );
 *
 * ini_set( 'error_reporting', E_ALL );
 * ini_set( 'display_errors', '1' );
 * ini_set( 'log_errors', '1' );
 * ini_set( 'display_errors', true );
 * ini_set( 'error_log', '/private/errors.log' );
 * display_errors = 'On';
 */

/**
 * Test redirect: page.php?=redirect
 *
 * $test = isset ( $_GET[ 'test' ] ) ? $_GET[ 'test' ] : '';
 * if ( $test == 'redirect' ) {
 * redirect_to( url_for( '/staff/subjects/index.php' ) );
 * }
 */

// Prefix $script_path with a '/' if none provided.
if ( ! function_exists( 'url_for' ) ) {
	function url_for( $script_path ) {
		if ( $script_path[0] != "/" ) {
			// Remember that '/' goes BEFORE path
			$script_path = '/' . $script_path;
		}
		return WWW_ROOT . $script_path;
	}
}

/**
 * Wrapper for htmlspecialchars()
 *
 * @since 0.1
 *
 * @package Globe Bank
 *
 * @todo: Research difference btwn setting $var to empty string and just passing. I can't discern any difference.
 */
function h( $html_string = "" ) {
	return htmlspecialchars( $html_string );
}
function u( $url_string = "" ) {
	return urlencode( $url_string );
}

// Redirect
function redirect_to( $location ) {
	header( "Location: " . $location );
	exit;
}

// Return true if POST request to use as condition
function request_is_post() {
	return $_SERVER[ 'REQUEST_METHOD' ] == 'POST';
}
// Return true if GET request to use as condition
function request_is_get() {
	return $_SERVER[ 'REQUEST_METHOD' ] == 'GET';
}










































