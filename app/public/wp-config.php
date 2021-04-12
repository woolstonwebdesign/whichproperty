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
define('AUTH_KEY',         'Ec3vkson006P7gcuwtxxEMdY/jwXMDGcaZ0HUi8CaFUcgQ2lLJXBXH4A1IvaKQUP0zMRW0gKKbn7W7zD3INBTQ==');
define('SECURE_AUTH_KEY',  'SNzezjgcbD07YxMf9NOiJDF5qwnNUts2LeaS/N2cJ+fsMXUq/nvStq+cr5gzr5YLKLltVcfIDJVh/YiZrQ266Q==');
define('LOGGED_IN_KEY',    'RFhkyaGIPFywuS0LDogf8/ytFY2pMlUS8qi3keRC7GSwrPPRWcmxdauv6Ba9A3R/TUWtb7bAt68Y++rXvM+uaQ==');
define('NONCE_KEY',        'dkJBM8xdbL4wXc9ftJ/C6xiNWV75zEuwldQ2SCrfR4teOsj02nXo8lCjiJWgNmfHy+DX2UHtSv7fYr0vJFAgGQ==');
define('AUTH_SALT',        'UZNXDWDZv0pOwTskC2ARAHBkSiWG3dqFq3C3yEoe7vhwg60+xIlghEiukPNUadDN4qC0XVjTmHeYePwLE4c5VA==');
define('SECURE_AUTH_SALT', 'EHrtErmztoMkbgJRHx3PUj2hODw15Bc6VwRY387+XsM8GGPqg1Fsn+cPp3Soh2qgHqwMGuz/FTCYXKpP0/Vw0w==');
define('LOGGED_IN_SALT',   'pEwejCcBjSS56jT0aCNnrdG8ebFV5dP0Ey342nZSsnEkcXoY2hDrWdvD96/gLcZG9rvPtXhasEfDBq9Ak5Kqrw==');
define('NONCE_SALT',       'b/BfZ0bPDdqmomdX0IyHBORg6u7YIzl5eCKv0HkN53H15X1WapXL+NbMyWQiFKOqEWxBwhXQ3f++x3trRoAAoQ==');

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
