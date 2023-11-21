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
define( 'DB_NAME', 'pt_adi_ayu_alkesindo' );

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
define( 'AUTH_KEY',         '[Ooi6U}O]&;M.uE]<rg`R*z~tD}RUx8`<u.jZ<@=#idPR+WH$,xRd3!AddNapRWx' );
define( 'SECURE_AUTH_KEY',  '5*R[@R5b$!}nmeo`Ju4,5j2D IC0DqvDn!P2cVO6 QX&:3/o%&2F..hU/OxZsNFi' );
define( 'LOGGED_IN_KEY',    ')]?k}F6=boPw=2>9 ~hRX<bx4Y?6Ez^g,;&ob1l(.VMaK)U[cb0H?XF$(o=s{Z4!' );
define( 'NONCE_KEY',        '{q@0xM)[11PLJUfa?=[lYY8]h$<nA6-?~Xm?lJDwOLk3Gd4=pa5HF`$RR)t!w}57' );
define( 'AUTH_SALT',        'j$c%]I5gVE8LiHr[Ez[-?@bZyzEJ{mJ>vmJr-CFL%:K)8hLU5Dkh!%0HkR7b6S3n' );
define( 'SECURE_AUTH_SALT', 'xX/uYy2A}VeW=}cj34Q4c%7tZ`|j/J^gq/p!6y9GtkX>3IrLM9gR7><I=Z@GGLoD' );
define( 'LOGGED_IN_SALT',   'gm-NbP/WKHmsi~*!znx`9i+qE5k^QZ$V07o][zs^M?!w`*QufpCCI^>nRLu!BSK?' );
define( 'NONCE_SALT',       'd6;,ilA{Ik39C5T(%hoa #//ok,rBa0m`~5b#wyU$`[c `AG65 K+A`K!BtQp%g[' );

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
