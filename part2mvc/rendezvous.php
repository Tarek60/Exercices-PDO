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
                        <div class="imgUser">
                            <i class="fa fa-calendar fa-5x"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="infoUser">
                            <?php foreach($formError as $errors) { ?>
                            <p><?= $errors ?></p>
                            <?php } ?>
                            <h1>Informations du rendez-vous</h1>
                            <form action="#" method="post">
                                <h2>Date du rendez-vous : </h2>
                                <input type="date" name="date" min="<?= date('Y-m-d') ?>" max="2018-12-31" value="<?= $appointmentInfo->date ?>" />
                                <hr align="left">
                                <h2>Heure du rendez-vous : </h2>
                                <input type="time" name="hour" value="<?= $appointmentInfo->hour ?>" />
                                <hr align="left">
                                <h2>Patient correspondant : </h2>
                                <select name="idPatients" style="color: black">
                                    <?php foreach ($patientsList as $patients) { ?>
                                        <option value="<?= $patients->id ?>" <?= $patients->id == $appointmentInfo->idPatients ? 'selected' : '' ?>><?= $patients->lastname . ' ' . $patients->firstname ?></option>  
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