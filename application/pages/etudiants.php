<?php

require_once 'application/models/etudiant.php';

$etudiants = tous_etudiants();

echo $blade->run('etudiants', ['etudiants' => $etudiants]);