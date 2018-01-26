<?php include 'liste-patientsQuery.php'; ?>
<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divList">
                <h1>Liste des patients</h1>
                <div class="list-group">
                    <?php foreach ($patientsList as $patients) {
                        ?>
                    <a href="profil-patient.php?id=<?= $patients->id; ?>" class="list-group-item list-group-item-action"><?= $patients->lastname . ' ' . $patients->firstname; ?></a>
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