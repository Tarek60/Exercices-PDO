<?php
include 'models/dataBase.php';
include 'models/patients.php';
include 'models/appointments.php';
include 'controllers/ajout-rendezvousController.php';
include 'header.php';
?>
<div class="container">
    <div class="row main">
        <div class="main-login main-center divAdd">
            <h1>Ajouter un rendez-vous</h1>
            <form method="post" action="ajout-rendezvous.php">
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Date et heure du rendez-vous</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar-o fa" aria-hidden="true"></i></span>
                            <input type="datetime" class="form-control" name="dateHour" id="name" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Selection du patient</label>
                    <div class="cols-sm-10">
                        <select name="idPatients" style="color: black">
                            <?php foreach ($patientsList as $patients) {
                                ?> <option value="<?= $patients->id ?>"><?= $patients->lastname . ' ' . $patients->firstname ?></option>  
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Enregistrer" name="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" />
                </div>
            </form>
        </div>
    </div>
</div>