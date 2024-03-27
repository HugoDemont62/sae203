<?php

function estConnecte(){
    return isset($_SESSION['utilisateur']);
}

function peutEditer(){
    return estConnecte() && $_SESSION['utilisateur']['edition'];
}

function estConnecteOuRedirection($url,$message = NULL){
    if (estConnecte()) return;
    if ($message != null){
        $_SESSION['info'] = $message;
    }
    header("Location: ".$url);
    exit();
}

function peutEditerOuRedirection($url,$message = NULL){
    if (peutEditer()) return;
    if ($message != null){
        $_SESSION['info'] = $message;
    }
    header("Location: ".$url);
    exit();
}
?>