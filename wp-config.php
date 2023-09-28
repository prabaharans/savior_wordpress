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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'savior_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Root@123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '{9I*oqDQQ`aKDQaXr>7h;87k*B.Y0ZI}3~wBn.;Ayj{7Szl^dTZ#1?uA/R[(v?,B' );
define( 'SECURE_AUTH_KEY',  'LkX0HDHDFW^o36,gM9?bONl~G8b)<234HmE[Bt/}YrI[;(/.XK6|0y,9pEja=Fa-' );
define( 'LOGGED_IN_KEY',    'eAjZrSL`L^0wtd`,MepIQXOnnDr6_2n]xJ1Av~ZZ$Iea,|$tS+WR$e)SVR!05x&%' );
define( 'NONCE_KEY',        'iopF3Ej1hD(|(rA!IT9~_*BwB7?NY)x_L{k</BqM|>Egqs86eL#gY/i{@mh b9.q' );
define( 'AUTH_SALT',        'B-^btLC7xc<>c]w%7My.9W%l@6g/=qOyO;0k?)&b)HKp`4L@:C2s-.LVk_Gz:]2E' );
define( 'SECURE_AUTH_SALT', '_h-kaoJCo8I&D3B}Y)YkY;v1&BVU3VG0g?RP6a**r]=ak2fNW&:[)I5Zc0|9pS;B' );
define( 'LOGGED_IN_SALT',   'TPHR:Y.>bO1.0V3dzim|cuyU6~=./3J5/KbI>feEbApl%cs.2Ny4v0E[z;H5mFkx' );
define( 'NONCE_SALT',       ' M1ocsPkp4?<<}IC8]-c>P:k;|2x,wl6Aet)$)y.mBV-]nV+i5E!YM.ojfcZSNIP' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
