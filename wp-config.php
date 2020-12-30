<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'ZqsZcZMH2c' );

/** MySQL database username */
define( 'DB_USER', 'ZqsZcZMH2c' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NwtqQtG2W4' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/qo|s.4>NR}A`;HgwXH  bg+Y;e7sag(fIP;HS)X^Vwpf;*EjuFI+{#,c8_i?Vf+' );
define( 'SECURE_AUTH_KEY',  'pxs+>)FI2i1V07gvFpRi9bq>%`5$d1U3}Uukrw_P(aMs=a=r==![.`!o`e=Z#E)H' );
define( 'LOGGED_IN_KEY',    '5Q=+a><C>cwLO7r[eg$.SU!+Xy#*(zQl#V1DnW$TstiLIOgoGwkk2Yt^_hbd^y7)' );
define( 'NONCE_KEY',        'E0= 0b{PXL/*E`C@iycLY{/R3um~Kx]b?MJ>2@jOVN{x jDB.&MC~#]!!;E#lp([' );
define( 'AUTH_SALT',        'Y}%vX@>(tqt]QFkoL0Y5t|t-XH;K(eVIhA9u#bqJ,g&qlz!,N|dqtY0i[.U+58KN' );
define( 'SECURE_AUTH_SALT', 'q.r:WR!W.(WR9sT;`,KDPUxPRGj+L7ilA4q3Gb%<GRvQ]gbp}jZx{%~:4t:sG#5E' );
define( 'LOGGED_IN_SALT',   '1&-6(?MA67T&;>xHT(|(>+B5#>Rr88l8LH?W*Lbdr{Y@(/_Q/7O*b/$Z?x1,?p!D' );
define( 'NONCE_SALT',       '!8,N)b5h^Dm@8g{Yg_:i&exv?4[P%A+Isq*N5K&zz1<g8ODGVuw+g<waj!?&|,g;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
