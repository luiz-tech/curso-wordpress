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
define( 'DB_NAME', 'cursoemvideo' );

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
define( 'AUTH_KEY',         '-4L!q}?2&gdz*c+Xs#tq1S@gK20nS&GKOJa4:o{v_OwzB@_#cOD.%x:-NUfa{D4t' );
define( 'SECURE_AUTH_KEY',  'RZT`6y-f]wz420i6np#WOm7bOg8EJ]Ssy0rnZW@9*o$G{+V&2pyEKK+uuULYWuH}' );
define( 'LOGGED_IN_KEY',    '74>:imE<E!7.VF^3ERQ^Oh~)fZ8VR|.&&=mU*XP*LH3(Mzw[p?F]X{C;22wo&|}8' );
define( 'NONCE_KEY',        '{}Y;6O7XKd,[+f6B |vnK?y-ee!ju;n8 6.$*o&k.jm}uGq;<ue+psNzyYG=A]P{' );
define( 'AUTH_SALT',        'JcFT1Q]wL!vKGtBiLoMd+w7KAwg(#&N/u,F8+@j#3yX+%5|]_;WTr?I9S,G1y8D|' );
define( 'SECURE_AUTH_SALT', 'jJ*f3JGP`5mVUGzLAf7gIBoUK_PzN0`%V) wcQ{L9DD],$[(`l8::+jaH[__AjdX' );
define( 'LOGGED_IN_SALT',   'h?4?uK=vt =@o=.-!I@OtnEYc9Z^UW63kwv7M?-jukE9]bP.v5Dh8iDsjE^2>Qp9' );
define( 'NONCE_SALT',       '$+[}h#6AV`2>~ZKm!HU!E-BxQ[cVJ>48)F{6uIi$;dPvOv`!o@YaGA,qKNH`uo^?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cev';

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
