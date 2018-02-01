<?php

include 'connexionQuery.php';
// On prépare la requête d'envoie du formulaire dans la base de données
$req = $bdd->prepare('INSERT INTO patients(lastname, firstname, birthdate, phone, mail) VALUES(:lastName, :firstName, :birthDate, :phoneNumber, :email)');
// On affecte NULL à l'objet PDO pour fermer la connexion à la base de données
$bdd = NULL;
?>