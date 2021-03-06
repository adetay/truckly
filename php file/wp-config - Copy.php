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
define('DB_NAME', 'waaw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'pqW.tcLW4?^}^Q)BGmz>V`7O]TRK}UK(7uH;JF<XM:V@j*dR`u9vEb:<;5~NU<8I');
define('SECURE_AUTH_KEY',  'e7/fSb[u;^5T91u2%/x47eEh8kiJ-In~.Sw*nOm>wU$6S#)`ZGWM)[:dnFEB2OP/');
define('LOGGED_IN_KEY',    '`[<n%;Mf^%YIW!!{>i|C55$C}+i?c=o<N~~QOawU<:Ac)!xnQE~67|W ^5MY}:fb');
define('NONCE_KEY',        'CAw::$[{YU!N%;!`,7Pv:<vbb]_%Xj=Jf#@^aDjFF|gSZIU2YiZxUQUY<qVv*79b');
define('AUTH_SALT',        'sh3k.Or. X tEf|JTq+-nXRoKHG7tyJ,UE52/vZ?q4!STy,A1~a*JiGXtIo00zxg');
define('SECURE_AUTH_SALT', 'L)q=i0]ykVH?8r{oXI]$71H3Wp#RW;ugOszFeBp xd3nnIf>hFtVmbFQ#XvPS6iz');
define('LOGGED_IN_SALT',   '[%QNtN)^jN$IAVxh}}Q=.p*33TuMjh yTkUSY04@jx+cEK>r=XKhZ-9j2P6#aXO`');
define('NONCE_SALT',       'Cfs_[,$`?s+2N`FxB+qw4!I9N1`x?uaWU~|iuis,9j=&*<ty~es}Vr<#R;7|(ehY');

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
