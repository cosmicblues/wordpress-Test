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
define( 'DB_NAME', 'weather' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '{ajiM^MgW%E$[Wo400Of8]%.7UhcoC]YvM+:WHc0OqJyd+4eTMr;N}t<(&1*5c7;' );
define( 'SECURE_AUTH_KEY',  'auI85C4E8tg<Ti`2[k%5S)kZ0Q{1oD>Fh{Tt;b<(9>v]f3|i4Q4ti=iZ-QuI[a*u' );
define( 'LOGGED_IN_KEY',    '.$FpYIN,Yd]2Lai yWtc]05J}C3d Y`v.Iq-5i>Wa],4h%aNKe n XZsB?9O=Jmm' );
define( 'NONCE_KEY',        'G?%Javr4wUFP@l9GoIof{mStkd6:VY0.W7(-O-sg@~DKLFE|#n^){L([d>&HbdN.' );
define( 'AUTH_SALT',        '5rhOO,b3>y]Eq?zS0L)ZFZdA/Bg-YbO%j!aB*nzDZOK1;X!|4^Y<~nf}[S<AKKRI' );
define( 'SECURE_AUTH_SALT', 'szj~ [F>G87r9}G1SUV{W/oF)xW5+jPj*4o^YyM@}km+}JlzU^(j@fa1E7j48$#:' );
define( 'LOGGED_IN_SALT',   '[ll(@albFAq[DqX=(Or%nc?h,Iz+[/n*R.zUjb!Sr}0?=_;>1aCZ>p[dn_|C}zh?' );
define( 'NONCE_SALT',       'mBdGr$#=aU2>~m^7Ze`dhFV#aQfZ3MQsfSi,U<w_Fz6*=ZVyc@%2yM40a44Pf}y%' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
