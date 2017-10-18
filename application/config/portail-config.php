<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
---------------------------
| OssPortail v1.29 et 2.X
| Par KahacF alias Ossow
| Disponible par achat a Ossow ( github.com/KahacF )
| Partage autorisé
---------------------------
| Merci de respecter mon travail et de laisser mon nom.
| Cordialement, Ossow/KahacF.
---------------------------
*/

// Base de donnée
  // Compte et Connexion
    // Pour la base de donnée AUTH
$config['host_auth'] = 'localhost'; // Hôte de votre base de donner
$config['user_auth'] = 'root'; // Utilisateur des bases de donner Auth et World
$config['pass_auth'] = ''; // Mot de passe de l'Utilisateur. 
    // Pour la base de donnée WORLD
$config['host_world'] = 'localhost'; // Hôte de votre base de donner
$config['user_world'] = 'root'; // Utilisateur des bases de donner Auth et World
$config['pass_world'] = ''; // Mot de passe de l'Utilisateur.
	 // Nom des bases de données
$config['name_db_auth'] = 'auth'; // Nom de la base de donnée Auth
$config['name_db_world'] = 'world'; // Nom de la base de donnée World

// Module
 // Etats de serveur 
	// A modifier dans Application/Layout/Layout.php dans "Etat des serveurs" au niveau du "echo checkserveur" avec le 127.0.0.1 ou l'ip etc

// Site Internet
 // Configuration
   // URL
$config['base_url'] = '#'; // Lien du placement du portail (Ex: http://ossow.pw/portail/)
$config['link_site'] = '#'; // Lien du site internet (Ex: http://ossow.pw/web/)
$config['link_forum'] = '#'; // Lien du forum (Ex: http://forum.ossow.pw/ où /forum/)

  // Nom, titre, mail
$config['name'] = '#'; // Nom du serveur (Ex: Ossow)
$config['title'] = '#'; // Slogan (Ex: Serveur 2.10 !)