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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '4.5}yuQ5dvP)T-Z78`@v7H;ucNFb4d^biKH_22`=)[qkc5z3A2Wf`2EIX|V+hA~n' );
define( 'SECURE_AUTH_KEY',  '-Xv<gZwJ&TsmxE,>>vmbzHSR4M6is:BoIa<g ]d@+^$N*:w[Y@>?t7yhA9VtHP)#' );
define( 'LOGGED_IN_KEY',    ']J&N-`6K=AgA)K58j.)DVG{hP[Tk@JHZC7(/Lki.{!]9[{z5E V@ihJb2x&J.).~' );
define( 'NONCE_KEY',        'ij=Y5J-W .LE,$..-]V1y4F^#,/-Q~4_Mh+27X%%LpN9)4>#NRoS H^lIFH5)xtM' );
define( 'AUTH_SALT',        'q^G95%^y?tj 3(QqdMNk;@H81np=RZLr5EE|(7-_&V1ioi.<6ksjk:u>gQ#EiZCH' );
define( 'SECURE_AUTH_SALT', ' uK7{uet~M+&D =H}kSkS%+{R}gG!&)it28b9*b&gvt$@[?erdp^tnG_)AkfJNO2' );
define( 'LOGGED_IN_SALT',   '-&8i;f.aq?6k4[v|CQwbT)Pz9(/d=4beQav9p$^a3P8urO@*h26n,XMVoAMm,MK:' );
define( 'NONCE_SALT',       'k*L?p66OkUm}p/A$S/!>Ouc!-@K2T?8o=`w]vCHwL]TJt[|u|j0(rt6{e }2pgEa' );

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
