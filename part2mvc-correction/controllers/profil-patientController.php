<?php

$errors = array();
// On instancie $patient qui devient un objet
$patient = new patients();
if (isset($_GET['patientId'])) {
    $patient->id = $_GET['patientId'];
}

$isFind = $patient->getPatientById();

if (count($_POST) > 0) {
    if (!empty($_POST['lastName'])) {
        $patient->lastName = $_POST['lastName'];
    } else {
        $errors['lastName'] = 'Veuillez renseigner votre nom';
    }

    if (!empty($_POST['firstName'])) {
        $patient->firstName = $_POST['firstName'];
    } else {
        $errors['firstName'] = 'Veuillez renseigner votre prénom';
    }

    if (!empty($_POST['birthDate'])) {
        $patient->birthDate = $_POST['birthDate'];
    } else {
        $errors['birthDate'] = 'Veuillez renseigner votre date de naissance';
    }

    if (!empty($_POST['phone'])) {
        $patient->phone = $_POST['phone'];
    } else {
        $errors['phone'] = 'Veuillez renseigner votre numéro de téléphone';
    }

    if (!empty($_POST['mail'])) {
        $patient->mail = $_POST['mail'];
    } else {
        $errors['mail'] = 'Veuillez renseigner votre adresse e-mail';
    }

    if (count($errors) == 0) {
        $patient->updatePatient();
    }
}
?>