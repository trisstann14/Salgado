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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' |+%$%xzzrYVm3FFAOVHF)r/7}b1)BY`i|gaked/,bQ05Qol=MuR;V.JV+2 o]8h' );
define( 'SECURE_AUTH_KEY',  'v}7H-|1vZG*XUcJe}D-Ru8/xp_Wz@)pY8PB{uCM@SD;-1h<y c#|kf9W7Cn7x$2*' );
define( 'LOGGED_IN_KEY',    'WB 9HZU2[lsYLq<|pB$9Y4X4n%6^)8V+xUAxp25o$)}wl_z1@~LRh*!i7`$XXnS)' );
define( 'NONCE_KEY',        '].;vK(@H?3AxG?g lg:>xmy>BR&)#?;hEx6l!Zh9343ad?jD_p0S YqG:h])1|Fj' );
define( 'AUTH_SALT',        'a#yT&H]}~rU$1P_h!cLE9tsFS|K2u=s2d]g$&Ab^-~t9a^|&RPoc!lmvf$=9DVf`' );
define( 'SECURE_AUTH_SALT', 'j{Eb|v8<wDiq_,M~!/<ngkja|+dn)[Z<E$Q7~?.tyz|O{xSq=>.]JazYA;$Wa}.|' );
define( 'LOGGED_IN_SALT',   '4jN4+$CBGJJSBj5E4^J]uPlM xINDvO)(.}-gZ95AGE0gP,;y.}P>V8YS3$mXXch' );
define( 'NONCE_SALT',       'yBGPo$ZCXDeu9tz&J_vymhCbX`S4(b9O/A@AKS/CuvK}BC#q)xnM-l5QI~3$1A{{' );

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
