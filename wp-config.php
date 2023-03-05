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
define( 'DB_NAME', 'Findgo' );

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
define( 'AUTH_KEY',         '94GdxK:f^*YNWMi[ZX.Vdt*@&t?p/WW[u5WxLGIrF%wLSVT`v#OOkof,XC{,gX~Q' );
define( 'SECURE_AUTH_KEY',  'z!cZ<@*V#R99H9u+8275-OaCh!op4Drt]heLYJ7Fmu_9.2Y2esv}Igr.c:_&tc*T' );
define( 'LOGGED_IN_KEY',    'B=>@+dV-mnTRjj=d}@@a>d5phg}]tg4b#AZ%ov89!(Io[(!{Gf4lCs#TfGFN89vb' );
define( 'NONCE_KEY',        '7JK$EL32`5HHXyF7uLhV<Ie[97zq{$4fDX(O ?5(.W&<$-_}~a8>U)WEsubkCA~r' );
define( 'AUTH_SALT',        '6U:&{i^Dy;8bS_OI@q,?)OFr/yKQun6KGJdbW3bA#i79JyR!)+j #b(Dbn$CG;P^' );
define( 'SECURE_AUTH_SALT', 'zIZ:TI@(|/2{|,e.?51 >4aM:%M6%E.4~VO<-Fujs94=s}{<g%Um,3dq.w#02I`~' );
define( 'LOGGED_IN_SALT',   ' &5@k#T,4(({@EBQoS{&AS$s|} JP_PY;~JkPS? c#Jr$69Vj*LqZqLc1$.qtRwt' );
define( 'NONCE_SALT',       'Rhv9}o-/Ms:4O6002.#4.%.[U-yaB^$5`Q_xa|dUX0D6B,SyY9NHU!*s<8Z,+;df' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Findgo';

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
