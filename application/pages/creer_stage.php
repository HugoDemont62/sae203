<?php

require_once 'application/core/database.php';
require_once 'application/helpers/permission.php';
require_once 'application/models/etudiant.php';
require_once 'application/models/entreprise.php';

peutEditerOuRedirection('index.php', 'Please log in as an admin to edit data.');

$tous_etudiants = tous_etudiants();
$toutes_entreprises = toutes_entreprises();

$idStage = isset($_GET['idEtudiant']) ? $_GET['idEtudiant'] : null;
$stage = ['idStage' => $idStage];

echo $blade->run('creer_stage', ['etudiants' => $tous_etudiants, 'entreprises' => $toutes_entreprises, 'stage' => $stage]);