<?php

include "bdd.php";

function lastProduit(){
    $bdd = BDD();
    $rqt = $bdd->prepare("SELECT * FROM velo WHERE id = 3");
    $rqt->execute();
    return $rqt->fetch(PDO::FETCH_ASSOC);
}