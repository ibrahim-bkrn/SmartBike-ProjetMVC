<?php

include_once "bdd.php";


function getAllProducts() {
    $bdd = BDD();
    $stmt = $bdd->query("SELECT * FROM velo");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}