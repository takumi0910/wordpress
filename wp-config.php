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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FTME4mGd+Z0jtV5lMUG8y3z3+ZEbjWW9XNgEy7GX5BbPRpYqBRBED6q/fvkjQnp6HE58V6VenQLuatQIKoMk/A==');
define('SECURE_AUTH_KEY',  'Io8yAe72CRqibhIJ4esjhIBOhpfr1VM7mfSeexA8ivWelEfG1WQCcgfX1riFAWvzxLBRC1ZHJpc8hmlzYXiCsw==');
define('LOGGED_IN_KEY',    'IMX42s14kfpl+EjThR2E3XwwRB4BFZwlTE+/bvZ5mzuOg1RF55Co9S0rsKFuFeElN2bvSQbxv0xqr3uVs2Cv4A==');
define('NONCE_KEY',        'lhatTWhXUrbA6UZ83grPlzh57wbFve8C8ZqyIrGbi+bCS7gXe4TRmmk61TMH0wRoaENsObWcdg60nj8eU4+g3w==');
define('AUTH_SALT',        'N3GeEOaZOSe9UxThKbaDPMSlqbs8oFDj8Eqx9QIVmX9smm6CqQuq91x5HuuCYicuAuKtzb8VHvj6Un46/IM29Q==');
define('SECURE_AUTH_SALT', '+iJxL96F3y5lO6iojswbT3Fm/6bACs+WmP1CMMIpukXHOcbNGM5fxiiHQtDYXskTC/SypuGSFtkTVFTzQcmPCw==');
define('LOGGED_IN_SALT',   'OyWQbe9Ebt7azxzGkeCZO8n1i/FXLzaO9mTJ3Y0YkhpklA5QJJjcB/T2+7e4cyO+EjDjkHJm15oKHJwRuF2SkA==');
define('NONCE_SALT',       '8GkYQ0mHfZdrzlvmLYMpzU3sbjg7uGy+vm4Jhm/aKEOsNs67G8WQe9di4RaziJzYMzUlN57clptq+jxs9yuAYA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
