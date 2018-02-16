<?php

$patients = new patients();
$appointments = new appointments();
$patientsList = $patients->getPatientsList();

$regDate = '/([0-9]{4})\-(([0]{1}[0-9]{1})|([1]{1}[0-2]{1}))\-(([0-2]{1}[0-9]{1})|([3]{1}[0-1]))/'    ;
$regHour = '/(([0-1]{1}[0-9]{1})|([2]{1}[0-3]{1}))\:([0-5]{1}[0-9]{1})/';
$formError = array();

if (isset($_POST['date']) && isset($_POST['hour'])) {
    $appointments->dateHour = htmlspecialchars($_POST['date']) . ' ' . htmlspecialchars($_POST['hour']);
}
if (isset($_POST['idPatients'])) {
    $appointments->idPatients = htmlspecialchars($_POST['idPatients']);
}
if (isset($_POST['submit'])) {
    $appointments->addAppointments();
}
?>