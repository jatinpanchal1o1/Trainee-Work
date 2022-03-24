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
define( 'DB_NAME', '91coupons' );

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
define( 'AUTH_KEY',         'rSUVsW(&:ja- #GJx[yWdrrO3-D$~03X0<KZ~)PFpMG?[V)GZu:Cpft`*QFdn|mi' );
define( 'SECURE_AUTH_KEY',  'g;) ~i8D}oMa,A`CX-0whTs.y.&,A+nE6G_rq[ &Krg:rse:bsIx{Wu tQ#h&1sI' );
define( 'LOGGED_IN_KEY',    '%f PD,=a@g/S%4H<EBy_&Z2vxv|LE)8FCj8kYPNsL>VY&)K9EjH?!=F;B.DZa/dY' );
define( 'NONCE_KEY',        '[|f?`DL4C-Nk&+;Kgl@:#o}6O*BEl@u1XO=g,Kvm40xKo#q #+. jL7#Af}t>*S`' );
define( 'AUTH_SALT',        'v[!fGLdem9S!qk2J<c;J9}4u^/khr1 R*-}3g4Z<r4UT?leIokP)o:Voo3;P7*f1' );
define( 'SECURE_AUTH_SALT', '?MwBxZw`eE<Z#xA`TL!.IGeO}qaPlO!Mbh=0SnJYFVSwd#<~u2xqI<lb=G5azjIV' );
define( 'LOGGED_IN_SALT',   '|KN3<tC6LlX;2<ln;|!FVf}If.&Q4v ,BPZ=Mv0lTQqyanQVcC)k*X&t9XlrEbBs' );
define( 'NONCE_SALT',       '+*82Gn^/&wzMDwdB[Y{nC;c cmVB/|Ntw%GEbnO[mCXjB.?Yw;-krSyMuM@IyP@Q' );

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
define( 'IMPORT_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
