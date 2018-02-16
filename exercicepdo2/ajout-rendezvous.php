<?php
include_once 'models/dataBase.php';
include_once 'models/patients.php';
include_once 'models/appointments.php';
include_once 'controllers/ajout-rendezvousController.php';
include_once 'header.php';
?>
<div class="container">
    <div class="row main">
        <div class="main-login main-center divAdd">
            <h1>Ajouter un rendez-vous</h1>
            <form method="post" action="ajout-rendezvous.php">
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Date du rendez-vous</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar-o fa" aria-hidden="true"></i></span>
                            <input type="date" class="form-control" name="date" id="name" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Heure du rendez-vous</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
                            <input type="time" class="form-control" name="hour" id="name" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Selection du patient</label>
                    <div class="cols-sm-10">
                        <select name="idPatients" style="color: black">
                            <?php foreach ($patientsList as $patients) { ?>
                                <option value="<?= $patients->id ?>"><?= $patients->lastname . ' ' . $patients->firstname ?></option>  
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