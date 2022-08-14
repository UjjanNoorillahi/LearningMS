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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learningms_db' );

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
define( 'AUTH_KEY',         'UGm{47:l~$FIPL-cJ{H#$Qc`ak+Q:D)`7fx<pb01]!E,Cs,H!8~YGyN[.AcBhcNL' );
define( 'SECURE_AUTH_KEY',  '-?y>003>>*tzxw6U[E*~|V;I?zU<x`J[yIQ?ToS(d*CELL4*iz.N~|%=BgnK92t{' );
define( 'LOGGED_IN_KEY',    ']LqKjBNf]UFLDF(.Mzan:L6SF0I3W,I$3 #^SK~]w(}f<LH(0i(#.mc8koY B{[?' );
define( 'NONCE_KEY',        'i.g+]ql$Iy]Tk*Hu;V=3uE D.un`RO>wm?%A|`TTB!k6hP?:{nH7SPwqZe_%MKu)' );
define( 'AUTH_SALT',        '7ZABG^i+lm}*(.lvDR351-C08DSVsA<A+a!_YP;Ru}l_ P8MqU#@V,_~(eRm[ S5' );
define( 'SECURE_AUTH_SALT', '$+5UnpiNo)F1g%r8q>e7j@m9=_CK=~>d8D.jaCNj+5|]a^!SZ4dY-Aedop<JzvF1' );
define( 'LOGGED_IN_SALT',   'zZvWg?Z6<t2*oi0)x& ]S 3Q[T61K}9U,F&Xd+p`/VH;k@/Rc.;uQ]ol;+zlD^a4' );
define( 'NONCE_SALT',       ',*T0Z<xL*bZ1,~;`i*v|d1BGEpBuP`S3uN>Sj91NDX<fy7h#G=]^PZb2xtJH+cKZ' );

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
