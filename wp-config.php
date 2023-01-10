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
define( 'DB_NAME', 'todoWP' );

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
define( 'AUTH_KEY',         'KLhy$cSW7OygR-cZ84VoiFyK55hTFuRSPzbz~QF<,Oys.()-:`-8m6r/|EJkEga<' );
define( 'SECURE_AUTH_KEY',  'crf#],XN)U.f95S,sC8$ *QE[Fjtmm+eKz<KjgvjqeipOrZ|;RwCRo%GL+i]XX&v' );
define( 'LOGGED_IN_KEY',    'xO>E{@^]1`HTT@|2.6nooJpFR:QXz<g<Z[D/qRu:LoCiHHqikqtKd7L/tDXp|=cq' );
define( 'NONCE_KEY',        '}t#I0alv/`0?Y>>~B0gOg0-2fJMOIgrQ+AAE<FX3R~C%%kum[Y=)54MkQ;0wjym7' );
define( 'AUTH_SALT',        '3hk{HQ2M(l#!s5{)k|RVlTgL.6l]+g?p`d`p0gK[hKkdz$[o>a[0gn+*Jj,Uoi=g' );
define( 'SECURE_AUTH_SALT', '`<xs0aMo*Vn<[+W.<-a56d<(CaeBE[IPC,wTq?`B_(MaG^ArG)6eyaf+,:rZU}I%' );
define( 'LOGGED_IN_SALT',   '}#v{gzthWFhl;m<+BmtBY?g4(IL,_Zf6oie.3?a<Ocsl1b:=E<vgF}6e(?bIWUKb' );
define( 'NONCE_SALT',       '3<x]^[i_-vAu&`zN&#L|JtW%TbGB[-cm:_-,5CSCy[pTrnB|9;:jUHztb;pw$W[-' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
