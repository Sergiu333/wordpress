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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'z]@VZnU~`P5^*5{<6MW)TleNsf[oLStm&A<Z2UkfFzdX`9n#4r#f(7%AI1[BQy[R' );
define( 'SECURE_AUTH_KEY',   'Pym[/Bvz/y aXE3c~7Dzg1B-,(*qXQS7&3|V]P;PaOTmxXV*<N1>J*6E>.2_%-?O' );
define( 'LOGGED_IN_KEY',     ')!3p(L7K^KF&nLrc_o|Cd.t@b2R+(:V-B*.jv!WPJZoI?VH8pP?4%9FN{8qqO^kr' );
define( 'NONCE_KEY',         '8EFr&qeXhtfQKd=qAaWrlAnlc*i+3xGrG[o4:RERrz46c RhtZ8Et;-9a7PX0< s' );
define( 'AUTH_SALT',         '(4]h{+}Qxdx+ttmZh ]5B0`a?Lshqv%tQzOk?LDEL2ZJm&Cic6`qrREv|1llw_gD' );
define( 'SECURE_AUTH_SALT',  ' NJfk8&nN>llMt9cC1y2<N62-v:NUUvq/BOub;f(-=j!oM.*pfcA@nKawTa,[KP`' );
define( 'LOGGED_IN_SALT',    '7SY,5ydByIFT8F_#94tq!>N=g&<+u`?;s9tE>ZEk7d^y+_LZ2*K~7t=7%ZX}h%Us' );
define( 'NONCE_SALT',        'UtG)5UIQ17 E1oyi]H-Upy}J)tQ)0A=G7n(gNt_x;okGbQd=7%kR^&__5e?LQnQ8' );
define( 'WP_CACHE_KEY_SALT', 'mj4@1ho:kxZyM}nvtvDomSK2lH[G`8YO+MJ~mJ9PsJv`-Og%}$):&VO^mWRX0cXV' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
