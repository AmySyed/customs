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
define( 'DB_NAME', 'customs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'H5`!u+]4~.D_hlEjFgRt7F)oC#u>QW~6H&$6!-nQ&8/~?SMyHoU?>c&9<_)}:*u/' );
define( 'SECURE_AUTH_KEY',  'rQEGhe$96 y1A?qSK..,o_!#M;AL$j)!q&bpwPx`>Jusyx(KON6.jPrGp{YA{A#%' );
define( 'LOGGED_IN_KEY',    'jyyl^xs?0BYt<R;(GGkqkAW)b*hxhZO9a)#(?4 }-4_{jA>@H;y}*)zk*AP^ q2|' );
define( 'NONCE_KEY',        'ji+eT8YILi_LS8_*W V@kLQWN&8:_;<qTH`5R)E3}iMEK?GJ:y)q9E+gsIfrn?vf' );
define( 'AUTH_SALT',        '%uedv+cv6TO7k77uIGs-@l>ykq!.*Rz[|EtLRmvw[F{c4HIX2> o?-76*$J#lZzY' );
define( 'SECURE_AUTH_SALT', 'PMHFK5?ky]!l-w:{s[fqW=>x(-(Z=C%r)lhGkN#1Vymd?N](hZ*-Ve+b%{g%/xFN' );
define( 'LOGGED_IN_SALT',   'mJOi9.BgIL1M$vGcKRQQ|^8JTGN,72H{f>L%P~@`CrhTwoTfF++9&aopgRh=_R_f' );
define( 'NONCE_SALT',       '.,Qz{).{cbdnhsqI[`/,hh>bnf,Ph66%gSdKCim]o3T|,L$l,qg-8Sww~0d*}0J(' );

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
