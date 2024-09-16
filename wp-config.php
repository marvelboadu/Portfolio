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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'EC[8bB;Zhr+SW V|KA=qbtA9~?suMch[[3l? 0 4GZGq 4QMto{ObgcKhNjEvklc' );
define( 'SECURE_AUTH_KEY',  'j*{tv*wXnDf2z<ow6kt6ji<OGO@w!9ZtoEL<X~;u5taynY`]/*Vjhup#&MzY^8Ec' );
define( 'LOGGED_IN_KEY',    'JJ6&+ooYfg|&926`[aF+&F<*Z r0QNQ%^Q{<g4uOt|<0Ju[,3Uk Wqidv0XtvQA8' );
define( 'NONCE_KEY',        'Hr<x#GxxAy,XH1yhS,4n!^Jc8GxJq8wM+g+%,I}p=Q[}liYSUz9zlC|6h@7^CJc)' );
define( 'AUTH_SALT',        'tX5_PK=*Z2A$~#LL6e2M2c%fg6|wjur-?(,MSZEkM. z[<92@CiB4FsR30L^1=U0' );
define( 'SECURE_AUTH_SALT', '<7jH/1uFY<u)%~,duXVVhZ/l<<yQU;8O^B~Z$}4?=E)#69f!*N-N]com#^,{ZiH}' );
define( 'LOGGED_IN_SALT',   'Z sj;~8bF-|#m&# [F&H45&HdiiX[+%-V]-{b7_bn(9z{E$76q{*IF=CRSWa]VC[' );
define( 'NONCE_SALT',       '4R4`T-3V*?c|8Di4SH4 bM;W%CE#Nn/f2UN@%2b`b>SN)CTG+?-_vWti+eRC[}[W' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
