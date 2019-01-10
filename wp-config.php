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
define('DB_NAME', 'torabeei_wp415');

/** MySQL database username */
define('DB_USER', 'torabeei_wp415');

/** MySQL database password */
define('DB_PASSWORD', '[SAa4]71p6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'fokpjg96unlcdrdr0pgcq6ivbehn29qmfiu6ial2jitv57fchqt6ooxlo37sem5l');
define('SECURE_AUTH_KEY',  'wlqzmfkpxfeon6zo7mbzucmfzjmhctrmlk5y5omisxruyyn70dt4k25g09srpwa3');
define('LOGGED_IN_KEY',    'f1z6vuufse8cfr1nwzgn4ic6ux6nn6b0fywnjfyekvxq5airywbwpa2byj8tpjx2');
define('NONCE_KEY',        'k3owct6mwov3uohcmoqx8alzp3whodjzf8j12pjqcsgein6kzrjnewuns4utdeoa');
define('AUTH_SALT',        'kehane6pfumzetbdpslizmycdoliqgstcu1szljv2tzbobwipe6isrjlkgeasab1');
define('SECURE_AUTH_SALT', 'et1wmq0nuygfnat2rneuntys2arven2rhwzva1rklbhnkguggo3zl95xeenohyn9');
define('LOGGED_IN_SALT',   'casejlun6y4rdnr4ujbuqvqsvoextifyfzt69itblgt6ppypi9sachpdm9plfeoc');
define('NONCE_SALT',       'rqv9tiu6iocd59wn2wcfwjkttvup2nc46ivnnefwu5inzmkddxzb5iodvj4wepyq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp14_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
