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
define('DB_NAME', 'sample-wp-app');

/** MySQL database username */
define('DB_USER', 'adminuser');

/** MySQL database password */
define('DB_PASSWORD', 'Admin@1234');

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
define('AUTH_KEY',         '8S=4Z6 G)J3`vHLmIuXji5|qq^>f,RO80d^AVv->_{4(XW%xW(2p+)da!w`U([)#');
define('SECURE_AUTH_KEY',  'eS?z-e1>GA$1:=CS.b2I-upE|-}%#l;WCX7bKN-d~~2@_(/vyI4]KCaR5xzE6gbZ');
define('LOGGED_IN_KEY',    '^MS|-1s~HibP)+voFS~ilrnKvzr[pb*M>3B)BY4=AC+ &:t3@WeHmU1zPxD$V2Ec');
define('NONCE_KEY',        '_@<1a*fH F<:m8[[3cZE,j*(`n>ghdq3MuCAqnV%R+sm-D}6-2~3iw?1;H@+p L<');
define('AUTH_SALT',        '+p)S4 H`5;;|lN3Ku;%ngKk.B<LFDQoKM_>it;].|yG<In4_}AAoPay{e%;ijLN&');
define('SECURE_AUTH_SALT', '+h5x}^-~d$RJ6HRf(E<cfm+hV8())f+e0{b|x+[o.bq|n5BnP}32F1XtVF2OUk]E');
define('LOGGED_IN_SALT',   'A|Kb]KUrMP,Tg{.>fXwrn 3*A-7S?$[sN+us*zfAI~T3uc<bV,sqf*}WvGsaL;{|');
define('NONCE_SALT',       'C(g.b_9|`b&3j%IRaV4Jw4_fEToo)bnAP:=DsV_omw|1%,Py#)+X-9Pb;RFQpDS=');

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
