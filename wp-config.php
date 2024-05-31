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
define( 'DB_NAME', 'simpl_vintage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'he!N38{>0(hwbc=eNNJd}9^S=4X97Z_~/|1ebU?H`#dU1zNtP,rf2#Xu@$mbY3Q?' );
define( 'SECURE_AUTH_KEY',  'xailcbQDRrJFwAz*ZL|]@g#$FQ3b/RlBG+oq/am96!c~FRh+k254RV^+`oOCLh-&' );
define( 'LOGGED_IN_KEY',    'IIlC.#(=ganN>/.jxGRDJ?VKF~mNQ=^J.8dyF7q{%IjP@pWA1QgVn;<9IF<r4GR}' );
define( 'NONCE_KEY',        '+ZS;YPpoX^F64J=z|)u_i.:vvt{ZI<iOnL)U1Xb[4qD/t)4V85ev,em8*N)0#H#S' );
define( 'AUTH_SALT',        'N2DiTy[`MCj-]j?sP$NSt$G2(1mmQkFCfD@{/k+PfMaETviD/N-$h>W*i!v1mNs6' );
define( 'SECURE_AUTH_SALT', '<y3RACB<V-;Gb}FZ eT%+[&9B_t?bs;LhZgS+T ,.)lfayX&E38hvPvP~M(8sPo!' );
define( 'LOGGED_IN_SALT',   'b|+/s#0ZbW4&ydPE5hK~SZ)y!XBjb7//>H}PuUKbav$H3k[!/C~hg(miDP6T`i<X' );
define( 'NONCE_SALT',       'fM59+!@ZSR;i~X| [5VMd0mXM0KN! >v_-_>H*9YHxmj9WqBXs`ojt2,B1e0iaAR' );

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
