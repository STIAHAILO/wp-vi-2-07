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
define('DB_NAME', 'wp-vi-2-07');

/** MySQL database username */
define('DB_USER', 'wp-vi-2-07');

/** MySQL database password */
define('DB_PASSWORD', '4444');

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
define('AUTH_KEY',         '||F*]1H!;}C3r9Iqp8=vx|XWq6;s,m7Th:]MQu98Z]~ZIbp3DOe8K2u7[A>_o.#&');
define('SECURE_AUTH_KEY',  'G%W&am1$l#VvA~c<DV-94a>hW,6y1ri^G~L1gPC;175 b47D!_j.Z*V7&4H,G=Hv');
define('LOGGED_IN_KEY',    'ik]59Ak-$@1wl6;D9;!PeA7}>0NpN^pZ@FQ(o*T$p8mFD$57DfV{6.40D:}4bH$8');
define('NONCE_KEY',        'yk<hYH9gEG%p]<VQ%[5eiU:o}B@0BpiD>Hl2 N-o7=.lAt+a>cRJf<;HD*NZp0on');
define('AUTH_SALT',        '$UvGbX)?{LOP-@UEu#^X6rdmO_k[>Ed/~>!(n8fz#Vz{2/mbQ-OCSiwCeSQ,0ow+');
define('SECURE_AUTH_SALT', 'L(y$3s7u*/1TmH0 mk?;f73k)wZ}I_Bv^}ds_%t.s Q~eLqZ@EXOO4l(F,UM+n:$');
define('LOGGED_IN_SALT',   '4Rny[s9hAy4(NslxLi_=ARe?&^|.!vXL;C|>]+Dc6LVek8f%Tj >.*1A]Ni&|(xZ');
define('NONCE_SALT',       '^Pdd49_)O}8uvsn.|^E,S:WC!Mu0AAc1:sgujRq$5w;&o5Nuc~IpUJBK$4qHpqT=');

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
