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
define( 'AUTH_KEY',         '#v^=2^5-Pw&zKC$zvv&YK:xz3WqLYxqu|4h]I};u[IFI>-!|f47yda(>ykHHQAf+' );
define( 'SECURE_AUTH_KEY',  'Gi1/xhB ojG`O$[+DS*ZTMN=^>@VM9:|tr$K<_> glsr .ay!MEG15B#s*SEfuPj' );
define( 'LOGGED_IN_KEY',    '+K_()Dc?QrcN6,od$0}&%/k(iF+k7BhYKn?<NAmO*bcM74Gk[0EN}~lnl8(zY2{N' );
define( 'NONCE_KEY',        'L_y<aF8L%l-WJ|p<g45%A}9*a[z<SPTc|syk@_V!8q-1K|*sctY!:`7;(IhjLlj~' );
define( 'AUTH_SALT',        ')]!5=tNI*i#GKYk]#sbKC|w(nLVfcA=?:YkPYY}]-a|zf*Y]J}D||)TwFwW|C>/q' );
define( 'SECURE_AUTH_SALT', 'EVL5RD*G9I:nBDBOZ85<.)2A|fejuV=z% vr(=R|clB1X54hid^}0M O=IQ!zN++' );
define( 'LOGGED_IN_SALT',   'vWg&[~1WU(g>rM1=sG@Xrn?iKsU5:avx2vvk HaZ_l&0/%)a>]DA0!@.P;MlNZE-' );
define( 'NONCE_SALT',       'k#$M@M9Q<#7/IiFAd#/ox23IZXjIG[)vSUiBg K-[u=_`dP^fOItzPJR?`i~+A!,' );

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
