<?php

    include_once 'connexion.php';

// Requête SQL pour récupérer les données de la table "participants"
$requete = "SELECT * FROM participants";
$resultat = $connexion->query($requete);

// Créer un tableau associatif des résultats
$data = array();
while ($row = $resultat->fetch_assoc()) {
    $data[] = $row;
}

// Retourner les données au format JSON
echo json_encode($data);

// Fermer la connexion à la base de données
$connexion->close();
?>
