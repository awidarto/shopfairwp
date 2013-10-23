<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shopfair');

/** MySQL database username */
define('DB_USER', 'shopfair');

/** MySQL database password */
define('DB_PASSWORD', 'shopfairdb');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'z/-0$h(9p0K-U|wQY1s(ctcVFmsE+`)mcn4@r~V&&w&aRh++PwA!Is:]W^4%G2YZ');
define('SECURE_AUTH_KEY',  ';=1L,&r9V^nrzNA?%<.WOOd7Mf1`XVY8y8pJ-+mB%h}n-,_*:sr;5zRB3qE1@W|m');
define('LOGGED_IN_KEY',    'ERa-`/ts# jCa!uH$-eaJjD2xr-St87=!_?!z|^Qt[YT+?VW&EzMEm*}=mJR%|Sx');
define('NONCE_KEY',        'u0tXJ$}bZx)]Yxdpsz9F9sgj. EFORG;09C;6@D+DOB[&+v*,z9K orOiiT%UW<=');
define('AUTH_SALT',        '>jFkgL$;)?E|A8`L*K:w xysC9G Bw)E0DrE<XzXlXX6{{td4b-l+Q_$jslzWUXM');
define('SECURE_AUTH_SALT', '`i](S}6?`uY:gz@>:_^t=sx[o3mclPrWlOZ]vQ^ <:cux,7Z+ip>G~],_N_P>7dE');
define('LOGGED_IN_SALT',   '>(n>ycM,}:K,auQP*/p-Ia4-TLE%BVgzfqntFl3upj!S%-aRH|+X(fJ+|X8&Aaw^');
define('NONCE_SALT',       'IU|w-9z98-H@<3)o_k#X~0bX!wWvq0w#l{|1,<pk@Z5gF H?,fChs{+Uh&9^_A U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

