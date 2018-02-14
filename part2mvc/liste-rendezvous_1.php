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
                <div class="list-group">
                    <!-- On récupère les valeur des colonnes de la table patient en parcourant le tableau $patientList, pour les afficher dans la liste  -->
                    <?php foreach ($patientsList as $patients) {
                        ?>
                    <a href="profil-patient.php?patientId=<?= $patients->id; ?>" class="list-group-item list-group-item-action"><?= $patients->lastname . ' ' . $patients->firstname; ?></a>
                    <?php }
                    ?>
                </div>
                <a href="ajout-patient.php" class="btn btn-circle btn-default">
                    <i class="fa fa-plus"></i><br>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>