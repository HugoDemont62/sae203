<?php
require_once 'application/models/stage.php';

if (isset($_POST['idEtudiant'], $_POST['idEntreprise'], $_POST['dateDebut'], $_POST['dateFin'], $_POST['soutenance'], $_POST['maitre'], $_POST['description'])) {
    $idStage = $_GET['idStage'];
    $idEtudiant = $_POST['idEtudiant'];
    $idEntreprise = $_POST['idEntreprise'];
    $debut = $_POST['dateDebut'];
    $fin = $_POST['dateFin'];
    $soutenance = $_POST['soutenance'];
    $maitre = $_POST['maitre'];
    $mission = $_POST['description'];
    edit_stage($idStage, $idEtudiant, $idEntreprise, $debut, $fin, $soutenance, $maitre, $mission);
}