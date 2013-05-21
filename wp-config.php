<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'mycsensesite');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'mycsensesite');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '4ZivvKkC');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql51zfs-27.pro');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BMkx#/I$5|Y`v([f4HANZ)f`3yQ8Cg2c;#>?]mNoXWM]H@^_ K8D x1=P;nKzehf'); 
define('SECURE_AUTH_KEY',  'U]$k@h3+l[/J)WPN4 Fo  H2%m? dSd.k]pLJX>Z+dPrp!p;.+`$6-_! l+1Z2Gs'); 
define('LOGGED_IN_KEY',    'Q=0nW{I7()yoOOOZUX{eL8Z&I9:x$t]qBpFLQYdD})gP#8p3#|>r|^(spb~sz`rt'); 
define('NONCE_KEY',        't#?zSsb%lk>.0K< j(GY-p0V`$VaG|LHQ,-tbceIT)Kx,+_CGU8+S)c`TTT=&$W,'); 
define('AUTH_SALT',        'J!T![B=KURa=x=`poX-haNM}$e7u=jPr$km:5f&=|!SyP{=;!|F]%P-kuLbr5[)('); 
define('SECURE_AUTH_SALT', '%VrEXTHEUksoH<WL!PqTfvz[V#LBd30(`=j*v/o|#TRX)UqZ[q9?~f/FA`Y:G2VF'); 
define('LOGGED_IN_SALT',   'q|#S.=h3tr0X+a+5/-|+|Al;7/M0SIg^r)q/lEQ-IJOZ< /zzf2mNjbs $<O@f96'); 
define('NONCE_SALT',       'tPv=({(%bJ}*H+SAb-PUx`Y?KYN9v;-/Ao$wFZjM~e#0}-%NMV3Du]f+.%?GQ 5G'); 
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');