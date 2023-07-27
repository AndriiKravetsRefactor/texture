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
define( 'DB_NAME', 'london_texture' );

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

define('AUTH_KEY',         '8CZ&CmQ=ry-r2umv;Pdjp5ev4h&Y)3r_d<dfz#QI{12AhaH7H7i?ah,a[_m+-}CJ');
define('SECURE_AUTH_KEY',  '+ddw@yIz(-ur=n,:R,1HR]e+LU22`yhA/^rt(w/y00Nak:F7sRfefr4=]uJ]J7Kg');
define('LOGGED_IN_KEY',    'o(L8v;/C5sUCl[;=fr!rou*)U-~q/Q-)Ln<O5v? Yd+cL~3Z:Q.orWpl#lR`O4`D');
define('NONCE_KEY',        '0V]5HLT#A,< MojCGX_<,_5o*;{=bvI<F(P9a8O#cp`:h=M(Z=.4.Tr//)b[M}+;');
define('AUTH_SALT',        '+mJC8|n>cf]!m_,&I_ }cD 0TIhqmzz7}(N6+pR<bxd]& J!S.%fj#XI3Msl3]QF');
define('SECURE_AUTH_SALT', ']7Wx[D*m#>z5E3(if:msXo6_#sGMet+b2BRus#ODro@z <%=UExDxVE,p$bS3.Ey');
define('LOGGED_IN_SALT',   'CZ_Ll;(;{5M&L?~!u{vW9ToVt6!E#N4UQIs9,5`i4 ~4)]tt?DK`K;4z ,K~{E*`');
define('NONCE_SALT',       '?uv*VQO2JN:Z{G?;nDMnFT4LU $M:lht;3axEfT0VVTULzYcUQvZM%)-M($^@l;G');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'txt_';

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
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
