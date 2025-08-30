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
define( 'DB_NAME', 'watsons_live' );

/** Database username */
define( 'DB_USER', 'watsons_user' );

/** Database password */
define( 'DB_PASSWORD', 'WatsonsR0cks_2025!' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'N=ZZt[ep]).7Kj!GJ<{3yQ|ri qq+w+Ccb79S{&pG+*Gp|4+YsbOom5(KE-TN=F%');
define('SECURE_AUTH_KEY',  'kd3w#<eI9^2YFLMVP_=~u&>?+G4/Qt_{om!9ZxT zUlS^>wW}C$_)|=q1c&331>{');
define('LOGGED_IN_KEY',    '+gO>3;ZWH>S>C-.-Kk;AJ$+AYq{^%gJWjTn=kfoe{h{Q60izOzj-_oxO%kJtF4r4');
define('NONCE_KEY',        '}[J L)CD{+!;+qq8T L;h+/;b7]i`J#KITJ5h=>$pP{/+6(k-7ZRx0VIks]V><h5');
define('AUTH_SALT',        ';X[:Lo&Jzj1D:a0lO-rKBg;[Q!LzT^~JJR<CP91,+_1o+Z&x[8)wTr&k!_.k4doF');
define('SECURE_AUTH_SALT', 'Ba8;CY8u)V7#|T!KduHQ>car-$]N_1^.7vU%EuvXDInh<_s?YeJje?!{FSyw,%G-');
define('LOGGED_IN_SALT',   'U)MK{h^EM7M2`ZPN9`;-t5o_3BM(cYj}56o4//ha=[g1Z?J:M=VDlsqb2x;!_,uG');
define('NONCE_SALT',       'xUj}PefR&k jsJFkdzYS+YMTAQqLB@ozvN5=AB~:cRP.)iGAY+J8P3M;v C!E.DQ');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

define( 'UPLOADS', 'wp-content/uploads' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
