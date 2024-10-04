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
define( 'DB_NAME', 'cms_trieu' );

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
define( 'AUTH_KEY',         '%U/iyDND5}uDAB!`^vh,S_i-rjn7-s9Q7y|xnr;i]kR~-YBM5F]5jWVJuHO%>R]B' );
define( 'SECURE_AUTH_KEY',  'J<>AjkBk)4S%s*rwm2X CabhIE$y>?_t=/]}Xl9fLKD1v?J~@l-QhKm*@JDRc.oN' );
define( 'LOGGED_IN_KEY',    '1ipi*,BZzbZ(Paeg qH5tfg)Gp$;gk5 /eb`#Ts`6OEw`(zd5NoL6{4t7*U)vfiC' );
define( 'NONCE_KEY',        'xQm7O^B>.Ii7#Mf*nu?-G+, v8:@|((S4~Sf/(mk8Z?KqgHlJ?uS%/LhzqFK@@:3' );
define( 'AUTH_SALT',        'jQ$|:p#m2g%u8^ZK}gt?6pBq,uwRJFfWt5F{s3%E5W` pWoLjIX/MAhtUKN/Xdc<' );
define( 'SECURE_AUTH_SALT', 'Y:J-JhDBVQC+ zO1;o$m.<;xo;3Pfr0h^vy@@-G+YE=B 0mO$dCc IG]Z]2C!ZFU' );
define( 'LOGGED_IN_SALT',   'Hx$=81IG{MehQJBU|t!e{3+ 0V:@LE];h]C%wLwm2<)JsB k+/wST:[CCN0>:_|x' );
define( 'NONCE_SALT',       'TPSIir/OJ ObG4,f2-UiX2]1n~U~qy<n+R_BAc?D_W0azo=1ZBLX>LY#X9#b`kCy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cms';

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
