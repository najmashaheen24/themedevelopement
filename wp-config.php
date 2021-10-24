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
define( 'DB_NAME', 'wordpresspractice' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ',bdn+T.-k9I9l!sr1/^F+#-N#E]HA+Sh%u77Q#ad0IEc#9IR+If5Zew&gbE;UQU/' );
define( 'SECURE_AUTH_KEY',  '%#{Ce9S1`aTMwt9tn85:!4km+t-KvbZ?~WZD?G8K.XFqsS(iOO8g/%_-pe*0f,=[' );
define( 'LOGGED_IN_KEY',    'aZzf1 7+tyI!i&hE}&g[3lve]7Q8!.![;ti))fHY^_OiD3D5igxJ/U])C1==yW`N' );
define( 'NONCE_KEY',        '$^q34HV?lfxM7y!6l c]z#u]Wgu]I-! mj$;>fC:PyrNiiSnIM+~Pv=qv;3cH31;' );
define( 'AUTH_SALT',        '>-G}0Ca~6P>5hIG=t.;5NSF+uz7KFj4mHvL*(bUVO4>;b)<){F~2U`7N-78<s.Y5' );
define( 'SECURE_AUTH_SALT', 'O?9N2k2B^qE,dEA|yv&L@FfIW( itVFjBzV hHG db[YzK0II(Z-&c-p2X<Bc|uf' );
define( 'LOGGED_IN_SALT',   'DTBrW A;D #r3quHJ{gS!Rm U7^^CD3!n[E<IS!2-aqaA^nUD<~*/7UOJ0NP/Ki{' );
define( 'NONCE_SALT',       '~^C!y^2CN8hDboqRk.~7sGUhaGeW%qdi8?>lTimvR)ay!T[B._/avvwfQ,|M9AsB' );

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
