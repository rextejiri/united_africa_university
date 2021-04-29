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
define('AUTH_KEY',         'vHl9txjRleaNcdUufd3UtpEQtrZUU8eLQnriOt/u1QdsrN1EMLGAP9rYu0UWDojH5erwM26o2jwHnURzJyC+EQ==');
define('SECURE_AUTH_KEY',  'lDkgm0CR+B0QrcPQNiYHyT4cqYbWDpVmCPuZEctQesnDMDbvFJQ4KIbPLMorNHAod7TPA3e4ByMk84cHSGNipg==');
define('LOGGED_IN_KEY',    'XejFAQaZjaFL7klus//oNZb4R+Xo/G0aNTRqZ9bbUctSaJdBWwK8V0R4PX9LZNs4OQuwiedRuZT+CLfMmwQ9cw==');
define('NONCE_KEY',        'Zz3hOjME4/We2EqLyOuIYd06bMMTWsEbxN4AjnF1iL0s5CkuvFfp2DZzU3V5WnauLTaloCgqGWijxmBEdeMthw==');
define('AUTH_SALT',        'iTGQevIEzSOutgOA04tND30xjqBAg0YoAAt+lyu5w1EfaHalmizq0vGPFSj0YVXcSV0YYUinEAn6My7yZ7b5MA==');
define('SECURE_AUTH_SALT', 'HqnwasTmOzuB34/HlQtYFpNL7d0MnFSarTJGeXmqXh4dbUdZ3nsdsFBQFn0D29nREK+dnXc9A3syL0CXWsLRtQ==');
define('LOGGED_IN_SALT',   'r16C0m0vcMmFgABNW7CVNpqcK4rCEgwXdLa50pZDlmM1eN6cnYyTE6LXEmx1dcqpJLA+w4WFwXlo0vsRRwZ9WA==');
define('NONCE_SALT',       '7CLXOke/+TqkybV/Wex0xWLAx7rVwnn3NLf4pajfPKVqxv0zE2rdz4F3ogkVAffnRU4HS3OrRMeDHrzjBTwO8Q==');

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
