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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Something3asy!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'd(tp;METK.^>ZH-LTTH#g+i!Ss-Asr]m|(+Yr$=e{y-e!CR3R74A9=gx4BSnN 05');
define('SECURE_AUTH_KEY',  'j`Fm2 p-{6RC@@I1l}8!@W3#}h3<F`Uo0Fzeqc&RQ9_ C*`DW-z`YiQ>?2>Hr uV');
define('LOGGED_IN_KEY',    '=NC8F!x<aF<d{N<-<o|PDS5n-AbPJ6wfh%]R1S%b$)}+&dl|lP-=RQ;4?gl?|V= ');
define('NONCE_KEY',        '-C*c0m@mB2d8G}v7$Y?a$_Z{pf).P(g}t]H*|B9ydf]+jp3]H{dQM+.m%P$gbV-~');
define('AUTH_SALT',        '%I,]D`[m;hkq!JurDks!G|F{{@j8|Nacgen^ob3Z@|)Cj(}#t<C+Nh9TY@<f$7y=');
define('SECURE_AUTH_SALT', 'f.dXKqBJf{LwO+9COD]DIJm|9{:8Hn?ZYyjrJfWcn,-Kn2lIFZ$S(,t+-c]h+$UY');
define('LOGGED_IN_SALT',   '|ag(2dD-+K<@0G}&-MxbaC2|zmD; _Dl1>!R2(NC!yMJ-6POhY^}-N`cx{dWkz3C');
define('NONCE_SALT',       'IFT_86uvufn-z(L}pS$R!Wk!)L-%.A}2<[jR=c*KX)d%<G0<hrut3nWnhoHtZhSX');

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
//define('FS_METHOD', 'direct')

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
