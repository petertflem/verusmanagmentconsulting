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
define('DB_NAME', 'vimesnez_vmc');

/** MySQL database username */
define('DB_USER', 'vimesnez_vmc');

/** MySQL database password */
define('DB_PASSWORD', 'hg}K%u{r5zhE');

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
define('AUTH_KEY',         'd!<q}cRrNC%(Qq+M&G0H=loz1DZWt*o1E=lt,E/~cK+I]!~{|M^k,=Ge#$P%#8>U');
define('SECURE_AUTH_KEY',  'QU+m|})a#i m_7_@2Mckd-;ssc1P*nVb}Wmc=C-?OCiqg<[q^I/q]?sRz6*IZk 5');
define('LOGGED_IN_KEY',    '^to;T)VjHqG5H^> X+r|Jtky2F|b5LP1]dVRD%G|x>EL:SBUK}.T09b6@vnpWa:z');
define('NONCE_KEY',        'v|?G-)r@N.@HCR&hRrXoG^`Nf`zT[Y--+:|;%@]4+7U.*$bZG,y0`2Yo}Q-Ni|$f');
define('AUTH_SALT',        'F,=FHf6VXQ*^(sMa3g7(VJqM&F_jnZv:d^mtvPsC7.dkahnz$3W?![a@O-;L0uVG');
define('SECURE_AUTH_SALT', '/W9[JV7#p>on6b-+lYacAh(p=h)jLD6v1ec$+$eqTE2B+QLBl@PJ9u)~ i>BM;Te');
define('LOGGED_IN_SALT',   '%QSQg*74t|j B3q__e02jW#^lQWX_( ux91d[~u[3pft,U?^,PaOO++PNq7x2Rlo');
define('NONCE_SALT',       'n1GtKRj$@ApogmpRmf-V-lI5xJ}~oeBf+4U+OE:&4@xq-<bsQyC4Zx(*#Vc*|L6<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vmc_';

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

define('WP_HOME','http://vmconsulting.no/');
define('WP_SITEURL','http://vmconsulting.no/');



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
