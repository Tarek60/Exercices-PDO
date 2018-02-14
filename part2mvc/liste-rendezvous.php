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
                <table border="1" class="table table-rdv">
                    <thead>
                        <tr>
                            <th>Date du rendez-vous</th>
                            <th>Heure du rendez-vous</th>
                            <th>Modifier le rendez-vous</th>
                            <th>Supprimer le rendez-vous</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($appointmentsList as $appointments) { ?>
                            <tr>
                                <td><?= $appointments->date; ?></td>
                                <td><?= $appointments->hour; ?></td>
                                <td><a href="rendezvous.php?appointmentId=<?= $appointments->id ?>" class="btn btn-circle btn-default"><i>Modifier</i></a></td>
                                <td><a href="liste-rendezvous.php?del=<?= $appointments->id ?>" class="btn btn-circle btn-default"><i>Supprimer</i></a></td>
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
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>