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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'TNl%3@7vD=)~b,{;utGfXGiK|?f8-E|+qQymT6Om5}ST6Ho0xC4im,dAsA_Lyjjm' );
define( 'SECURE_AUTH_KEY',   '5i5.6.G3h;tU]47fc-,cZp7YGCf+8|4YA6K8 .lW,RRJ1,t`NVPXO~zk_Z[U/.EG' );
define( 'LOGGED_IN_KEY',     'ZR1~<KuaOq&TKjF50irT.NQF(D2;~w-lQh6IG<BRkj/L~+Y[k$QC@.9G4?XXqL^h' );
define( 'NONCE_KEY',         'yDX[6hMj*Lxvm0B%xN$a^#>d(i*YD3Ry@@KQp.Qb7(4{/_8t~Utu}xsTv3j{e12n' );
define( 'AUTH_SALT',         '58L)+NYD*gM92-GLn8_HP}@N4|gz#}m[IWtoxL1XK3wU?bb5{A}/u@%)h*tl$~9g' );
define( 'SECURE_AUTH_SALT',  'jP*2; 8OwF:,9I%VzGmq8rfDJ[Kwn(cXC+qp/dSM5BEEIFkOnx3+aljw|Ye|~,3m' );
define( 'LOGGED_IN_SALT',    ']BRG^O1<U1HVc<tlr&e}Y^V[2,aLW4[sATg; 2.q0KaH )cS1aB%wQu0|}s*<M2$' );
define( 'NONCE_SALT',        'g?VwQ<3o:K<OvD?ej /v0lrwy(T^s^QDk6gi;_zXr@|S#8OLp#+ib[+n)76e|xe:' );
define( 'WP_CACHE_KEY_SALT', '+LmiMi<Nnn}[T<P_M.U4*P)fkkGUc4R/^>Q3b?gY3w.uUpIKG*vWhU`!Wift0sWM' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
