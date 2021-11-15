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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bhx20243_ironhorse');

/** MySQL database username */
define('DB_USER', 'bhx20243_admin');

/** MySQL database password */
define('DB_PASSWORD', 'xIxlotus2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm`g6<kuan !5PW3#$kX|.LXb/dWtqO%2QUxY&j<m&!(l!glolNo2::2<S&/KVEmx');
define('SECURE_AUTH_KEY',  ')e@nrEM:2BCi)x3a^}>{VSp4!`Dzo(2~Ge.nM`VzQD/j=s6IEyNx!&xr:a|JM0%W');
define('LOGGED_IN_KEY',    'y/=I&LhCIG!:>eF*^D4FAZPQGL 3{c&)3suRB]c_u&(,PH1BR(J1ZwnLIq_ iQT<');
define('NONCE_KEY',        '4uc8aEYw+Yy0N]_75,2[xHn8ia`-g#5%v+A,f8x<RG~*vy.ULws#oJrNOIfEF1%u');
define('AUTH_SALT',        'g.:byRQmE8VL_R}l`=L6)LU<#,!%u9`7?L2J.ZHRD2[^L.;1sr8%ngfOB@Daxkv!');
define('SECURE_AUTH_SALT', '7:(!=GTHwz-`*?sLAsLbJma+?8Sf_M7c8d![wsI@JSn]|6Q!|m1bx:k[h$PvB<5d');
define('LOGGED_IN_SALT',   'QW>.d$m/%@0RA$r`uPhdWLMaZ0G$O}/+1&k/znCv%=26 e+[HvTCuCyWdL9pYjoY');
define('NONCE_SALT',       '*2<}08+C!C}Ca*4PdK$/9(iHr<<g?#&C:w&JFG#>V79N1(Ko]Gls}dMF[v %}?[A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
