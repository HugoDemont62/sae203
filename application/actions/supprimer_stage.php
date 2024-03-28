<?php
require_once 'application/models/stage.php';

var_dump($_GET);
if (isset($_GET['idStage'])) {
    $idStage = $_GET['idStage'];
    supprime_stage($idStage);

    header('Location: index.php?page=liste');
}