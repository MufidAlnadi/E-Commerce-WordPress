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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '7=-T?/>?^RPeOM.HT_Od8]A[g*$#sTN_U=!HQ,@mulJG.V[0s (>~/7,0-n~y;;}' );
define( 'SECURE_AUTH_KEY',  '=,t~:kg&a|3CZk//L.S&vP>N+ehS$.+K.^Ahsd=!g =*pJ$_k//=W[}X|va%%:R5' );
define( 'LOGGED_IN_KEY',    '{-*/QVTV$aO{2Ng]{@h]p:D]p<5 hQMyFnlt;/&[nqC#eU/C>kNeWz>Ko?O|~-sn' );
define( 'NONCE_KEY',        'yt6TP}c`s?S>>=A-LlnzhI}G9jWv?2]N_0_SBifPw<r|?L xl/o-aYs1pyxU{ahQ' );
define( 'AUTH_SALT',        'x]?oyAH7P4,%T{XaA#d]cdm,u`eE27S)g<v`v^%o#6GfL3<@4BleW#@CG5Dp$ScE' );
define( 'SECURE_AUTH_SALT', '5,Luc|+]57?|bXDJhF0=kx-< *<3dQH{V~k{:*l,W|B/e45i{-.|=Z)yxBmKKL]g' );
define( 'LOGGED_IN_SALT',   'nk!LbQ2WW$9THUy3IzXOy c]]+<7|8&E$h?OD!QM[?C|J@_ASTjP|n<_a[y>>O$y' );
define( 'NONCE_SALT',       'GN<(BF1}dX3yoin4(bM`<[R)r2b-o8[-Phvs2It~3s:.YD5:j.[lU4>vDn}xzGkB' );

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
