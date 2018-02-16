<?php
include_once 'models/dataBase.php';
include_once 'models/appointments.php';
include_once 'controllers/liste-rendezvousController.php';
include_once 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divList">
                <h1>Liste des rendez-vous</h1>
                <?php
                if ($success == true) {
                    ?>
                    <div class="alert alert-dismissible alert-success col-lg-3 success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p>La suppression s'est bien fait.</p>
                    </div>
                    <?php
                }
                ?>
                <table class="table table-hover table-stripped">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Heure</th>
                            <th>Voir</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($appointmentsList as $appointments) { ?>
                            <tr>
                                <td ><strong><?= $appointments->date; ?></strong></td>
                                <td ><strong><?= $appointments->hour; ?></strong></td>
                                <td><a href="rendezvous.php?appointmentId=<?= $appointments->id ?>" class="btn">Afficher</a></td>
                                <td><a href='liste-rendezvous.php?del=<?= $appointments->id ?>' class="btn">Supprimer</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="ajout-rendezvous.php" class="btn btn-circle btn-default">
                    <i class="fa fa-plus"></i><br>
                </a>
            </div>
        </div>
    </div>
</div>