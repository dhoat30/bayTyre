<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'bay_tyre' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?dU.v62s/&dm3 1l#7Uh& psOzesLJi._W+$q?gAP2==jZnz%t9<oLJmm-eB~x([' );
define( 'SECURE_AUTH_KEY',  '2dz!qs<D9O6`NFdL~uL{<]{O2-4G$lmP`WghiS3sJ-4G7F6&/yzSJ!$A/{/)H39!' );
define( 'LOGGED_IN_KEY',    'i0!kgAaF*csOSv]S0.7K;s(Wo,s-t_@a;M;+y.aUkG@Lj9,0!%/Z1/BEef;QrDB(' );
define( 'NONCE_KEY',        '> %Cx-+~jTlg#JqHo~Ja5{mT#gYMV(1-{L4A;R:X}4<MqN#A*o1?b*5WN|JQ2xVP' );
define( 'AUTH_SALT',        'QRuWxf*6~o{v4S8KZ,rh_c%UyRW9)HJU,TRy?!F}v_@&kiJ=I$v`30-$S6(MNxBH' );
define( 'SECURE_AUTH_SALT', '+tQ0@_,]1gt1Qu` Gx  A`L bVM)e?_DiMEMpo<^WJ(T <Sd b5Q0N<2Iy0!)w$g' );
define( 'LOGGED_IN_SALT',   '.!?2xUzgW@`0 Z.E@F+bsb(s?dLozd++QS+z=s|oH{ERgK^~--#jVK(%F1c%uOEW' );
define( 'NONCE_SALT',       'K.xbJm58M( +f*5>GW0FSG([kUPY)pJFGozRG8j#rWRCKVMIr7!N>7,9=f0P=zg7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
