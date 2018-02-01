<?php
$patients = new patients();
$appointments = new appointments();
$patientsList = $patients->getPatientsList();
if (isset($_POST['dateHour'])) {
    $appointments->dateHour = ($_POST['dateHour']);
}
if (isset($_POST['idPatients'])) {
    $appointments->idPatients = ($_POST['idPatients']);
    
}
if (isset($_POST['submit'])){
    $appointments->addAppointments();
}

?>