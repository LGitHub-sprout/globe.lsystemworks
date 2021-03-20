<?php
ob_start(); // Output buffering on.

define( "PRIVATE_PATH", dirname(__FILE__) );
define( "PROJECT_PATH", dirname( PRIVATE_PATH ) );
define( "PUBLIC_PATH", PROJECT_PATH . '/public' );
define( "SHARED_PATH", PRIVATE_PATH . '/shared' );

// echo "<p>PRIVATE_PATH: " . PRIVATE_PATH . "</p>";
// echo "<p>PROJECT_PATH: " . PROJECT_PATH . "</p>";
// echo "<p>SHARED_PATH: " . SHARED_PATH . "</p>";
// echo "<p>PUBLIC_PATH: " . PUBLIC_PATH . "</p>";

/**
 * Get the 'public' directory dynamically for all links, save in WWW_ROOT.
 *
 * @since 0.1
 *
 * @package Globe Bank
 *
 * Is it possible to get string btwn both '/' in case dir name/length changes?
 *
 * substr(STRING $string, INT $offset, INT/NULL $length = null)
 *
 * todo: change $public to $public_dir
 */
$public = substr( $_SERVER[ 'SCRIPT_NAME' ], 0, 7 );
define( "WWW_ROOT", $public );

require_once('functions.php');