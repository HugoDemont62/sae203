<?php
require_once 'application/core/routing.php';

// Configuration des routes, c'est à dire l'association entre les pages demandées
// et le code php à exécuter

// Le premier paramètre indique le fichier php à exécuter. Par exemple,
// index correspond à pages/index.php


// Les paramètres suivants indiquent les éventuels valeurs attendues et si il s'agit de GET ou POST
// Le fichier php correspondant n'est lancé que si tous les paramètres
// existent. Les paramètres validés sont automatiquement convertis
// en variables php de même nom
// Seule l'existence des paramètres est testée, pas leur valeur (c'est donc à vous de le faire)


add_page('index');
add_page('etudiants');
add_action('login', ['nom' => POST, 'mot_de_passe' => POST]);
add_page('liste');

add_page('creer_stage');
add_action('creer_stage', ['idEtudiant' => POST, 'idEntreprise' => POST, 'dateDebut' => POST, 'dateFin' => POST, 'description' => POST, 'soutenance' => POST, 'maitre' => POST]);

add_action('editer_stage', ['idEtudiant' => POST, 'idEntreprise' => POST, 'dateDebut' => POST, 'dateFin' => POST, 'description' => POST, 'soutenance' => POST, 'maitre' => POST]);
add_page('editer_stage', ['idStage' => GET]);

add_action('supprimer_stage', ['idStage' => GET]);