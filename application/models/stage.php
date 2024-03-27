<?php
require_once 'application/core/database.php';

/* fonction all_stages
 * 
 * Retourne la liste de tous les stages, en incluant les informations sur l'étudiant et l'entreprise
 * 
 * Paramètre : aucun
 * 
 * Résultat :
 *  Un tableau de stages. Chaque stage est un tableau associatif avec tous les champs des tables stages, etudiant et entreprise 
 *  avec en plus idStage pour l'id du stage.
*/
function all_stages(){
    $pdo = get_pdo();

    return null;
  }

  /* fonction get_stage_by_id 
 * 
 * Retourne le stage dont l'id est fourni
 * 
 * Paramètre : 
 *  - $idStage l'id du stage à retourner
 * 
 * Résultat :
 *  Un tableau associatif avec tous les champs des tables stages, etudiant et entreprise 
 *  et en plus idStage pour l'id du stage.
 *  Si le stage n'a pas été trouvé, on retourne null
*/
  function get_stage_by_id($idStage){
    $pdo = get_pdo();
 
    return null;
  }

/* fonction get_stage_by_id 
 * 
 * Retourne le stage dont le token est fourni
 * 
 * Paramètre : 
 *  - $token le token correspondant à un stage
 * 
 * Résultat :
 *  Un tableau associatif avec tous les champs des tables stages, etudiant et entreprise 
 *  et en plus idStage pour l'id du stage.
 *  Si le stage n'a pas été trouvé, on retourne null
*/
function get_stage_by_token($token){
  $pdo = get_pdo();

  return null;
}

/* get_etudiants_dans_meme_entreprise_by_token
 *
 * Retourne les informations sur les étudiants en stage dans la même entreprise que le stage désigné par le token
 * 
 * Paramètre : 
 *  - $token le token correspondant à un stage
 *
 *  Résultat :
 *  Un tableau de tableaux associatifs avec les champs de la table etudiant, ou null si le token est invalide
 */
function get_etudiants_dans_meme_entreprise_by_token($token){
  $pdo = get_pdo();

  return null;
}

/* fonction creer_stage(
 *
 * insère une nouvelle ligne dans la table stage
 * 
 * paramètres : 
 * - $idEtudiant
 * - $idEntreprise
 * - $debut
 * - $fin
 * - $soutenance
 * - $maitre
 * - $mission
 * 
 * Résultat : 
 * l'id du stage créé
 * 
 * Remarques
 * - le token est généré avec generate_token(20)
 * - le dernier id créé est indiqué par $pdo->lastInsertId();
*/
function creer_stage($idEtudiant, $idEntreprise, $debut, $fin, $soutenance, $maitre, $mission){
    $pdo = get_pdo();

    return $null;
}

/* fonction edit_stage(
 *
 * Modifie une ligne dans la table stage
 * 
 * paramètres : 
 * - idStage : id du stage à modifier
 * - $idEtudiant
 * - $idEntreprise
 * - $debut
 * - $fin
 * - $soutenance
 * - $maitre
 * - $mission
 * 
 * remarque :
 *   Le token n'est pas fourni, il faut en créer un nouveau (ce n'est plus le même stage)
 */
function edit_stage($idStage, $idEtudiant, $idEntreprise, $debut, $fin, $soutenance, $maitre, $mission){
  $pdo = get_pdo();

}

/* fonction  supprime_stage
 * 
 * Supprime un stage et les réponses associées
 * 
 * Paramètre :
 *  - $idStage l'id du stage à supprimer
 */
function supprime_stage($idStage){
  $pdo = get_pdo();
}

?>