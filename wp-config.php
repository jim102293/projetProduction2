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
define('DB_NAME', 'ccis');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'z`4?jEY,8VQs937fezoC/maFf{UY)W5`QrIuD4O3fs[I!c~%cX[m|=7(RoW 1S,r');
define('SECURE_AUTH_KEY',  'zCj(FxQ_(Rw0Oje5&Y7MhEMVjD3&+%.6<lp28Y{pk/bMbBU},LIT*d{L}{HU${CG');
define('LOGGED_IN_KEY',    'v$>%koAKtVT.h$wp5k<SP%tX7DK@p{FNJ)nWl}{)tvOE:El|L[`oQEM_b!]eeo8G');
define('NONCE_KEY',        'B?ItYSZ6XTM#GQc}5-`fsP<`N1+ad#;VPY%9^}tQ;^V%wSs(3U9+TwD7qRAWv29b');
define('AUTH_SALT',        'LS2+d#-h.w?_^h;Y(9t^&jij_*+%3Jbkkn;~hlVeO. JiL{mf1~.}w(4~ayBi Qc');
define('SECURE_AUTH_SALT', 'd7a5pR dh4!&@M0~N38.0=kuG_(7v3SWvrGwYt^[1Qk?mc49FzRXslq7=N0h:+P2');
define('LOGGED_IN_SALT',   '9>V^?cdsFB=K)_.]#-[Q+^Vz7qV^[Su^d3hZ[d0jfKI.<7CQ-E{=(dQ&TU[AF-ZZ');
define('NONCE_SALT',       'iMF.m<6OW5SOSio1KWJMSWDokmg4S_:IfEI b!+AOf:;MyKvO({qp^B()/Hg145&');
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