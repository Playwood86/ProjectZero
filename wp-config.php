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
define( 'DB_NAME', 'projectz_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '&RhUUO#_or&Su751+H=Qm90brz-FP-d$.y4WII~%%:DlI%k&xHwzp8K8;^hNoQ19' );
define( 'SECURE_AUTH_KEY',  'r6*D`!5Id;o=rZC6 m)U0 ~Y!^=qrU_4?dtYwBI9a|-peCmAq)0S#*i<d0HPgiar' );
define( 'LOGGED_IN_KEY',    'fa:[l/lBO0(s,g9|(`-C;98C$R,Fl~_9~|FW|IOf #D_aNZ`9O-C$?! :#.{S$A=' );
define( 'NONCE_KEY',        '?4`Uk5? YNB,5JnKk7OrU`8i3 1N9~#EBh<JgOeg^~P0[zM(n6mHCRo8XEY?OmkN' );
define( 'AUTH_SALT',        'lZ)5XvnptHm;D3W74CL@YU}@u=WrwHz?<x1w<W$6.+k4hu8,V(m<<Cc5;XGK~hQ3' );
define( 'SECURE_AUTH_SALT', ';tEI<,9$kxTe0bW0n9,e=M}|t5SgvA*MFu-|hE}m{%]i-4BvC]9qbE{>?87|k_,$' );
define( 'LOGGED_IN_SALT',   'Z_XlqhUJ{?%,5u=6@#|:6|VX=:yRd:(cY[z/tv9r ~v$RL$Se9a*]Q~*:}76O,}W' );
define( 'NONCE_SALT',       'L_D2DxMpub`{2s%8/PKlU(Y#I0oy+~<iQqEfAwvFO7o7TTpXv/n!:) F !]5D.QD' );

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
