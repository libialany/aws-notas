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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpress.cq2e8vjni1su.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'HoD<l*J52c6)WTWm=a3#!C874[wyK5&UH+7IX]s*z8RXn:W05D99g-S:ANr@5 M9' );
define( 'SECURE_AUTH_KEY',  '>TouQG;GA-o1,!G0:|K0v+x5E3kd8BzX.x*mr4jfC[VMFX-nViM kcp#./o=qA;J' );
define( 'LOGGED_IN_KEY',    'p!pMIOG?3j&pJuw{Q^ht@ITcs2Lvm_v+Z2Y|t0nNTn1oyqAt|5a0LCkzbm1F8:-h' );
define( 'NONCE_KEY',        'xq}8Z=}Xx_n].Wwu{&,L-(+B8tN~^_PCVJOt(ubA.=V7(0#lET~#,BU~N1v Q6Qq' );
define( 'AUTH_SALT',        'Ms@)O_uz2p{E,PrCSAZlLS.@aUdaz?qQ=G9adVn~Bnxf|sX8WRq,`>4<,=irVe_/' );
define( 'SECURE_AUTH_SALT', '0-_Su=jB^5Pcze2>VWGQlmpT@ >Eh 2N774be6[=OD<?AoYmV`6P_d!agMGBN7iv' );
define( 'LOGGED_IN_SALT',   '+g4fo{0Q&UYoaV7a8}|[@L(G:3,u!X*H9ClhThK5CH~dyDQY}j`0@c/cQhV~/}7b' );
define( 'NONCE_SALT',       '*<jltg@Nzm33=RZZNPNvfNqc3^G~;17RS~zpc/}?o>/Wn7{tLo?A7#nQq`~,7LW^' );

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