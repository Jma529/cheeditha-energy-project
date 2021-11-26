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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cheeditha' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'e1x{jb XzM95Z:tgZDIstt:S)rSK/GZ!h@wjb%(|F/9Fi9fIiNSq,FTy NEzggPh' );
define( 'SECURE_AUTH_KEY',  '+XM2c&L*2%jfyFt}*Iy1f6SzG!j@14iye~xcPG-(b#b|7=z><+)ZK&5Y12hW,in/' );
define( 'LOGGED_IN_KEY',    '^iU2T:<%SovyNecNOYN-gu8@WaG~xsD-Z]I[21SwAm~i`{a.Uk(hF#4 e%/BI~1:' );
define( 'NONCE_KEY',        'b/C426w=Y(16A{3lx(jE?>CBJuLxx1UJA[^69W~|bOUacneE<$I~g|_xnxxi$$k=' );
define( 'AUTH_SALT',        '/`!yKPEHWZy]>Gc[}%RuEUikcW6~W0Wm_SdyHD0_:;$@@+UF,e%_uQ;hW:Zu_{c5' );
define( 'SECURE_AUTH_SALT', 'vnb?sxvpge&_+@}`u-/|_>SjMXLEw!&u0%=IT9Nh-n.Rq.:b/IFh>D:16i2F,)VF' );
define( 'LOGGED_IN_SALT',   '&{)pyV/v8Z-wp1TKuWVym_!i?pS{HD^ugME~;7V+Xv2S9ZTF-,bxz-2Acl:?d8~#' );
define( 'NONCE_SALT',       '?NJfi{lTEkXWEhL2`@Ma3E9=X7YVDin}3G+k^Od__-f_MkG?g8X-1X&Y>RN4x0pL' );

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
