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
define( 'DB_NAME', 'themebuilder' );

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
define( 'AUTH_KEY',         'g$xC<Bszc7O=?FwtIWP+Iu$%$t|<nPHYCiuXc}/VD%Cs%Xvoa5/=w)5Oe3phXx&b' );
define( 'SECURE_AUTH_KEY',  '$eQ8^_cEp=h;VV!@mgcn)Nh5,nh:J/)A#DayH;;&; ?<$sAEYFt~*7![|$-#auu>' );
define( 'LOGGED_IN_KEY',    'DUzRrYr0lj_F{600 AK>Y7hDbO0n^D41V&?da}AgbmPpQxIBbxO^rxP]<X^4Z^C~' );
define( 'NONCE_KEY',        'q@OC]SyfIQ3t=Hm3p74JlROIGV=di%DwSl`1tpDaDKS~?o2||zbj-p~U(2a<QqT{' );
define( 'AUTH_SALT',        'brf4A::IZe{F)+ovZ@DNLX&#u)`F_pbYABYLG0NA^t=[2x*e`bz#VjPb%M=[BIhc' );
define( 'SECURE_AUTH_SALT', 'yoAa?XIL|v.ro/oPWjuU8pu9r+AkWf8:V$_D}O&/I-{>ff}4,M}()}2Xug&qO/vD' );
define( 'LOGGED_IN_SALT',   '5n5)ss+Q~lGEB>,K+_$S;O}YIB:WLl:YA7YG,h2!YJ6yr-IseaG=<GQ JD+gIV_k' );
define( 'NONCE_SALT',       '^_{lK]W.)e,<v&W1wf$4a,+THt{5z_,C!Y:!/J+9j-t_%JXxgKW:&hC?=*)|7urB' );

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
