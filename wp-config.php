<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'web-brochure');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{DAlcu>572/._b3v!~obm{-^V!R%*jQS9I^;+&kPWoJ$+WRd<01b4#c45R<H9EWs');
define('SECURE_AUTH_KEY',  '8T=]|oi6~76jo2^FFWR%dTZ{?fnKzn[6O5lGhQH&,1wJtNnRBY/![K#%j,f)noQI');
define('LOGGED_IN_KEY',    'h.j?UigAv-Y-naU9_,$2yH4L/!Oy/]6A|uA8Ub53s_DN$7DP0xtiB06#RfK.%%>q');
define('NONCE_KEY',        '+6H9Qx2r2k0}t2Vt?8$c.kX}S#1-EKqRf]vv1Vdt]z-mE^CYb,?>%%%m &cR<k_|');
define('AUTH_SALT',        'vdGDO3d*Ifo2T:RvcF,i;n;rE8z(%Hxs:JaKcYRU,?>]?9Nu-|fbygY_-hBb[;Ev');
define('SECURE_AUTH_SALT', '%P5P+[3(*vpvtmK{-Z/;gO8ScErwY7R?%u[4X{_gmV]m)EqZ|imM[h`IvjFKjhc_');
define('LOGGED_IN_SALT',   '@}>!wQl,e){4&0hS@4`|/!>mTD]4:?nZ2Bj8-zHN!Be&GhW+yn7:}m#^=YYNz:q%');
define('NONCE_SALT',       '-gVJ.&u@*Z!&YF7Tdou-@b(&qA:iuwTyVv}]?VUJjq0,^G=/]@ibv}F|9}tS/(Y5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
