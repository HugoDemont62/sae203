<?php

require_once 'application/core/database.php';
require_once 'application/helpers/permission.php';
require_once 'application/models/etudiant.php';
require_once 'application/models/entreprise.php';
require_once 'application/models/stage.php';

peutEditerOuRedirection('index.php', 'Please log in as an admin to edit data.');

$tous_etudiants = tous_etudiants();
$toutes_entreprises = toutes_entreprises();

$idStage = isset($_GET['idStage']) ? $_GET['idStage'] : null;
$stage = get_stage_by_id($idStage);

echo $blade->run('editer_stage', ['etudiants' => $tous_etudiants, 'entreprises' => $toutes_entreprises, 'stage' => $stage]);