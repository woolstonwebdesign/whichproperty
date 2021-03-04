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
define('AUTH_KEY',         'FqtpbIWTJ5rCTTlk38+hujo2XljaTO5sYLkU+mXbkKalLPutLb2cxPt+ASzqNdSiZ9b62b0N2s4NPUmIh+gzjg==');
define('SECURE_AUTH_KEY',  '9LU1fvY2nBSHtSX2zqNYIZwsh0K0S4INTufRCkfau3kLRvHraIR76e2diyerh2i7zOKrYxkPcM9gzrXtOW+PqQ==');
define('LOGGED_IN_KEY',    'bsGxOMyCIbOmOWkdxZ3K5/jZxpDUaLJbwPyqNrpa1V74Pz76esqjBX9lC603qiSHvddJmi7TGqH4CIx7PF5ZGQ==');
define('NONCE_KEY',        'pLr7RwZBoygXQDrj5+DIScBUPhxVdOWEParIMXiaAd+7/rCPeq3ckw8QEZiTixwxdbVdlDD5dCGFbEMsExhZZA==');
define('AUTH_SALT',        'HmYMApiXssxRefpEIyhZQIx41uUvOgWONcvOP72hTJ3pH94mfDQFfX9Nn2DrA0s+X7RqFYRQzEIn7ib8G3oIgQ==');
define('SECURE_AUTH_SALT', 'NCN9VkmhZcPY1+y6/tq72b4w/cy3P/CbvC2qmfWx7bAXQW6QG8emyYaKuK9M16rM+qOOIHRN+MF+o+IXByMXog==');
define('LOGGED_IN_SALT',   'zHNNU+G4ObUu+/s/Y9yYgnkJVXBjTEY3EsVZ/qWi7tliTSykSs5ZAPkJk8EGnOiS5ILJnqpulo7E5Gxd8Gq7ug==');
define('NONCE_SALT',       '754GrA+2YL4q7uAhGmSlkNNFMfnaxXEjw4QyD+3LO+uayKfKAGRMHqaoOValdoYRJK2LHD+Rmb3WSsuZ9DRSkA==');

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
