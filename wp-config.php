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
define( 'DB_NAME', 'cgdiomampo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'zxczxc123' );

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
define( 'AUTH_KEY',         '8j0:oR5[80.r)IlSqe/19smHp(,UZn`$[9GLE:_Z(xiv[pZGmS>zy#`z_jew_(cw' );
define( 'SECURE_AUTH_KEY',  'G9py&0#g%+h)w2H&QKp6lbY;&z)_j0FrW,W82aL4WTp/tB1E:6O4,0)Ve*[GfTiH' );
define( 'LOGGED_IN_KEY',    'vdO*R*43d5Og+6ff>pC|:VQUysH#o3Dd8xf&vAuy]{-.H2;g}{<l`XTU9uo_ny+Z' );
define( 'NONCE_KEY',        ']/$Nr:~$YWu [8a)Ru<*C<L5MhnO^@bE4q.iwvaIdDlGF6 @FJO$6H/J~hz>!#D)' );
define( 'AUTH_SALT',        '^|7rcJo}&0e&<[}7c[r3E/zbRR@)[a&tBnDeQEF-b`aRlo5d3@gb][FO5DH_^;p6' );
define( 'SECURE_AUTH_SALT', 'R@)Z5%W0:bI^_#9`ABqnE/jRh*PvaSXaO}8.lvGyx|Q1T J0MqZ6]+@k~:*l:p5`' );
define( 'LOGGED_IN_SALT',   'RMGLR}tyaxI>.1raq[W6q6tJADm1DT8vfZjzy$hUmu`PWc,h#*=gC<T;CDCcKv=+' );
define( 'NONCE_SALT',       '@^Y5,m4+w4&(r2J%m[8 $aY!tW(1e=#5AyHX$o(**DT$f@>&T`.8tsoH&EboGu7j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cdwp_';

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
