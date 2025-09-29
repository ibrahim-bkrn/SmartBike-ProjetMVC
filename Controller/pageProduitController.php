<?php

include "Model/produitsModel.php"; // fichier contenant la fonction getProduitById($id)
include "Model/pageProduitModel.php"; // fichier contenant la fonction getProduitById($id)

// récupérer l'id depuis l'URL
$id = intval($_GET['id']); // sécurité : on force l'entier

// récupérer le produit depuis la BDD
$produit = getProduitById($id); // suppose que cette fonction existe et renvoie un tableau associatif

// afficher le produit
echo '<h2>' . $produit['nom'] . '</h2>';
echo '<p>Prix : ' . $produit['prix'] . ' €</p>';
echo '<img src="' . $produit['photo'] . '" style="max-width:300px;">';
echo '<p>' . $produit['description'] . '</p>';

?>
<button><a href="index.php">Retour</a></button>