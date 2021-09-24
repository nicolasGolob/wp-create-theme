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
define( 'DB_NAME', 'wordpress-cours-creation-theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'G1=:+-MvR0[:e&7N5[[f+P>3tPXxQ>.C2Nn*CAr^7LFEB{=n**NH6(voz1wmtG5B' );
define( 'SECURE_AUTH_KEY',  '<75<B9?D3h6&-$3ZLu<l$wa P{[Dl(*dO`hR6cD%(XH?G@3-~J]2;uw2&wZ^fn!w' );
define( 'LOGGED_IN_KEY',    '.115^<es4b5>3y3`?v].9 SmG44,y=R?oRO6)R `fV?Y%K*s.ugVqDxj_#,oiPw/' );
define( 'NONCE_KEY',        'gyeujil$?2QSmKbgdxZF.qs9Iy?V9Wy;m3[GFv<7|%mhvq,#h?[IO%;#M%.>ELDh' );
define( 'AUTH_SALT',        'X.1?lhW{.!<`&_RzCX0VQC IwQ_mT,.@B;Aaowos%@Uxt!<4$}[Bg-Cj2.93OHoT' );
define( 'SECURE_AUTH_SALT', 'VDr$$jP2/,ZBYR}XF%/I@8BC*+t_e<E[g)Au>|P_$/Dpf8CIaoh`ODPx1#fNl_%x' );
define( 'LOGGED_IN_SALT',   's[$bqa2db:JKX5%&`dZ!mPS%]Gmj ~0-fC%C)^54uM|5aCsZ7<5:a}iAmz*yNoY[' );
define( 'NONCE_SALT',       '{7rU<~:VFI-U>Z?uF#rB9fYP,/I&3c3q/*No2Hx-M1YEaX*y9HB1aZ$scrygQqBl' );

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
