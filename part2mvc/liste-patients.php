<?php
include_once 'models/dataBase.php';
include_once 'models/patients.php';
include_once 'controllers/liste-patientsController.php';
include_once 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divList">
                <h1>Liste des patients</h1>
                <table border="1" class="table table-rdv">
                    <thead>
                        <tr>
                            <th>Nom du patient</th>
                            <th>Prénom du patient</th>
                            <th>Modifier le patient</th>
                            <th>Supprimer le patient</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($patientsList as $patients) { ?>
                            <tr>
                                <td><?= $patients->lastname; ?></td>
                                <td><?= $patients->firstname ?></td>
                                <td><a href="profil-patient.php?patientId=<?= $patients->id; ?>" class="btn btn-circle btn-default"><i>Modifier</i></a></td>
                                <td><a href="#" class="btn btn-circle btn-default"><i>Supprimer</i></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>