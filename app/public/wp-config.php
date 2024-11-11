<?php
define( 'WP_CACHE', true );
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
define( 'AUTH_KEY',          ' !}c4ZvDI&P~)-K{k3GkLv<Hus:m)iv>2gBLD*8CR7pr(HCf#z!@Za:2fuf-::|j' );
define( 'SECURE_AUTH_KEY',   'GYYILkd75*hu)V+`NIxx>R[HN{q!Eox|fVY2Y.[qBQ+SgS]cj2G=:jBqS&3I5BQ=' );
define( 'LOGGED_IN_KEY',     'Uq%c?4q,yS9T::>66~CZSS>be^r=PP{:q,mnKu.it=!cEAYY`jd!xwg337hf&aO!' );
define( 'NONCE_KEY',         '*it}7sRv#~*qv1&%Oh5P}59u:mEQEM4QjY~vBg~_wrf1fpquFt-:/]R&;gj@%p5o' );
define( 'AUTH_SALT',         'qGy[cbX:B;AVys1*BiE[[u/~ 8!_G<Tm?zAmFgj<`p$./<G]z-~M_q12tXYly5JN' );
define( 'SECURE_AUTH_SALT',  'ot|D5qaG$CQLhF873&8i|-i&W3N=Fp;z`;R(#[ *lR/0KPp#_@nP539=8ER64ZW+' );
define( 'LOGGED_IN_SALT',    '2/sgAf:ZCt-q5cw~UH0be,GHQ#@$5EQ4fl6l/U?Gg5(0BOx0z`P>eg+<uekz4>DE' );
define( 'NONCE_SALT',        'Z#Bw.jj_-?ZKzK1p_c:n!tSx1}v`cueaX|+:?Bmp0_Sg9D#4R_j:}@H8<TgI/#xU' );
define( 'WP_CACHE_KEY_SALT', '.ZLB}KsAMQ=+&@Vykjx&Y6bDC( ;kQ#[Z,M^MqX3 XMfw`^.Lquc3N95P@@ob^:i' );


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
