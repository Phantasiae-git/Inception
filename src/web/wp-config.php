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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb-c' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'viaP[a~wC]sntY=r5yg&u,r;L=vi3K+w^4q{E-SHao -plZDP%s4n:lWy4t``hxQ' );
define( 'SECURE_AUTH_KEY',   'K+n6#++Qb.pG=i+<6n;U9yU>;[HN0Li#2u(NVc`?9oSwaX$nZ#9rb@n:]ytSV{+|' );
define( 'LOGGED_IN_KEY',     '5n{(2IyG$EmNmv AAxdwd(b&;7UfDJ*EsD~:Z%`N8~*sTnN=+Uoas0;k@/G`~`]v' );
define( 'NONCE_KEY',         '$*]O{wY`Q6=I|;u|J3aCGO3CL}KyhF]bChk]g% 4VKTH=ki,_BI,?%Gqs}!~fObJ' );
define( 'AUTH_SALT',         'l3Ct=[rIc1k=.]8A#?Wma<NB$No]UI7R)Rlzm]L*yYvR6,dI?eVQDAY9Ia?j*}GI' );
define( 'SECURE_AUTH_SALT',  'AbME:xBm3MZZV$iGlr9DxAzdT>`t8eXn{@s2#XHnIw$;Q?|H7##WoxeHp`$Nt*O`' );
define( 'LOGGED_IN_SALT',    'w= EvW>:`:~$ vRlEt |~KehXoqUw/e24ct#:5N4mXs.W[9zjZSJ#-Ix ^vk}TZ#' );
define( 'NONCE_SALT',        '-VJi}v&ktX0FW_Df~ajGqY-aBjTOKn[>8yYQ}3x-vV(OJgX`qZ+wB7eB1vGE`Y:#' );
define( 'WP_CACHE_KEY_SALT', 'Q51+Au.:])V1.&Y<ee7J;C^ixLx=hKzE~%4pK8A-[{=J*)j{/?W[FZ|NgC M+KEM' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
