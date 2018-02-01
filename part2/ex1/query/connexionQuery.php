<?php

// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=HospitalE2N;charset=utf8', 'usr_pdopartie2', 'pdopartie2');
} catch (Exception $ex) {
    die('Erreur : ' . $ex->getMessage());
}
?>