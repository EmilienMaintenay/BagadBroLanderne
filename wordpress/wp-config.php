<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'WordPress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N>akLm6!A[9 {P7@>oez30m;69Z9AWzHwXZd^J4M80@PJxa]S9%;CxV9~5Yk9(&E');
define('SECURE_AUTH_KEY',  't/{w/oaZYuqJL+Gtw) 6A7r~4im`D=/1Y`5 N#~>9<W=nwfo2*dJ8e,)LW{hYI)#');
define('LOGGED_IN_KEY',    'oBS;n]aPJNp(-ubx3(0;3 uZg!]c}9KdT&]O )nZT@#NS!I++9ffJtOwBhs#1=Lt');
define('NONCE_KEY',        'Gk0<k|F$us6,,9qu&ZcMKqS~;<6H?7y)|3OD^1?7toh}}8oXV[JhS.R6zugv.&dK');
define('AUTH_SALT',        'nP{s+L 9>AmO6WY;42fYCq(_`V&J^INRAX{$.@|v?f&L?P@5k/lLo](`w|(D&Sa^');
define('SECURE_AUTH_SALT', '(<8+m_Y^yn#8/+*}YugENIdD#I</Or!*ziXB9$~*l)Y`INO$yHG<|$UfL%z%@jfE');
define('LOGGED_IN_SALT',   '}pPN1(~t8OH:6YD0lN~@ATFXPzgYS RMOD!&>&?Hey]7$T&`(`EqZn}P`(0`HhsV');
define('NONCE_SALT',       '9nkI/PSapEEsBBR8TR2_}H%nV=?X4Y;opwtXB3Y7DKBfbbp|S(S5j0dq,sz6Iqvp');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');