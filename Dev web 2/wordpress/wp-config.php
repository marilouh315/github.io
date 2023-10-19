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
define( 'DB_USER', 'maril' );

/** Database password */
define( 'DB_PASSWORD', 'maril' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '9}.|yb&.0!AHo)+Mu<=eU:=G}.v32vDSNUg=)p%Ah&tXOq*|Bsk;+N5Hcz{iSi4L' );
define( 'SECURE_AUTH_KEY',  '21r4h,:ra52nos]7IsI9=>qD%1^C3W*nP{coPWnW&tr{~J[b-M382aV^sZ-%Dw5>' );
define( 'LOGGED_IN_KEY',    'bSdg9s=dR3$o-BIb*aE/@<ia )){v;_g(9XfC-3@Rv<lYt>&2Fef`zzx(b~,0=i!' );
define( 'NONCE_KEY',        '*.,Ug[4P6|3q2K|A?{~xH*<N0@NZA{~jNX[2RIvgwesdEPP^?D z3VwnAH6ZWmHG' );
define( 'AUTH_SALT',        '.,|gx[j_X Vz}X0Kp>g/z-Mr6xTCmydByYr;s;I`} $TM&]dJ)ZYJy[t4W]VP*q+' );
define( 'SECURE_AUTH_SALT', 'I~nNA8I!XpujWHXgtuv)vxRXn+d?6%%xL|~c&.(p:?NXLvNF@:`W}n-w(FD)<`TN' );
define( 'LOGGED_IN_SALT',   '|wBt/Cxc%/_&ZmV1;x~keyJ+*&J`IZ*#Ebb$(rj&E%QXsN?-;l]f9s,?*u{)6>u ' );
define( 'NONCE_SALT',       ')H09CKg#7l8$e=mG+oiP0%nx+@~KC-xc1EbuKDg72diYn5g5nvJ`iA{$olM;u T3' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
