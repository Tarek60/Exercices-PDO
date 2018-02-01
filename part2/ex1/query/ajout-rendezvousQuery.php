<?php

include 'connexionQuery.php';

$queryPatient = 'SELECT id, lastname, firstname FROM patients';
$patientsResult = $bdd->query($queryPatient);
$patientsList = $patientsResult->fetchAll(PDO::FETCH_OBJ);

// On prépare la requête
$req = $bdd->prepare('INSERT INTO appointments(dateHour, idPatients) VALUES(:dateHour, :idPatients)');

$bdd = NULL;
?>