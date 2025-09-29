<?php

include "Model/produitsModel.php";
include "View/produits.php";

$products = getAllProducts();
getAllProducts($products);

foreach ($products as $p) {
    echo '<div>';
    echo '<h2>' . htmlspecialchars($p['nom']) . '</h2>';
    echo '<p>Prix : ' . htmlspecialchars($p['prix']) . ' €</p>';
    echo '<img src="' . htmlspecialchars($p['photo']) . '" style="max-width:300px;">';
    echo '<p>' . htmlspecialchars($p['description']) . '</p>';
    echo '<button><a href="index.php?page=commander">Commander</a></button>';
    echo '</div><br><hr>';
}

echo "<br>";
echo "<br>";
echo "<br>";
?>