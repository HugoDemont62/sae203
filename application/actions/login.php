<?php

require_once 'application/models/utilisateur.php';

// Récupération des données du formulaire
$username = $_POST['nom'];
$password = $_POST['mot_de_passe'];

// Appel à la fonction utilisateur pour vérifier les informations de connexion
$user = utilisateur($username, $password);

if ($user) {
    // Si la connexion est réussie, stockez l'utilisateur dans la session
    $_SESSION['utilisateur'] = $user;

    // Redirection vers la page de liste des stages
    header('Location: index.php?page=liste');
    exit;
} else {
    // Si la connexion a échoué, redirigez vers le formulaire de connexion avec un message d'erreur
    $_SESSION['error'] = 'Erreur de connexion. Veuillez réessayer.';
    header('Location: index.php');
    exit;
}