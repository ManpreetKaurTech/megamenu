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
define( 'DB_NAME', 'megamenu' );

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
define( 'AUTH_KEY',         '`pDInd;lt:`*+`Hnq$>a$]}H&ynSTt!QclXj~yYmL<1Q(TU1r3-KNK^SFIty>yX$' );
define( 'SECURE_AUTH_KEY',  '6sul+M&bJ60C3w6O:h67i~MM5ov&^Yt9YPY/, 8~)_G7zNVKB#F:%__Bi7=O_<`W' );
define( 'LOGGED_IN_KEY',    'h 4aL2`Emb0>Rpo@f/y4cY|&T(0+2Wy6dU>]YWX&5C%&6:HZN WpKrU^}S-a>}5,' );
define( 'NONCE_KEY',        '^Ob,NTm 2-FZzXuh?jJ!IB8dkHz,Li*4V4wsoc/<()inxc|I.fH+gY^`nuJlmn^b' );
define( 'AUTH_SALT',        '_ )i[k:d;~P:kKr]4 RW/b+wUw0b<W4l]D1~~u!fQ4 u%87B_HVK;tV_C,]JReup' );
define( 'SECURE_AUTH_SALT', '2y_W/`0%|?w=<$lM_ZxPR+tOe`ZFjor0w}FV6yaLL%Ow<&_Rmb.yV%,).RghLFP8' );
define( 'LOGGED_IN_SALT',   'ecf*<,.PPsy~q8?G,;PwC*o8ga+1e6MkN%(Xv<J7H]c#0>ns)@Wch?9<,:+HsSOx' );
define( 'NONCE_SALT',       '}U1qoa%~JWf}D7hJCnpmI{F+LXS@s^En<6L{.L96BUF6h+_]<Fhq8MniVAo=iMX!' );

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
