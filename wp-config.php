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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'laisemoreira');

/** MySQL database password */
define('DB_PASSWORD', 'LalaJuju');

/** MySQL hostname */
define('DB_HOST', '70.32.80.83');

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
define('AUTH_KEY',         'sL*|^c_]|rlQr1Q8Em$+(2O9:!|);O{~Ev}@wotwJ2ZgGxm|y8|hdy|zB2 Dr:w!');
define('SECURE_AUTH_KEY',  'r*-w{~F<EiRMEO~]27p2EZINE5!MRA/4V5BWv++>7}#[d=E^30xuE#{0w]X-RRhv');
define('LOGGED_IN_KEY',    'N;RST,+#GFXh,b[kA|ym3$2+r4Qfv|1&6n^j*nd0*RK6|XB<[;Vo;Rmu^^Be`.0+');
define('NONCE_KEY',        'MIfYpa,(-4.v182orFXk-|GitC.W_Mw4gW-r|/%>!Al1p2^DJGDP6}i{kj~~grss');
define('AUTH_SALT',        'v_ezQP7+. KITRQ5YPaf(:hW:kvddq&{p-+nL-`&/~`?eI|&hhF-pg<-b{]]x+qr');
define('SECURE_AUTH_SALT', 'V~+&x$Z+;AioJY|T[qqe+ak&Lq!am_=NSF-d6Q_9KdZML)B2,nKLXT{QAA+{/1XH');
define('LOGGED_IN_SALT',   '@8,+ij~FtQfG;r|93%>/y7[GoT/9Re;|4UH}y2F/-[NU2r|[hsZDhPSwGFc-$ c`');
define('NONCE_SALT',       'Qm8dbW%@cW,Ot%>gsu(*/K@,4tNQ1eOQ|~QzM(n6H%k5m&19+o8hI `#pd-~V!s4');

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
