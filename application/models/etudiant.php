<?php

require_once 'application/core/database.php';

/* fonction tous_etudiants
 *
 * Retourne la liste de tous les étudiants, triés par nom et prénom
 * 
 * paramètre : aucun
 * 
 * Résultat :
 *   Un tableau de tableau associatifs donnant tous les champs de la table etudiant
*/
function tous_etudiants()
{
    $pdo = get_pdo();
    $sql = 'SELECT * FROM etudiant ORDER BY nom,prenom';
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

/* fonction tous_etudiants
 *
 * Retourne la liste de tous les étudiants actuellement sans stage, triés par nom et prénom
 * 
 * paramètre : aucun
 * 
 * Résultat :
 *   Un tableau de tableau associatifs donnant tous les champs de la table etudiant
*/
function etudiants_sans_stage()
{
    $pdo = get_pdo();
    $sql = 'SELECT * FROM etudiant 
            WHERE id NOT IN (SELECT idEtudiant FROM stages) 
            ORDER BY nom, prenom';
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}