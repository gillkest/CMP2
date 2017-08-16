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
define('DB_NAME', 'cmp2-test-database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Kx;b`VWPWqwc;i]MvB$Hsu_vzy?WV1E`6!VAUap-y7JEOK^>31khZ(G46j}o:#rE');
define('SECURE_AUTH_KEY',  '?KZg@E-zS%!}K|78akz_b)S,RQ)h:KlDeFTn{K0!Z::JmVyp2$o9Edu$LnR-0Egd');
define('LOGGED_IN_KEY',    'dM*]yS>Sb -TJ&~K`7aT:^2/{`/CZtl!&)FV;uYC#94=2[<cfq9{f0:uNxg^&GR1');
define('NONCE_KEY',        'Z)pv4f_5~K<_Dr6LDu jR@/_R>xrpx[)8QYkfvkW$aa0r]es1ypI<=;,#GC~[A u');
define('AUTH_SALT',        'b[Tj6Hx84fu@9F~n#brYxB`4&1#8|G7>!gE;VgHLn>oOrIRd-Cv](K#pngXnU;f(');
define('SECURE_AUTH_SALT', '%;z+2t*81.yqhS6%GR.cJBl3mi#IF%[zC81S@M7K]wcGabwr3fZN&@0.*g%X1>}i');
define('LOGGED_IN_SALT',   'a65DLjk+dZ~qfJz=MU(%1awXpjiuF*W!=qq|T]aI E},CJBVR{Wt]NZ4gRJ)/-~N');
define('NONCE_SALT',       'aE+&~PDPPtK96fX~N}&PL`Mcw$aut?]0!0?E)Y&E8J77J=?`BS!^/K{WpE+!!lMo');

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
