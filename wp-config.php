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
define( 'DB_NAME', 'task_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[FTw2#*vR*tEe+wK5)|0W,gN,+Cc-k)FAsa}h)Gi>ySjC ENF8u//XJzWE&PQflA' );
define( 'SECURE_AUTH_KEY',  'HRctA<(yT${^[Blt#9&<Ky|&D?zU4|U.w:XXda4SW0mdHM849oSUX.H&x0gn<gq{' );
define( 'LOGGED_IN_KEY',    'f+wZn~N_j@|CcE<fBuDT(2fvW#uM -WShXT^_8TYv[,}CfvB=!YKNbP&(i78]T%P' );
define( 'NONCE_KEY',        '?~#tf5|,+|)fFPJdk0gYk*)}7|XH qLmsV7VdK^{9!R9s%p/?=juT&%=eQLhoGjj' );
define( 'AUTH_SALT',        'Uk:%9exo$qayYl@~hA(ZhHzHU. zh~5stYRV(@r4s6)DTQ0b|F1fSoGk&Z]o2;cU' );
define( 'SECURE_AUTH_SALT', 'Y+7,](Imz&oWM=EYhf&i$+xN*.9cG +-1X!qA@8#]w,_T.!}VPZm<zu)II,CHDJ~' );
define( 'LOGGED_IN_SALT',   '^B%_ xUJfj]?UXNiFtQ], x U@F]bHEyxYI/ady6bds2:(pojv|w91A|+lu,*P=Z' );
define( 'NONCE_SALT',       '/RK(Vt&haTrLGjhr:^Ow<kMHHbE@@<,CBHRjVj>}|%!-d>M{|W1HlyfiH[8!/8FX' );

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
