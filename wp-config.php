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
define( 'DB_NAME', 'dolphin_two' );

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
define( 'AUTH_KEY',         'lhv21c<} lbnEG,^|-$Jmoud=[5gP=_nWa!||PX?uz;N?}+|{8kQ-5 6E*GJ3bih' );
define( 'SECURE_AUTH_KEY',  '+Zb]oZHXu8as!Gl8d)B[oD$NFhEXalTXO%[5B:?.rGz*oB~(gU<1[inPU$(g#*s@' );
define( 'LOGGED_IN_KEY',    '-UrG+$D:~Gx>^8faB<QV5h5-|~,{Z;[c3dl[g|3CMgYhIx<>+f& }W$v9V6RAt2q' );
define( 'NONCE_KEY',        '39*C$mDxfvY<1r}(qRy30vBQY>Zh4$&)0s@2oW bgI8Ye;m)#XnR6{g9>yw`oY&/' );
define( 'AUTH_SALT',        '>q+p,e,qTSi|(i;IH=XmDo9zcv+alwr{%e[SuQW>.j:aX]8tS;]tk!^v(-nYaQda' );
define( 'SECURE_AUTH_SALT', '@CF)WV&gK+XL+>4U#WIk~>;;h3grr%XtU(FaoBzB%/*hA}xXfum0MyU6at,GANvi' );
define( 'LOGGED_IN_SALT',   'F_1JaLtd0;ltdXH)ihAAJDs:7Y$_UT#FTGdT(9E*JhJ&9,@XEn!Y6e0V[VZOrpK#' );
define( 'NONCE_SALT',       'wW+(ig,zDZLHY71?Oyss=ssV(JZfx}/iwM/J;P5P6{Rf@!l[ZpjO5P?QR(4tj$tO' );

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
