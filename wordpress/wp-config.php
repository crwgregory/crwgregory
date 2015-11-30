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
define('DB_NAME', 'crwgregory');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#F}J{ 6RTA9sV<UA1vsK6E`%uRcm_3T-+Xz].z)UBM2dsV_F$on^R^{)?yWY%F0B');
define('SECURE_AUTH_KEY',  'LdEpL77]MzOm^`Y+[k6kHlyY+snb|23+e#wf~!H_mUlc9*{N4+Q?I/HjW2 Aq43X');
define('LOGGED_IN_KEY',    '`rj!yfbI34+.k6*0MTm6yx h4~.H0;$zpG*BLhK(8n/(nz]e|@Df!~)2{)rdO+g^');
define('NONCE_KEY',        'Y.n+D65+7^aj8-sWj^<y~OJ QXB,kW?|SRHApZBRL80 !lT/cB1W~Wr)6@q?P${:');
define('AUTH_SALT',        'L>G$DR79xV>|(RERPttSW2@q<Z=_Ek+@AqEaaEmL)qHB`.lQ(1GRWQns|p:4i@`,');
define('SECURE_AUTH_SALT', 'fL+ +y;wkqo3s^dUuH.Xvw~5puCwje,p_mcSWv)azDcW[Au!rhwC-;][M&_P(f?9');
define('LOGGED_IN_SALT',   'SHKvpei%:9-01.EfTa}xp=F`9]J4rM7I,e4b&n/4is7y5|~y(QuSaIy+7V_}BHy0');
define('NONCE_SALT',       'kjmHY@WS_^3[l,5HkP+4nuYeK-_Pyst=+zYC.+o^%vz/+hW+n~hx-/_V?|}6_N9W');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
