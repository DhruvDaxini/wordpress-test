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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']N2x:_&YVTDKT%nEZ9I}6!7nRC7Hs9L~k^NX@Uq2_/~h<XeZ]Ng2uH(L>2KrIdDx' );
define( 'SECURE_AUTH_KEY',  'Y2Yr0ChB[@dO($[8bXldq]u615oMcbVMNd((b:(Z]?~@+]VN2f(qmmX#3tbEC5bv' );
define( 'LOGGED_IN_KEY',    '^qDIA-hm+U-aw]xP>I8gUSp lKDy>ewYou,(TtIJ%hsZOr! > hp .%91s+JXH[!' );
define( 'NONCE_KEY',        '-;)].TaO=n~7<R}%KXm 8V)@0z?n0X5b+f?jF x>,/uFXVN!--`jqQ`l;jPV6VT}' );
define( 'AUTH_SALT',        'Q|i rwe_zWpcS{c#X@OL&ZSvlTj+bI_mF[i[nRKyOhcltZOZCck+%j&bYk+UKe#{' );
define( 'SECURE_AUTH_SALT', 'AjvZ;(659|%>v9TMY35};WSrzVqjI]t$hb_$qyo^yrObch9&F%nKV$_5PFJO)yk0' );
define( 'LOGGED_IN_SALT',   'Bb`hoRG}QNGX*]d2W1QJopgGU33[!C2WUnSbsBniNu7eC3<dU2DCRd$G|AzpvY5$' );
define( 'NONCE_SALT',       'rcHQwp@j)*g~9LQpY3R$yRWuqPv-mx 25j`+ZN5Kpjc]$vX|V}f>M{<CqlV[u>$(' );

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
