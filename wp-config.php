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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'netlifyweb-1' );

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
define( 'AUTH_KEY',         '*t<CGV;cuolc@S4iUeJaUmHo |/ -9/hxi_[lKb|+JpicOad}.-@BmSPQ]E <kE%' );
define( 'SECURE_AUTH_KEY',  'en3(0:zHA5B@78KZ$?IiPv0o9!-xgpUPBuW}+$+<<WMRpR7G3xdv}|>nYgn,iUug' );
define( 'LOGGED_IN_KEY',    '2Rk-/baDi{hs@/BT]e.r-<Xc(DbS~QU=S}qPRO#2?1BR6[>B= K&XKjxr]Af.`a7' );
define( 'NONCE_KEY',        'c_ ai!$dSly6gKR)cDolSi90A0&WqGSF/wOQ[uY t+_GO+ZAZ/g7E-JEugY0FFp:' );
define( 'AUTH_SALT',        'pV/f ][vVQmrJFEx$)@p GbS?@RGSe5q@>bHFs6pO#rh-:hwFpS0/(@k#3Fy3NNr' );
define( 'SECURE_AUTH_SALT', 'cu6R*0=vGF2<AYzNkjeFV-9z5kq.UYp98>:V&JO4|R2TK}o9C&*34N%T|:%{7$Bl' );
define( 'LOGGED_IN_SALT',   '#ni,zR2j3hixV#66[]]q_(Vfe6s+Lsw-u.IYp.6&3CxLB8G9Wr%t);)N?.6<{uCh' );
define( 'NONCE_SALT',       'C4|~:.v7C99_;7H-zHZ{bis(3)^[FY<zyCMuYY07!ovBL5)hY,[1wMO%FCa{!]E-' );

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
