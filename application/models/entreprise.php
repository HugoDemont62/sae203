<?php

require_once 'application/core/database.php';

/* fonction toutes_entreprises 
 *
 * Retourne la liste de toutes les entreprises, triées par nom
 * 
 * Paramètre : aucun
 * 
 * Résultat :
 *   Un tableau de tableaux associatifs contenants tous les champs de la table entreprise
 * */
function toutes_entreprises()
{
    $pdo = get_pdo();
    $query = "SELECT * FROM entreprise ORDER BY nom";
    $stmt = $pdo->query($query);

    return $stmt->fetchAll();
}

?>