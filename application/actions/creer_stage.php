<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idEtudiant'], $_POST['idEntreprise'], $_POST['debut'], $_POST['fin'], $_POST['soutenance'], $_POST['maitre'], $_POST['mission'])) {
    // Get the parameters from the POST request
    $idEtudiant = $_POST['idEtudiant'];
    $idEntreprise = $_POST['idEntreprise'];
    $debut = $_POST['debut'];
    $fin = $_POST['fin'];
    $soutenance = $_POST['soutenance'];
    $maitre = $_POST['maitre'];
    $mission = $_POST['mission'];

    // Create a new internship
    $idStage = creer_stage($idEtudiant, $idEntreprise, $debut, $fin, $soutenance, $maitre, $mission);

    // Redirect the user to the creer_stage page
    header('Location: index.php?page=creer_stage&idStage=' . $idStage);
    exit;
}