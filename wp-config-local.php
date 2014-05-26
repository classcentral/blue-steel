<?php

define('WP_ENV', 'staging');

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', '{{DB_NAME}}');

/** MySQL database username */
define('DB_USER', '{{DB_USER}}');

/** MySQL database password */
define('DB_PASSWORD', 'araccooncame');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 */
define('AUTH_KEY',         'z7~T(t[|+*%cLcbwM,HQhLgXR7R3xelZL3y_7!icr+HbBFMkPgkSdHX7E<6SL<D4');
define('SECURE_AUTH_KEY',  '%yNfOX{bjo3wNNe7YyJin8Wm~vyR)}0P/h~un|5R<rx-[N=O8qt{-N2{PX#=pa&U');
define('LOGGED_IN_KEY',    'Hz9I.afaj1vB-6gXEx(0T+y+/IWl[4vTxkbRF`]nKO2{YlBHA4<*fI0C51w>MWhQ');
define('NONCE_KEY',        '&dG--;_{0%-*kGeA!ej<iNEzE|s{|%-cg76w !jO}^-?0q|:[{Gua(`w@_;jD*[0');
define('AUTH_SALT',        '&X$mmz)rh5<9xFidtw+6H+D5lbud+oD21Brcj5T={m?wkGK&b}w%!}#-0-!#fzug');
define('SECURE_AUTH_SALT', 'Xc!P=v+o+#tmE.-ZTk+sq@px7W$LzjGK{n]|v1>kN~F!f>+Q?FRt]&fOC<[BY8eT');
define('LOGGED_IN_SALT',   '?(-_/ru)&Wz~a(? aJ*I|19k-3XJm5AP4SI+b)E3aslP<OF9YE#m8]TcN|>>X];L');
define('NONCE_SALT',       '+)peH/+#8QpqguhkTW{o2C`clpup*dCd~XNZ|bb7d.uxib^Y/h$keI:A~zm*>tq+');
/**#@-*/

/** Redefine URL and path constants to match installation with composer **/
define( 'WP_HOME', 'http://{{DOMAIN}}.codelight.eu/' );
define( 'WP_SITEURL', 'http://{{DOMAIN}}.codelight.eu/{{WP_DIR}}' );
define( 'WP_CONTENT_DIR', '/srv/{{DOMAIN}}/public_html/{{WP_CONTENT_DIR}}' );
define( 'WP_CONTENT_URL', 'http://{{DOMAIN}}.codelight.eu/{{WP_CONTENT_DIR}}' );

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '{{WP_DIR}}');