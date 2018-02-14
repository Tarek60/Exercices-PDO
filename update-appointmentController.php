<?php
$patients = new patients();
$patientsList = $patients->getPatientsList();
$appointments = new appointments();
$appointments->id = $_GET['appointment'];
$regDate = '/^([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))$/';
$regHour = '/^(?:2[0-3]|[01]\d|\d):[0-5]\d$/';
$updateSuccess = false;
$formError = array();
if (isset($_POST['submit'])) {
    if (isset($_POST['idPatients'])) {
        $appointments->idPatients = htmlspecialchars($_POST['idPatients']);
    } else {
        $formError['idPatients'] = 'Le patient n\'a pas été trouvé.';
    }
    if (isset($_POST['hour'])) {
        if (!preg_match($regHour, $_POST['hour'])) {
            $formError['hour'] = 'L\'heure n\'est pas correcte';
        }
    } else {
        $formError['hour'] = 'L\'heure n\'a pas été renseigné';
    }
    if (isset($_POST['date'])) {
        if (!preg_match($regDate, $_POST['date'])) {
            $formError['date'] = 'La date n\'est pas correcte';
        }
    } else {
        $formError['date'] = 'La date n\'est pas renseignée';
    }
    if (!isset($formError['date']) && !isset($formError['hour'])) {
        $appointments->dateHour = $date = htmlspecialchars($_POST['date']) . ' ' . $hour = htmlspecialchars($_POST['hour']);
    }
//On vérifie qu'il n'y a pas eu d'erreur
    if (count($formError) == 0) {
        if (!$appointments->updateAppointments()) {
            $formError['submit'] = 'Erreur lors de l\'ajout';
        } else {
            $updateSuccess = true;
            $appointments->idPatients = '';
            $appointments->dateHour = '';
        }
    }
}
$appointmentInfo = $appointments->getAppointment();
