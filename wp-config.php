<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 * @package WordPress
 */

$envs = array(
  'local' => 'http://cc.dev/',
  'development' => 'http://cc.codelight.eu/',
  'staging'     => 'http://cc-dev2.dhawal.me/blog/',
  'production'  => 'http://class-central.com/blog/'
);
define('ENVIRONMENTS', serialize($envs));

define('PARENT_DOMAIN','https://www.class-central.com');

/**
 * Site-specific information such as secret keys, database access, etc
 * Should be kept out of public_html
 */
require_once(dirname(__FILE__) . '/../wp-config-local.php');

/**
 * Debug options
 */
if (WP_ENV == 'development' || WP_ENV == 'staging' || WP_ENV == 'local') {
    // Do not display errors, but log them in debug.log
    define( 'WP_DEBUG', true );
    define( 'WP_DEBUG_LOG', true );
    define( 'WP_DEBUG_DISPLAY', true );
    define( 'SAVEQUERIES', true );
    @ini_set( 'display_errors', 0 );
} else {
    // Do not display or log errors
    define( 'WP_DEBUG', false );
    define( 'WP_DEBUG_LOG', false );
    define( 'SAVEQUERIES', false );
}

/** Disable plugin and theme updating from inside WP **/
define('DISALLOW_FILE_MODS', true);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
