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
define( 'DB_NAME', 'css-squirrel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'k4089f]#{)tCep@71dy T-z<yFJOxr)enhs-UnGR.RA>8`lmHQ_{K=uEWWS;a&BT' );
define( 'SECURE_AUTH_KEY',  '+$fZ*r2%O-!]$Po+*/W6EqwRD1(.RmS$s)8!3sjTY#c5htH^~-7S*EhV@dA F;yN' );
define( 'LOGGED_IN_KEY',    'Jj;;j!On^JGD:&?Jz}$j8=/ E{(&>xvl!HA]?iQe=98fJu^,/#iJYg$18s?xnVN@' );
define( 'NONCE_KEY',        ';*ACC1zh{[9<L7[95-! $VcAZTl%zpw,qUe!^)eQg=l]fC!>sf;<|y(7jo([a-d.' );
define( 'AUTH_SALT',        '<4+|K2?tQ({v+Xl4h,0PaFt7Bk(FU:7D`8UoA/X*_dT+O92%stR$!$9 s$qXg;fo' );
define( 'SECURE_AUTH_SALT', 'i V$}l,_!fxHA3mU<*rtA7)MwU5l9zjy8n1p67h)~p^Ku5]wpoJ.S$Z^#17)-1sI' );
define( 'LOGGED_IN_SALT',   'A+tjC^ DYq*BMb[sBJYSz{&hCJxJZAvDz +qquF`*,.^#FH<_&E2iB41/%7;)-nw' );
define( 'NONCE_SALT',       'h/noR0TO>(n!)6XzEXA)<3Y![$^d~2Rs/~.thoJ@RxhI mtnk0>a 2Y l=i[_W7.' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';