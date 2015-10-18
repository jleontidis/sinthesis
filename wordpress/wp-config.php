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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'synthesis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wy/=:|!PE)--VQmB#Mi}Ac7ySBl4i|=}nJL+{US>t2>|;g~sF{9 BuL4gLV4$_#8');
define('SECURE_AUTH_KEY',  'L*N:j/t>3g#xG%&rkseKnw71oU*l~ft%YXP^;H0ENa%wOOFv]nbKLqt5<1z5zm8%');
define('LOGGED_IN_KEY',    '2]a&4#|j-OM@4IPi+[4UG4x|,vzI&Rhkq-1h&|Eq9$mD-8`&()X6,9!!2QoIrk]6');
define('NONCE_KEY',        '-)s[.xj2*A(Qnz|RY&}8-_}7;o+$ZozVHOSLt]|_ |KcJ<$b5M!K(Ykwm5#ESK&^');
define('AUTH_SALT',        'cGbfF|>vGosY}v>Eec-cV|I-?u(r-RyJD|_}=.[0W8UXM5F8gt#`T4R>c_1k}85]');
define('SECURE_AUTH_SALT', 'dw+ZOOsbbH_P@Hz[-KP[o?i$h*A|iw`/MPhMS=.v{-SvDIGJVB,;S_F,p/wr=U/u');
define('LOGGED_IN_SALT',   'kPf{_s6vW{MagG~QiqP. {(5?|_F1j)f$DPM@FgsE {P%=o{Nn=[;?2V-}OU]V(o');
define('NONCE_SALT',       '8P2rQ~J0zHZOP,qcC6&F#p|y%S6y.|F{o^Q#y6AtXxO|K*nCQ|l; *k5<vc=66=#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
