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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         '0@!0C}f9v~M3M*+UYc[8t2-me3.NSchn.1g[=8*[PJ$TVMKxT[*kng_zXJ<#I#g{' );
define( 'SECURE_AUTH_KEY',  ';rQ;9I@&[(0<g_S7Yvu{N%s7ckB(oeUh>RAO DDB7`K}0@{liF|%i*VFp> $:j<c' );
define( 'LOGGED_IN_KEY',    'lE/emCX>jkGU% /e6wmA*_Ci5}57Cye?1DsH3bH_7YDRr^6X&9[{F#ZQ3_hn8Olm' );
define( 'NONCE_KEY',        'tH@<dF4w xlAxA6cwj9D()&,mUij7R@V.e@@*~6t7j+=,ZI?b 1P,#;)KG%Qyc2f' );
define( 'AUTH_SALT',        '?3~!>@;87w(0v%7uk!&DP>(31Q@-<a%`5@/rae!X3AqmUQ}g,*O:]XrI|(a0lJRq' );
define( 'SECURE_AUTH_SALT', '#U?2!qn~@i></X!wO~l?gY1@^$P7<L r(D%s0#WG@m{7Q|TJQ&@4aE|$zs:dKJL4' );
define( 'LOGGED_IN_SALT',   'Cq]^F(JK46(pq~@r=waSt>H-w]d1tH*oa /mY5$7kRSwW-mMeHGjCwMLlEPoTUj1' );
define( 'NONCE_SALT',       'vr4Cnny8*}C$Ega<R!P;)jJx_h_4O#i|n#+:];_T&ShI9>]`|#vbnPM5L<tF->._' );

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
