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
define( 'DB_NAME', '4w4' );

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
define( 'AUTH_KEY',         'rM]Aq%o v?`a.(<9s8|o=tx1xI^KBI/QR3n^]}j`kS_wxIJxx ;V1>0)Tu>$t/hI' );
define( 'SECURE_AUTH_KEY',  ';;pdi1[Vc]=1xZc@lsF,7lYyV /*Pp(G5ybXd]aV;T;WaR+gNlrSvy>k^?`^UaMn' );
define( 'LOGGED_IN_KEY',    'z/$_>V8g)gj}dyjE-or){GvuVQ7F!s4XE!fv*y<UwU95pd1Me9#=h91v4DIa|z}2' );
define( 'NONCE_KEY',        '6JtyOo_!#Rw9:H_g S 6(B~WVlVc~^(Gj<*:fg QnZS{Zy3(0<4^fDGV#PI}f6N,' );
define( 'AUTH_SALT',        ')y5BJ+$t2maS0Tx03X#}AeHLbT7ME?-l<% S ~Nx=/SI(RfHtnOTq4g)!U==mDp*' );
define( 'SECURE_AUTH_SALT', 'S->s|e}Y44XA?>dH?},HK]B5or{EZ7[C.|)DnYroVc3Ncb9M>>92t*e08n0zVj/`' );
define( 'LOGGED_IN_SALT',   'PZ6V^}qX/6lyu~xi$5oJz;Uj`Yz${vG~#AT5>?NDQ3%T,*z,a+*@N|#!y(.]C];H' );
define( 'NONCE_SALT',       ' FVrS7ZS,lsG?0&GP9N%Hl,++!:f(3sJg v:RGE4&,|7&gf QNx3QeUgoy x[b[I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
