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
/** The name of the database for WordPress dsadas*/
$dbname = getenv('DB_ENV_NAME');
if (empty($dbname)){
	$dbname = wordpress5000;
}

$dbuser = getenv('DB_ENV_USER');
if (empty($dbuser)){
	$dbuser = 'yaprigal@yaprigalmysql';
}

$dbpassword = getenv('DB_ENV_PASSWORD');
if (empty($dbpassword)){
	$dbpassword = 'Microsoft0512$';
}

$dbhost = getenv('DB_ENV_HOST');
if (empty($dbhost)){
	$dbhost = 'yaprigalmysql.mysql.database.azure.com:3306';
}


define('DB_NAME', $dbname);

/** MySQL database username */
define('DB_USER', $dbuser);

/** MySQL database password */
define('DB_PASSWORD', $dbpassword);

/** MySQL hostname */
define('DB_HOST', $dbhost);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '11a3c7ef9236d3bcc180a8931685308cca5df361');
define('SECURE_AUTH_KEY',  'ebf90bea28c490005ab6b373af5ea5923b636ecc');
define('LOGGED_IN_KEY',    '2f07bf44b4b6337a1f05e090f1d3b0bd8165d208');
define('NONCE_KEY',        '2fb97d7e7335c1ae51ef430a1990344b25fabd3c');
define('AUTH_SALT',        'e3e26f0af112cb9cff875ff927b8e60a444c414a');
define('SECURE_AUTH_SALT', 'dddbacb8ea86be8c0de8649c9e95d92543f83297');
define('LOGGED_IN_SALT',   '1ddb9319bd1d9dc843d0f9a0bcd005ed595068ac');
define('NONCE_SALT',       '295856646a159e1b27b92a2f61e6eb1962899984');

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

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
