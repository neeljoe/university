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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'f44viG2O}w>Y4Jn-Q()qfb~!.$927iHZ)w#7a[%-7DRxVm4w;+VfH&*>s=Ng1ySh' );
define( 'SECURE_AUTH_KEY',   '2:o6IVhgcb]`QLLa|?.kgZ}Z.wZ~FnJwwx;vP#Y8=M9eL`hS5u>9wrcPdo!vDN4^' );
define( 'LOGGED_IN_KEY',     'i|lZ&q^?Ao|?g*FzZo_<I6[f.BX(5|s^+ofHJLqAg/wY{`}:sSM*M@PcM bWLy-,' );
define( 'NONCE_KEY',         '~#te2xrOG-w(3(]7J6#SA5aw9Sr:4~`TQDm-ic<IM ha<|Lo(:>f)ZGuQgAj{nbO' );
define( 'AUTH_SALT',         '(H1N+K<(bL*7%R7&svT@w;X3q8hn7)s5RgwbRT@JqoH@Ng9]`=,b.N<DN.VW/Vrt' );
define( 'SECURE_AUTH_SALT',  '(>~L41x&H)TA/j:|3p=c=LSsw~1Q]>xc^xl*]#;-A`DW5#7:ODHhSCNN}+MLC[Kh' );
define( 'LOGGED_IN_SALT',    '5 eH{F=!GwcBPE8`Ga-x0=dKSt1QK?H;&m_U41hE@i9ZgLba~`d0WP|+Nc~)7*AJ' );
define( 'NONCE_SALT',        'DZht45{o3qOL^ob&Uv]r-A=e)~9::Y@O/7it+?Ugi(0_^q1_Um<0#>>|NG!WleS,' );
define( 'WP_CACHE_KEY_SALT', 'zKs}I)nTa!s8R&bn6s(6lHW!5{waW&!}&C%tA+<)%e9-lN~g_j*wz6GqY,e,CE/=' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
