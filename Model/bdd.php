<?php

function BDD(){
    $host = '127.0.0.1';
    $dbname = 'SmartBike';
    $user = 'root';
    $pass = '';

    try {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
        return $bdd;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}