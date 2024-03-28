<?php

require_once 'application/core/database.php';

/* fonction tous_criteres
 *
 * Retourne la liste de tous les critères, avec pour chacun la liste des valeurs possibles
 * Les critères sont triés par id croissant, les valeurs par ordre décroissant
 * 
 * Paramètre : aucun
 * 
 * Résultat :
 *   Le résultat est un tableau associatif, avec le titre de chaque critère comme clef,
 *   et un tableau valeurs comme valeurs associées
 *   Chaque valeur est une tableau associatif avec les champs des tables critère et valeur
*/

function tous_criteres()
{
    $pdo = get_pdo();
    $query = 'SELECT * FROM criteres ORDER BY id ASC';
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $criteres = $stmt->fetchAll();

    $result = [];
    foreach ($criteres as $critere) {
        $query = 'SELECT * FROM valeurs WHERE idCritere = ? ORDER BY valeur DESC';
        $stmt = $pdo->prepare($query);
        $stmt->execute([$critere['id']]);
        $result[$critere['titre']] = $stmt->fetchAll();
    }

    return $result;
}

/** set_reponse
 *
 * Dans le stage définit par son token, choisi une valeur pour un critère. Autrement dit,
 * mémorise une réponse du questionnaire.
 *
 * Paramètres
 * - $token : indique le stage considéré
 * - $idCritere : le critère dont la réponse est donnée ou modifiée
 * - $valeur : la valeur affectée au critère pour ce stage
 *
 * Indication :
 *   On peut utiliser 'REPLACE INTO' pour ajouter une ligne si elle n'existe pas, ou la  modifier
 *   sinon
 *
 */
function set_reponse($token, $idCritere, $valeur)
{
    $pdo = get_pdo();
    $query = 'REPLACE INTO reponses (token, idCritere, valeur) VALUES (?, ?, ?)';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$token, $idCritere, $valeur]);
}

/** fonction get_reponses
 *
 * Retourne toutes les réponses à un questionnaire désigné par son token
 *
 * Paramètre
 * - $token : indique le questionnaire
 *
 * Réponse
 *   Un tableau associatif dont les clefs sont les idCritere, et les
 *   valeurs des tableaux associatiofs avec tous les champs de stage et reponse
 *
 */
function get_reponses($token)
{
    $pdo = get_pdo();
    $query = 'SELECT * FROM reponses WHERE token = ?';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$token]);
    $reponses = $stmt->fetchAll();

    $result = [];
    foreach ($reponses as $reponse) {
        $result[$reponse['idCritere']] = $reponse;
    }

    return $result;
}

/** fonction get_reponses_by_id
 *
 * Retourne toutes les réponses à un questionnaire désigné par son token
 *
 * Paramètre
 * - $$idStage : indique l'id du stage concerné
 *
 * Réponse
 *   Un tableau associatif dont les clefs sont les idCritere, et les
 *   valeurs des tableaux associatiofs avec tous les champs de stage et reponse
 *
 */
function get_reponses_by_id($idStage)
{
    $pdo = get_pdo();
    $query = 'SELECT * FROM reponses WHERE idStage = ?';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$idStage]);
    $reponses = $stmt->fetchAll();

    $result = [];
    foreach ($reponses as $reponse) {
        $result[$reponse['idCritere']] = $reponse;
    }

    return $result;
}
