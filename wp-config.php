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
define( 'DB_NAME', 'theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B^Pco3Y-8{_08vF>PCXQ=yy[+H+8|N[btS@e_<3cGecw%PYUapC7`%Ti%Q{jO%LB' );
define( 'SECURE_AUTH_KEY',  ',h//1/N0{c+s/QXqT[_Hy(uLK>o?%tFPqEl>LYk?O6 ~QfQZbU.,Nrz6k;6.lv(a' );
define( 'LOGGED_IN_KEY',    '2 d?DKwtZ`;NF3%#Ph *vdN:Ub.[h/W77Z6Eicqs*-NI#DQc]@yy.9pZ^}90 gLY' );
define( 'NONCE_KEY',        'J#BN4<_xQgM7=@faMj1jR>Ar)CrkWIr^R3`?J;DL=$UDEYgA/1!^Xl1PGdaAku{!' );
define( 'AUTH_SALT',        '$m}S:9?#dew&XabL)y(W`U8>=q!VRJrFBn}RXz8lAX&*m/]T4sbiWc%S9%QG>3fT' );
define( 'SECURE_AUTH_SALT', '@e*F3m}zZ+eT*QbpoIT=ShnA@7^u<.P|S$JcGw1bj!r~%+y]`b$3Uu#tUo<$Ze+K' );
define( 'LOGGED_IN_SALT',   ';WDcHfF!{N(o>z` GJ $gc]f?xrEgjq.bs5} FIpY8tn;Il}C>(]`^+T4[h*;9q3' );
define( 'NONCE_SALT',       'J+(IC~!{*I8u+hJ}M7!j^vdD?(=.(Zkx?=ZXOSIm>IGYLz5%i(;)KVOz-f<4K)NZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
