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
define( 'DB_NAME', 'staging_wp580' );

/** Database username */
define( 'DB_USER', 'staging_wp580' );

/** Database password */
define( 'DB_PASSWORD', 'vNGfpfcExQrj' );

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
define('AUTH_KEY','+m.vZ|=fq-<Db*l4$M5-^bW9`*AlZZ-A|,|4t%#Lg$WCA1|`CmXvx:t^$ZZA]I0j');
define('SECURE_AUTH_KEY','nW1v|+NmVhGqnJU27u,3:bN},F33tCTv[|dTdwJ<SdjUMe`6W$X/a) ]$]Ctt::e');
define('LOGGED_IN_KEY','_i^*#~p`J:%S+zu<7&ImpF~Z#BcL_lq<r#5#gJpS2- HDcqJlrY#$Vi5ESxTQ+8r');
define('NONCE_KEY','-**D%%:~ZO<Fa>@HP):[!x!JvLzZA1KH8TNeALiw4#o|TKf|ov**0[qdV&7)H2N&');
define('AUTH_SALT','91M(|/5=eJ;-6>:-|91dzVGI&-_>J|3[Tq(5z+>F!k(|~!4SQ;<1q.sm_1tnWGvD');
define('SECURE_AUTH_SALT','@+Z|$}|-|ZO):6z6L-}bM%Bl%Y,mF[*LotV?6Jv:u6WDzT<;,((QjMA=q%zR)Y8H');
define('LOGGED_IN_SALT','6>cQb+-BwtnI&[s|V#JXUFM[5VQ>!v}(n~gm^=.(<2nZn4}B*-2s!/N2v)2VL)xT');
define('NONCE_SALT','R5_-1OdMjqyVxF5ul|bmm[qrs7-MH|__5[IC0WV}+Y%qI43jjK)AtJrr+lzFCY J');

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
