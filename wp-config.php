<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'look' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YQx%KvQYOtp3tH@=<RvVLZ6LBvCQW+sW@j?#Z<tESX|PKIeTY-,7_S.-xORz7H6{' );
define( 'SECURE_AUTH_KEY',  '?O{ co72 --)qd&kN8)e}020{7?ccvH{oG4n{$S^?I7Up4P)*23R#C77;A,1.,bJ' );
define( 'LOGGED_IN_KEY',    'd5Sm`%p.zY{AV)hs%e6(3u-/ShK@JX]tPya=<+uRGf8/3?|Nb]1QhaHv<.hq.,}9' );
define( 'NONCE_KEY',        '(S!rD|oRAa(P5shYtm6GB@vkc7HO86.3*_0:@MZ4R<4`sl?_%CCQUpkSCW`ny4k3' );
define( 'AUTH_SALT',        'Fw:6#dw;=+vq0w/Z)a5qw7^ Us^kj>5Gi]z%0O(I|cr6[Sjd_r4B|-_/)>q~6dz~' );
define( 'SECURE_AUTH_SALT', 'enIEUXC+M#9oUHx|a6z@,Y4!bI82OV`ua%.?wkd4]h{JJdUy^SI)YbT@+ew~Sdf#' );
define( 'LOGGED_IN_SALT',   'F2Bz&r$gk{fT=-%^{ =OGc6^@8DqbgEB&N/|e>fP1x&jB8n$1/,Ow!s/[u^Y{8Df' );
define( 'NONCE_SALT',       'Tot>+[5wioEgpX]xQ;t-B0STf8RjJ&;)O^]|]F#V v!:RJBBnTl7Zme,}*Ilx2.C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
