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
define( 'DB_NAME', 'wp-sandbox' );

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
define( 'AUTH_KEY',         'Uhkw@4jRJTmk+VzjBSUrnbs_KBthQ$,j27?#){QKX<3u^|c;^URQ$Wfh6I+4_b}M' );
define( 'SECURE_AUTH_KEY',  'pktBEYK?*Xu^-s:w:w[.]$l]-`v;tWERv4%Omtf(m/X]_[Me=GV5p]A*/YJcoKIr' );
define( 'LOGGED_IN_KEY',    '~2rj z-}8FXiy4z;`{k:4.*h-X)HnBqx[&cT5zQ2_>|G<t|^_`AbX:cm3t*!V,Tv' );
define( 'NONCE_KEY',        '$,21qJ WI>P~,nMHH/u,Zq++_2-Z^T+B5Ew_yeH3Y8S$XGL7A#(c+!vU5W(5kKU ' );
define( 'AUTH_SALT',        'menr&vzWh:Y;Jd7,4/B{?qF,@_2+G1A*^Ek5x{C%>^&FG?c:=l~zL#,F.9ZLsfCI' );
define( 'SECURE_AUTH_SALT', '|1[(ch5T^(e2ogAgER<S,mLHx$Yy;GAm*5h(/f0dixkP<jtogy~Fn>P#7^^8PZ^h' );
define( 'LOGGED_IN_SALT',   ',?u.K1:=^+6>s_M,C.IxnTya:ws%%BK Fc?>a[ON8)2LGFG }26<~W8l=L1y^r>U' );
define( 'NONCE_SALT',       'p17=JIaVad$8Vg$3+}T+x=3Va.Liv`V8{!JdtYEfXQ_^hW-oAyXZ!wNG JP,|_)b' );

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
