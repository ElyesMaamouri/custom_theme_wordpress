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
define( 'DB_NAME', 'dev' );

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
define( 'AUTH_KEY',         'eL{%9n>[?-V3gyjBq[n]s5<7vL~K(/?&oP2/}ZV(0jEC!><~@mo**D1|G9g+A4]R' );
define( 'SECURE_AUTH_KEY',  'WKV]u`G4aB:{Uvnw8` Y &Z#_5sOz=%_%pP(J=<p|#$%;>!%OKYlUShbR!Ez=isp' );
define( 'LOGGED_IN_KEY',    'D1,HA0ay`_nGD`3KfRB=$h _R,UweoNY8|bgrO<[6K&#pk8tM{au8cC[HR?rG<+i' );
define( 'NONCE_KEY',        'UX}MN^NsDc@G)#RzY~22amiGV/e+nyt ]4Bpe`F]h$U@TCat@<tS1JD ^n4Mfn!;' );
define( 'AUTH_SALT',        'b][~vB`GJdy02_@|I?>AaOnc>Gz|EXulikCqT@,tg=2Mv!mh?6?[MWvsk<mExc&L' );
define( 'SECURE_AUTH_SALT', 'M }{qgX}< Y8RQES1N[V}B7vH#l.XRx,`>v8eZYzL>a&xBE+_{RIH6J_WIfldHE$' );
define( 'LOGGED_IN_SALT',   '0^qo@qb/`o?oP(.gJGJE`|=lM%I, UUCjMtyRJV1*35J4q9>wH;ju%b;n[WQtT9n' );
define( 'NONCE_SALT',       '/^]}@7|[Sw#7Qyi*&5AYqnPNu_+K`)L6tEE-Pme8EOp/.x4BP- NG5xnWfcm=*_-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hj';

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
