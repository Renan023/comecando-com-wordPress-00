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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'curso_wordpress' );

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
define( 'AUTH_KEY',         'mxJ7m3J1;KU3uUI)ozgYgaxdmFm*Ie;^d6llxzX^ykp{e3zOX]b(~8!:>:ogBPJ|' );
define( 'SECURE_AUTH_KEY',  '2b8m3ePN<Se8!L`z=>YDj#nrM:%[.x.(lcrg $Lh!SWZ2ClA.-Nor5S.-NWsx>-<' );
define( 'LOGGED_IN_KEY',    ' 5^(F:IgQe(69cFTH;R@i-0tb+Zzn555F/[-E9ioMFu^RY,mNNE7;-Ve1:M{AS_2' );
define( 'NONCE_KEY',        'H< f/{z?[a&]7m#1[mJKd&Au4gq@F!*|kF_&[^N!i|0b:NIl2!JwEd_<0zE!,=TH' );
define( 'AUTH_SALT',        '@M#@0|%?AZ[~Y>w`S/!K^gxLT32$k9SaDb#5)*vc[MrL/6YY=k7VCpt3Jki9M)5p' );
define( 'SECURE_AUTH_SALT', '4>9n/DJiEB<1fZ^-es#}iEVrVfuG!wbFVMF,W^COEKY|7ndpwqcVJJ@FGi#~=Nwf' );
define( 'LOGGED_IN_SALT',   'w/ 29C{-&D[3^@nM9xHxrngUp]M%$Bs,EAQZ;gY^,HHmO69B.>oe!rZykpsSXwF<' );
define( 'NONCE_SALT',       '9+O$cg1oH?sW>pdm+%Z}Bek6Z..0t-%oC/&M9eQ3[l*oj,%n`c4qw|i>ygeuEg4N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_00';

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
