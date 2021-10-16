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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwizeline' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^sMM@_%CzK+pVEg]ka~?/_Rryr*}531X|c(|RhY@2BYdaUX;jz{@|tffgLX)f+L`' );
define( 'SECURE_AUTH_KEY',  'pC]iXePj,8:fy.bbnRrY#Jw#R_0p~2lCTk4EFCc_>l?@jirde{bi=ug4P Ohb:#O' );
define( 'LOGGED_IN_KEY',    'yHN?.2B{1ZuylIB0GlqD0hOH7<KtnV<xM;+vV7ChRiG>!}_bTY);sileg?[t)$b:' );
define( 'NONCE_KEY',        'r7k;;3ExX xc!PhSbc0sAy z YQ1Kpd-]-h,L`q,51UW2Ct@IS(z[a~,1>sZ,CoD' );
define( 'AUTH_SALT',        '2i>X,n~N>aq[JpL|+v>o8>YT PI{Z#NU53cPv|4[!&wH6!dGBIh_4lF)Kf-aQ<f|' );
define( 'SECURE_AUTH_SALT', '%uF,V!QK-~sr{>+5^B2V2ETNq9#jWAR;DB4E+QoOu#eR{MVi$_+3g%#+-bEbQ^Q3' );
define( 'LOGGED_IN_SALT',   'DwCb`~m12ouiI+L(vD%s|+dR*L_05%b41=kr$BOXj@JKTmC-Zm)@U*K4o[7b c6c' );
define( 'NONCE_SALT',       'kO.{#(0bJoc2)M].t)AZS:as_oVc|^b]Xd3Y4McBhP,+`@.C&v]#r3)UHj?#@f>t' );

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
