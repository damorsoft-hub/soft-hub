<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'soft-hub' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Pp!.[8bDLRt1Ds4xrk]x3t|<hYf*y@i:7(449$+|.,7n&4X/{vMzXN.DFPuO0@cn' );
define( 'SECURE_AUTH_KEY',  '$cE3DZT~&`6ZGNIbncc.C(F:?f7]h<jy<9u%+5Ub[rO.8cj<(/OjqEd~91V5TU+H' );
define( 'LOGGED_IN_KEY',    'jAF^vNV?p]`$TUQEy=?.fEG (MIN.mBi)7Svu1,j%U8@.GW}AIrzKxFbMYv%gBF!' );
define( 'NONCE_KEY',        'FJv$6_&B,*d%CT knRuCz#.:K4MepMzYuJg46F?lW?0sl$OpRL<)_}_ .kbu]]Ul' );
define( 'AUTH_SALT',        ']XR)&[*MqK5g$pUo=oY2Nbpa.2v^< R3.tSDYZ|do0Kf!OpJcFv5xJ|-8_w.!BUQ' );
define( 'SECURE_AUTH_SALT', 'pYNti@IZ%#jh*mkhiEL9wOs$7i,KguOB=0NEA9-ri(898AV_U4fJA#vRb.r>pobh' );
define( 'LOGGED_IN_SALT',   '#*=b2*Y{2daI[g4xyfAKJ%J@VtE+:<jAOKE(+4fg!t=N4tN~HlC47dp1lOZ?S?Zt' );
define( 'NONCE_SALT',       '3H2W2E~38k7!tH_E56by!*|k?v8^`cK)@iAR:7!TC%RjzIEWe1~Z)74VN5k~lGOe' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
