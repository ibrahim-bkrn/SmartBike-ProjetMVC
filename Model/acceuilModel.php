<?php

include "bdd.php";

function lastProduit(){
    $bdd = BDD();
    $rqt = $bdd->prepare("SELECT * FROM velo ORDER BY id DESC LIMIT 1");
    $rqt->execute();
    return $rqt->fetch(PDO::FETCH_ASSOC);
}