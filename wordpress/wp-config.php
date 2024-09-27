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
define( 'DB_NAME', 'trieu' );

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
define( 'AUTH_KEY',         't8nygpj;#0bBV)fvCJsK}+tqND4d0-YjCkd?%]8<[dk>$Dfmy1=k>MXXLn~vr{S9' );
define( 'SECURE_AUTH_KEY',  '7M/J>X1+8Tega5bhJGXj8Pa$;W3b(~aqM>KxVRB7I5zrd+%_l6x8)-;bBvzc>/K_' );
define( 'LOGGED_IN_KEY',    '*oyC>*?rU58pPS(I$d|Tp~w)uhseV~)#2c!_w6EMmIx6Lv6$fTQ0,R?$}}M`X!G^' );
define( 'NONCE_KEY',        'eY(#z{iaKU?yhJT~WLSS;bo+OC{j.+(xto,ev~/,4=K9r{ODm~Y0s8Ht-IF$Z9IV' );
define( 'AUTH_SALT',        '`yP0dFs~~OLxdU>00X&Cf7[X*:{R~Qh-;1*]<`f]Y&1|Pt(oe|4(]lv<b |@|^2r' );
define( 'SECURE_AUTH_SALT', '}Q4LfVPz[}}_VF4?wWlve|kGxoi=(!`[,ct])Ug=3SSR>|_tWUt:C5{b:*%Hgc`e' );
define( 'LOGGED_IN_SALT',   'm~O=,b <[$VUlY|Nn61sHDiBSJ3wMCNlG=t=72EdHEETonespGPF7V]j0uq7h m7' );
define( 'NONCE_SALT',       'V01-z{k`8a_>gjY5 }j|fi!|Yl[{:g+.SM]S`WECw:YkOe%$lxIDs/N[.MP`l]Fs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_CMS';

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
