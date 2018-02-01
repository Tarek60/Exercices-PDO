<?php
include 'models/dataBase.php';
include 'models/patients.php';
include 'controllers/modif-patientController.php';
header('Location: profil-patient.php?patientId=' . $_POST['id']);
?>