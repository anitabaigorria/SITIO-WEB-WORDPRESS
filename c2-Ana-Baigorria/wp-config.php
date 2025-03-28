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
define( 'DB_NAME', 'c2anabaigorria' );

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
define( 'AUTH_KEY',         'uTV<Oc*ry)y||AEr>rw$y8-kZ[k!BrpR`JMpI.]r  +x+|PIF&yn`sLs@_1h.UH<' );
define( 'SECURE_AUTH_KEY',  'Rq0DJEzi+1L;DRc(%VbMFJZV_ NbDMX(ZTzz;ic}V lJW^Jw&St$<;?b^G9+);AC' );
define( 'LOGGED_IN_KEY',    'J{)wx?{2nUgTK 5OiGRY.@V#{_AU#V:|Z)teQu]1|a=zKGfVtt+$:.QK+BIZZ~*F' );
define( 'NONCE_KEY',        '?~7(-}9E+XImnWa@ApaaK(jx)/`Wiqm/C+it+0iN-IRe%Dg1RL`mx-%`,f9weCoD' );
define( 'AUTH_SALT',        'Nayg#HG>@m4`f07@WY@oL1Vq]}&Ze#lw*@`~8B Xcck*2nqy&jAsQ0:~*S-wM.#6' );
define( 'SECURE_AUTH_SALT', '9gA+~PiSY?C{!2`dFjW45@krVl~L+WU>7Y/K^fWH^f{*4G9fi(`U~aM54R#CpCeu' );
define( 'LOGGED_IN_SALT',   '1&/GbQELFR]H_m>kq~9@;(*m]qtr5}iB>]EVtUE{qN+<)?MgGK@(K%9ETav9[?eV' );
define( 'NONCE_SALT',       'Hpy@c-NU +mC}_<Nw&ws(:rPI~LlbP{w1L2s4!rrUW-OkccP{We.+p&t~022W%w$' );

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
