<?php

require_once 'application/core/database.php';
require_once 'application/helpers/permission.php';
require_once 'application/models/stage.php';
require_once 'application/models/etudiant.php';

// Check if user is logged in, if not redirect to index
estConnecteOuRedirection('index.php');

// Get all stages and students without internships
$all_stages = all_stages();
$etudiants_sans_stage = etudiants_sans_stage();

echo $blade->run('liste', ['all_stages' => $all_stages, 'etudiants_sans_stage' => $etudiants_sans_stage]);