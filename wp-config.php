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
define( 'DB_NAME', 'real-estate' );

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
define( 'AUTH_KEY',         'R6@qiiv4*l~}=G/*e3Oc{d[`TM P7CWl(c-fX&,8x]MaugFLk1EoCaQ}[%9BmL:o' );
define( 'SECURE_AUTH_KEY',  '^=x,RJ=*UH`6T0R`}crzdsS<7&<C`)dufq9XN6B}?Z=v,WEd#t-F+Et)S!/qT}j3' );
define( 'LOGGED_IN_KEY',    '1uUI+$HUz}W;o`.ZE;kMQNUi(MV5qHr<K7U2dH@RC+}9+,?ReZ?}Z*tl9@2i^iQW' );
define( 'NONCE_KEY',        'P:2_2!PT}gV`8lvXQL>P9O=l,6g^FLlV*_E2-|^hHQhv*F??pa2$NBKy43ou#:Ny' );
define( 'AUTH_SALT',        'E=(DCo!D7P}(1Kn&nG/<x|(M0bn/r_%mlO X!kQ CT~e>tQ.@J[qm9KVgHc nAT~' );
define( 'SECURE_AUTH_SALT', 'm9!p,tvJ$(z0VZ._^4i`P7zk4>/sRvOfjyQ=:H|sME6nx*@(m9C<N<xdgiT9QvJ5' );
define( 'LOGGED_IN_SALT',   '=N@me[9KeV_*lYaW$j=b0h~5wGU/;+;$.,z5ZE!)><sB:vbnjk]9CmBJ%*-]pNx5' );
define( 'NONCE_SALT',       'OY7PA+BN15k<?*]+kZx PIvLTAa{-5]A~4RC5[QMi$9/nfG;b9n*o}To+6X7k#EB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'SRE_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
