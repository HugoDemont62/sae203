<?php
require_once 'application/core/database.php';

/* fonction utilisateur
 * 
 * Récupère les informations sur un utiisateur
 * 
 * Paramètres :
 *  $nom : nom de l'utilisateur
 *  $mot_de_passe : mot de passe saisi par l'utilisateur
 * 
 * Résultat : 
 *   null si le le couple nom/mot de passe est incorect
 *   un tableau associatif avec tous les champs présents dans la table sinon
 */
function utilisateur($username, $password)
{
    $pdo = get_pdo();
    $sql = 'SELECT * FROM utilisateur WHERE nom = ? AND mot_de_passe = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$username, $password]);

    return $query->fetch();
}

?>