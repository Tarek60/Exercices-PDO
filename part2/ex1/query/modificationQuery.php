<?php

include 'connexionQuery.php';

$query = 'UPDATE patients SET lastname=:lastname, firstname=:firstname, birthdate=:birthdate, phone=:phone, mail=:mail WHERE id=:id';
$patientResult = $bdd->prepare($query);
$patientResult->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$patientResult->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_INT);
$patientResult->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_INT);
$patientResult->bindValue(':birthdate', $_POST['birthdate'], PDO::PARAM_INT);
$patientResult->bindValue(':phone', $_POST['phone'], PDO::PARAM_INT);
$patientResult->bindValue(':mail', $_POST['mail'], PDO::PARAM_INT);
$patientResult->execute();
$patientList = $patientResult->fetch(PDO::FETCH_OBJ);

header('Location: ../profil-patient.php?id=' . $_POST['id']);
exit();
?>
