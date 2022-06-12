<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'dtprot92_wp163' );

/** Database username */
define( 'DB_USER', 'dtprot92_wp163' );

/** Database password */
define( 'DB_PASSWORD', '-KS!z503p6' );

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
define( 'AUTH_KEY',         'b2wnfrow9ibqohaawjw5kw1vvnqngzxvssj6uqxctf6nxbdncyqnedrem9zgbj62' );
define( 'SECURE_AUTH_KEY',  'iqqqnd5qmtfndngbw2qkn0m4yjg9b01lm2iweey4uldey3sdjmjturzq8tpbudxb' );
define( 'LOGGED_IN_KEY',    'frpo7ebryaedb7fpzoxkcs5t8bampyqqhwfkbaubvestc9gfoect8exy4gbbkbdj' );
define( 'NONCE_KEY',        'l5ipu9w5bl9mdkqd3dbff7okcsul3eiduz8w6s3iq9fpt1ddgvwby4yqqbiqyerl' );
define( 'AUTH_SALT',        'p3yyprwbmysvi6pgk3ypmbvhuuye81mslawcx0ma4uvp3kav2bvlup47rj47yorv' );
define( 'SECURE_AUTH_SALT', 'lihizccozefnlgdy27hjywlsjcurjg8nrv5bdbr7rvsvcci1qmszvfi0deeeofih' );
define( 'LOGGED_IN_SALT',   '0hq8vlcigcz6fhal667kpsjnh04rng9bnvtkqzn8ltppvaruw24w56dbuo53go5t' );
define( 'NONCE_SALT',       'oifvbax1gxrhp9riflw82mnri6jnp1g7satyqq9xfdm75crfpo3jvri1nojjftja' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpry_';

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
