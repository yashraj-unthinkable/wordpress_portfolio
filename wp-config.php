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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'nPp0emm^o.1<5HhM-|l0w`Yj[T:^c-vFzYe*zM1ge%Nx2~1SjQR12qRP>#Ca2l+&' );
define( 'SECURE_AUTH_KEY',  'Ll+~NSg.{Urz3m+RfLV8a[Hm*u!D$JjN:5lkg7791_cG?r3_[p0<M;J!fZa7;!+,' );
define( 'LOGGED_IN_KEY',    'zt),tIRyJTZ2ryL f_Dq$HHX3XcL# JyBYoOe4&Kz2Zj0.?Kf%6HcXkwD#YLh4/H' );
define( 'NONCE_KEY',        '&[;SM~9kj4Hh(701x`4>lq6KexW=mn?6_zOtm,vXU{F[m7E` 9{)5@{N{7<_vq:2' );
define( 'AUTH_SALT',        '%gPv:%):PwHP_X]~&qLj4,T!k@JG@yh{:QC$c`h#ig$I@@)xs9y=:O479,-RYvVN' );
define( 'SECURE_AUTH_SALT', 'e6:eQ*G>ah.jp<Wt(W-L.L9{uX}Mf~3-IsS mYE`n$:T,kJvSq+LEQ36mrT}+?uF' );
define( 'LOGGED_IN_SALT',   'm7m%*F:vI:E]{&E:_m~DFO^1j] B5iH P^}}u7PV;&%w|@kj;<bfw> EtuH%Un{6' );
define( 'NONCE_SALT',       'qY{fyWuwd7_TG/>2Erm:~*g`TXWqKThi3#]-kn(<lcK0G7b=+#V,a3@eUT$ 1oK:' );

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
