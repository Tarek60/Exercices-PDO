<?php
include_once 'models/dataBase.php';
include_once 'models/appointments.php';
include_once 'models/patients.php';
include_once 'controllers/rendezvousController.php';
include_once 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divProfil">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="infoUser">
                            <h1>Informations du rendez-vous</h1>
                            <form action="rendezvous.php?appointmentId=<?= $_GET['appointmentId'] ?>" method="post">
                                <label>Date du rendez-vous : </label>
                                <input type="date" name="date" value="<?= $appointmentDetails->date ?>" />
                                <hr align="left">
                                <label>Heure du rendez-vous : </label>
                                <input type="time" name="hour" value="<?= $appointmentDetails->hour ?>" />
                                <hr align="left">
                                <label>Patient correspondant : </label>
                                <select name="idPatients">
                                    <?php foreach ($patientsList as $patients) { ?>
                                        <option value="<?= $patients->id ?>" <?= $patients->id == $appointmentDetails->idPatients ? 'selected' : '' ?>><?= $patients->lastname . ' ' . $patients->firstname ?></option>  
                                    <?php } ?>
                                </select>
                                <hr align="left">
                                <input type="submit" name="submit" value="Enregistrer les modifications" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>