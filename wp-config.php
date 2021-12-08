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
define( 'AUTH_KEY',         'Tm#%HW[jx@-]u:-nM2jH@Op^i~L+o@%AwDmZ$=8xm&N~V%FB%*IM7s>TV/x X,+L' );
define( 'SECURE_AUTH_KEY',  'lmj@et(Xm~}a]Zrq^?#]hvjg!:R4UgGk(r3c=jJL*wuI,^Dp6sru$Ql-M~o!lhCT' );
define( 'LOGGED_IN_KEY',    'hVj]-R?VjK9U^mZ)d[g?}Z?M/E{cGBOH>Al{PxpmDX(QHh*A>%1 VUJEjxh%l;EJ' );
define( 'NONCE_KEY',        'tA*?HfNRy~;e3V8-a_uG*WLiMLk{//l@,(e)UD/: lU3ekS-+>e^dy!u)Dae&Tm6' );
define( 'AUTH_SALT',        'e,j*$x#s1eA%#Eo@UzwX1d]:k|/&<ukPySa%`/2fVsU7+Dh@cy}pXaV)QRmHU_.n' );
define( 'SECURE_AUTH_SALT', ']r<jn!cH>gAV&c5o0HpTmi!K}#D.k ?j96wO6K5& owR|} X-rgstm$@q3WrGc5i' );
define( 'LOGGED_IN_SALT',   'QHuj_2/:lM</}2PDk;kJ<|y` e+?FsU[?Ga|^27!7M=(>3rnH[C12(v_[@22$em~' );
define( 'NONCE_SALT',       '|=;-,qiBS8^ouT:v2j%u.<>SldDR3@M[tATrh<B)t`l{[7?Bl+x3|i;$cF+eiEO^' );

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
