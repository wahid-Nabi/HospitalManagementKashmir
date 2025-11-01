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
define( 'DB_NAME', 'hospitalsystem_db' );

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
define( 'AUTH_KEY',         'l.tKws]Tad&)D00Xt+SLiNJ8hrR_H6i8e toFXh<@B_WpkfviR?gIscahs)ZT!ze' );
define( 'SECURE_AUTH_KEY',  's72-ko=]TdbTw[zVWP}>X}`[=Dq>Gs[{[5.m~Ng(|1xbZSid#B)3TmmkeTRy1$)0' );
define( 'LOGGED_IN_KEY',    '1:sBD=a]OQ(y7jAeMoKr4e4l:$%3Tptg~yY<7b+t_{Zz2fAGH>[JlRjZ@]D+p:f7' );
define( 'NONCE_KEY',        'w;Q/BQa*^gzl9T|a1Y|uz/Yst990&d-$svvGmx`j>ary?9{q39EO$s&N<fBY`lm}' );
define( 'AUTH_SALT',        '3Wu$?3:(X{FAt>h1Ly%d/*26MA~G4Fv`Uw$Q#K!|pz1=)j)<q,0rMhF%!7IE%L_~' );
define( 'SECURE_AUTH_SALT', 'C3T}gG2]Q@3t3+T;Ii,X!>|i~XsuXPR0[B9?sMW-TY1}d7>=vIljZl/7j*V9Tk$5' );
define( 'LOGGED_IN_SALT',   '-.crF$?I-<3l0>oGwkhDR0<q>Z9V6kCad:g{-<3B7Gg2u`K36yDSxkwUWN?[cykP' );
define( 'NONCE_SALT',       '=/{Cr60+TNmMpuHs]2fT@wDnz Q3(JmX{{<u mah|:.>x9niS2=7eH&~T6.$dK/b' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
