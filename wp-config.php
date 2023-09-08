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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demowp' );

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
define( 'AUTH_KEY',         '1{5B}n%SPPbe1)+!2}U!StgLL%eVeVqpZ],N/&|1N;0lZ9wS_[fgR+zg=L.kn7g7' );
define( 'SECURE_AUTH_KEY',  'S(!E [Lk_2$P<K{IR*QMJx7(%K;g!^fx<VSM^)3]=NL)#k:YFG,RtC7S*VW%7g&f' );
define( 'LOGGED_IN_KEY',    '6f~N,ma5D S9UP,NX(8G@$tsp:PIO~cybN<1ODw&.g/Z6 wCh54(_^G!wCVx }q!' );
define( 'NONCE_KEY',        'VUkGv}6yI]0HWD,x| Ww8sZw9kLp$0A2ABO@&<4X6(TcMF#%,-{M>L)<G[s{cM)y' );
define( 'AUTH_SALT',        'P:Di9k!J.G@<n*SN6n7,ChB|%fb`?&8W;kyhPq8+*ea6|h)<h?Q`9f%b(Dx0vcCW' );
define( 'SECURE_AUTH_SALT', 'cPo]%[2sw1<MQXf&SJlC=zHi8u_Rn+78,l_%{^fygQp#8SWIK&yNo Ab&NFh`/N=' );
define( 'LOGGED_IN_SALT',   'cjcv@V=Xq2P<B!B4I&TY_q|-zG/x5x*HElBi6JkvP}7y`(5b$qh+YGyKnu|$P9DP' );
define( 'NONCE_SALT',       '>?Ep!Q]PI=n{zTkx)Y5{I1JDI21R*L:;Z?!;^7y8?r}}]!BzG7p]*V{Igw&.$q[W' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
