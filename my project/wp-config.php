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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my project' );

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
define( 'AUTH_KEY',         'Z*!/SV=yFMd.44]D)Mj1/Ij70c6{(Dnh4(>b:#Pq^-~;MV&:v-pk6SDx6mF3wP$e' );
define( 'SECURE_AUTH_KEY',  'viJk8-WSW?,#dg bj@(FJ.&bgO4E68HoD,@y6#2lFd1Ur t>y1([`Z#WW0IW_|c7' );
define( 'LOGGED_IN_KEY',    'XOm /o]3Oc5BW~HNEG=#/s^g xu]9D,1/z/9?N>:jdVQ4OnfgojcfinC#P2_v 9T' );
define( 'NONCE_KEY',        '6iz%g$7tV2yn~dBrxOz%mI8~c~vhF<9OOTPiZDuXP(J>fD{8@lH.&~<9e~EM^pa>' );
define( 'AUTH_SALT',        'Sn>C}Ok]Oojlow8duYm&xVI&<s)i9@)g~85YIry~Xp+m{FYA0uv$(FX7UFtQeTP@' );
define( 'SECURE_AUTH_SALT', '`0|[j:aJOLr^ogqf5*gkLuYW{$vzub6+o<4}~8m_&L2w>)xK]8q;ibW6PTi>;#z]' );
define( 'LOGGED_IN_SALT',   '}tnsO8y}hLSFY]^(6wa(~kkwb/dMPzZ]i&-Q)$aX49,L{])lXe)s;~R[15yA:Mz5' );
define( 'NONCE_SALT',       '/!^_1[bnMfru6uk6iYF&6]m&15Q0u$:KHx+HXzOH3J1w-|OKhAtScBvB=Bn=$68+' );

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
