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
define( 'DB_NAME', 'wpmalco' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Malcoadmin@0411' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );


define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_DEBUG', false);
define( 'WP_DEBUG_LOG', false);

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
define( 'AUTH_KEY',         'cM^^A3V>WvGl`tQ9QU~RU5jc]oH_+UcvS6bg;6vYa1{@8{TW,0kAs?._3L{CWR/P' );
define( 'SECURE_AUTH_KEY',  '2NLF1sMzlYV4 LO2 (0cH `:KQA:C![JsOd2|pUnxjFvE=314wFjdl;V`iAqN:4r' );
define( 'LOGGED_IN_KEY',    '#C{]h^?d pg:MF?Rz%*@[K@m2T!l0rpxH2X@ZOCRQ#J:dhZe1gD7KG%0}zF,h!O]' );
define( 'NONCE_KEY',        '|COKQ=Apk[G2[4}T2+f^_+-kWDFj,@kLdVg:iT_3IvseB+4{i F&Im10hNRv16o^' );
define( 'AUTH_SALT',        'u/rS=5Mp^a<<:/vQGqqo%Z#Pei%=`Xha//-:lbi!:o]UA0-$#-}A]&_>L[ 4YDU`' );
define( 'SECURE_AUTH_SALT', 'l]xKu:UnbT>JU!S7K*I%e+w7bj!asb71 arKGA;$A>RG`9b[[=/;W(LT-Z/}!Y7j' );
define( 'LOGGED_IN_SALT',   'iZK4=Tb!I63$_oS>$JDfp1:e m-PfRY5#^A}C^E|*poV@(G`}k5T]EZ?uV+*q63S' );
define( 'NONCE_SALT',       '`he3#Z?8iY>N7$K:3<&1?AT,wqg<!?bU!P9Xyc3IR9/J+R*M9^+l$l`u<A+OdV2A' );

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
/* define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
