<?php

// Include the database connection file
require_once 'application/core/database.php';

// Define a function to get all internships
function all_stages()
{
    // Get the PDO object for database operations
    $pdo = get_pdo();
    // Prepare a SQL query to get all internships, including student and company information
    $query = 'SELECT * FROM stages';
    // Execute the SQL query
    $stmt = $pdo->query($query);

    // Return all the fetched data as an associative array
    return $stmt->fetchAll();
}

// Define a function to get an internship by its id
function get_stage_by_id($idStage)
{
    // Get the PDO object for database operations
    $pdo = get_pdo();
    // Prepare a SQL query to get an internship by its id
    $query = 'SELECT * FROM stages WHERE id = ?';
    // Prepare the SQL statement
    $stmt = $pdo->prepare($query);
    // Execute the SQL statement with the provided id
    $stmt->execute([$idStage]);

    // Return the fetched data as an associative array
    return $stmt->fetch();
}

// Define a function to get an internship by its token
function get_stage_by_token($token)
{
    // Get the PDO object for database operations
    $pdo = get_pdo();
    // Prepare a SQL query to get an internship by its token
    $query = 'SELECT * FROM stages WHERE token = ?';
    // Prepare the SQL statement
    $stmt = $pdo->prepare($query);
    // Execute the SQL statement with the provided token
    $stmt->execute([$token]);

    // Return the fetched data as an associative array
    return $stmt->fetch();
}

// Define a function to get students doing an internship in the same company as the internship designated by the token
function get_etudiants_dans_meme_entreprise_by_token($token)
{
    // Get the PDO object for database operations
    $pdo = get_pdo();
    // Prepare a SQL query to get students doing an internship in the same company as the internship designated by the token
    $query = 'SELECT etudiant.* FROM etudiant JOIN stages ON etudiant.id = stages.idEtudiant WHERE stages.token = ?';
    // Prepare the SQL statement
    $stmt = $pdo->prepare($query);
    // Execute the SQL statement with the provided token
    $stmt->execute([$token]);

    // Return all the fetched data as an associative array
    return $stmt->fetchAll();
}

// Define a function to create a new internship
function creer_stage($idEtudiant, $idEntreprise, $debut, $fin, $soutenance, $maitre, $mission)
{
    // Get the PDO object for database operations
    $pdo = get_pdo();
    // Generate a token for the new internship
    $token = generate_token(20);
    // Prepare a SQL query to insert a new internship into the database
    $query = 'INSERT INTO stages (idEtudiant, idEntreprise, debut, fin, soutenance, maitre, mission, token) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
    // Prepare the SQL statement
    $stmt = $pdo->prepare($query);
    // Execute the SQL statement with the provided data
    $stmt->execute([$idEtudiant, $idEntreprise, $debut, $fin, $soutenance, $maitre, $mission, $token]);

    // Return the id of the last inserted row
    return $pdo->lastInsertId();
}

// Define a function to edit an existing internship
function edit_stage($idStage, $idEtudiant, $idEntreprise, $debut, $fin, $soutenance, $maitre, $mission)
{
    // Get the PDO object for database operations
    $pdo = get_pdo();
    // Generate a new token for the edited internship
    $token = generate_token(20);
    // Prepare a SQL query to update an existing internship in the database
    $query = 'UPDATE stages SET idEtudiant = ?, idEntreprise = ?, debut = ?, fin = ?, soutenance = ?, maitre = ?, mission = ?, token = ? WHERE id = ?';
    // Prepare the SQL statement
    $stmt = $pdo->prepare($query);
    // Execute the SQL statement with the provided data
    $stmt->execute([$idEtudiant, $idEntreprise, $debut, $fin, $soutenance, $maitre, $mission, $token, $idStage]);
}

// Define a function to delete an existing internship
function supprime_stage($idStage)
{
    // Get the PDO object for database operations
    $pdo = get_pdo();
    // Prepare a SQL query to delete an existing internship from the database
    $query = 'DELETE FROM stages WHERE id = ?';
    // Prepare the SQL statement
    $stmt = $pdo->prepare($query);
    // Execute the SQL statement with the provided id
    $stmt->execute([$idStage]);
}

?>