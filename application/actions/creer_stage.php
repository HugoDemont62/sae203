<?php
require_once 'application/models/stage.php';

var_dump($_POST);
if (isset($_POST['idEtudiant'], $_POST['idEntreprise'], $_POST['dateDebut'], $_POST['dateFin'], $_POST['soutenance'], $_POST['maitre'], $_POST['description'])) {
    $idEtudiant = $_POST['idEtudiant'];
    $idEntreprise = $_POST['idEntreprise'];
    $debut = $_POST['dateDebut'];
    $fin = $_POST['dateFin'];
    $soutenance = $_POST['soutenance'];
    $maitre = $_POST['maitre'];
    $mission = $_POST['description'];
    $idStage = creer_stage($idEtudiant, $idEntreprise, $debut, $fin, $soutenance, $maitre, $mission);
}
