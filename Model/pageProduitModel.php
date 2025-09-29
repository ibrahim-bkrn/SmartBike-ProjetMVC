<?php

include_once "bdd.php";

function getProduitById($id) {
    $bdd = BDD();
    $stmt = $bdd->prepare("SELECT * FROM velo WHERE id = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
