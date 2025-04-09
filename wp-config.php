<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'relaxspanbd' );

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
define( 'AUTH_KEY',         'Ys*@/H11xJzNa;o#rIv_.eKDic8bFfG#@OlgnhXK!oQ$8U@pJj<kYnyoI.xh&M?j' );
define( 'SECURE_AUTH_KEY',  '!IH`B2v}mb BL Z9es+j`>3Hnr3?eVX*`sCJhh/#hSs&Lc%^JnzBi_Jj!BwEdp`t' );
define( 'LOGGED_IN_KEY',    '|L/a?q,J,Oatc]d^oos%]}Z{w_JI[0KUZ*uM(&>(~i8j$0&z<m7[,|E!K)j0W)xV' );
define( 'NONCE_KEY',        'Qw0?8`4RJLp$Sdiv#L~LJl-Jm*1L3wrOavUUwOvqj]!*3h;H@*|mo%#{,+4;SGlx' );
define( 'AUTH_SALT',        'sT%d;WIxn&)NT8*(K&EoWQ GSP4gh+{fjV(2^%lW)xNA$Ux`gLH$}_yCszUv)?Q$' );
define( 'SECURE_AUTH_SALT', '5c;y*><Yw#W9L3vvFJg~UwxZLcMaYOE!zt%[ZhGs?_pTQ^uNAy5@-W/2;ic[n|of' );
define( 'LOGGED_IN_SALT',   'k.@Uy&7_MuTLn3C`<)l39=zaAZ9rrmKNq8>9wS &RFAJIC:$h;7K+}N/So]sk.NL' );
define( 'NONCE_SALT',       '!G4d+gx/],Of4ROE9-Ry>$w+i_J!E=csdGk22l8%&Pt*9E`@>)#<t<%}Hf]M0,V`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'sprel_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
