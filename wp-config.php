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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Root123@' );

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
define( 'AUTH_KEY',         'o}D]FYGF+t)Gcx,A(]L<Xv@LRX`Hl=9W4R)m_dDB^4YmnO.,#9zt?oZ]z5tE=;;~' );
define( 'SECURE_AUTH_KEY',  '*-%3ay$rPMjf[lT^mJ;XA ,lEZRbw&ZApMlG!:^&vG,s]QYr=&$!~G7+-)%hK}I+' );
define( 'LOGGED_IN_KEY',    'r)tCLsY$+!n87MH!mgjF2Gs$#wa1Ly*G5CJrU>S4g_7&FxoQ<A6yHM<w)KQ`&^i1' );
define( 'NONCE_KEY',        't9f<MY?dE/*&6vPyGr/X|Sx1T/<0NAzN[@99,)info;(6(xFK#$-Z-fyU4)A<tP8' );
define( 'AUTH_SALT',        'XRJpy-#2E53ek[NxKIFgNQmI|u.`GX]oIUiE0`y6ppe,A,Q9u81eN/pv7A3Fw=(s' );
define( 'SECURE_AUTH_SALT', 'R2F2FvE@AGZ|eD_xg1o^wI*-vDrc3uMPy|Dk%[90]OzVcP8go& B`,W>L4]e7%xc' );
define( 'LOGGED_IN_SALT',   'q$k{Ii&8h>;f;qi4Q6#]=H_WQVfzED1nWCxqD!p~I>F &aDIT*VH@$|~2>B]IH9!' );
define( 'NONCE_SALT',       'N]0lh{@X)B{`GylXE%~{$KXx$kcX&}n@!1N>Q@rhc9gscbx0hx[lg5eiOFqFdE@8' );

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
