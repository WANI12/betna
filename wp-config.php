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
define( 'DB_NAME', 'betna_db' );

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
define( 'AUTH_KEY',         'e},Sl2@YW_W^Hi9Elln[FXXm|qPz5.E$YQ}DCE%!.N/hWkbJuQX7 :lNEBPJ:D)f' );
define( 'SECURE_AUTH_KEY',  'nk6xI*dBzHF4B$;NXUIZrtKs02_Ii-~e#gSLhh.~x!RcT9nimJIgoGjj_w!BdCi<' );
define( 'LOGGED_IN_KEY',    'Mw&!^4m|^.{K_!r$_{<q4rsH,ZoGb.a)hsL.N)NvrkM!cV{@ UbMO*}P]bhcX]KV' );
define( 'NONCE_KEY',        'AGd0kC<%P$G~%{m&r+,8$bxF)Pm9%vZFC&O?uB=/BVuzVVVw]XE<vWk%)tMY~kJV' );
define( 'AUTH_SALT',        '4;Q#Q/cx&]LuPZ$JbM6hiuaNOGt<$8Zh9Gf4AqS4[=8QQiX<<9&{Atfmjb^T_hz-' );
define( 'SECURE_AUTH_SALT', 'YH>R)Lp:-/FV#Z*,Whi@A7w_BGO)(WM~bF GQ.P(61e/b_zg?Zl:;WHcSjGcgb0 ' );
define( 'LOGGED_IN_SALT',   'A7@E>Co4Pk~eWeW9z2lLP<nt Gc+qAmq45VT0$FiZ=|T!+J6dG}zX>/0F-.7#[U1' );
define( 'NONCE_SALT',       'O_i[&J?/U4JtCN5>em?nl+^Q>uob1<7UFo^=`PauX[YSC*{/DR*cKqkR6,#<_q9A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'betna_';

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
