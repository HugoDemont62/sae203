<?php
// Fichier de configuration du projet

// Configuration de l'accès à la base de données
// Exemples :
// - sur vos machines (en général, dépend de votre configuration) : 
//   DB_HOST : 127.0.0.1
//   DB-NAME : nom de la base que vous utilisez
//   DB_LOGIN : root
//   DB_PASSWORD : rien ou root
// - sur les pc des salles TP : voir ~/.my.cnf
// - sur la machine 172.31.144.142 :
//   DB_HOST : 127.0.0.1
//   DB_LOGIN : groupe_xx
//   DB_NAME : groupe_xx
//   DB_PASSWORD : le mot de passe qui vous a été fourni
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'qstage'); // nom de la base
define('DB_LOGIN', 'root'); // login (nom de l'utilisateur)
define('DB_PASSWORD', '');


// $PATH_INDEX définit le chemin vers index.php (dans le navigateur)
// exemples :
// - avec php -S lancé dans le répertoire du projet
//       URL dans le navigateur : http://127.0.0.1:8000/
//       PATH_INDEX : /
// - hébergement sur la machine sae : 
//       URL dans le navigateur : http://172.31.144.142/~groupe_xx/
//       PATH_INDEX : /~groupe_xx/
$PATH_INDEX = '/';

if(isset($_SERVER['HTTPS'])){
      $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
  }
else{
      $protocol = 'http';
}

if (isset($_SERVER['HTTP_HOST'])){
  $http_host = $_SERVER['HTTP_HOST'];
} else {
  $http_host = "127.0.0.1";
}

$port = ($_SERVER['SERVER_PORT']  && $_SERVER['SERVER_PORT'] !=80) ? ':'.$_SERVER['SERVER_PORT'] : '';

define('BASE_URL',$protocol . "://" . $port . $http_host . $PATH_INDEX);

define('URL_INDEX',BASE_URL.'index.php');
define('URL_PUBLIC',BASE_URL.'public/');
define('URL_CSS',URL_PUBLIC.'css/');
define('URL_IMG',URL_PUBLIC.'img/');
define('URL_LOGO',URL_PUBLIC.'logo/');

$locale = 'fr_FR.UTF-8';
setlocale(LC_ALL, $locale);
setlocale(LC_TIME, $locale);
date_default_timezone_set("Europe/Paris");
?>
