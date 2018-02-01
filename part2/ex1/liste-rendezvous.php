<?php include 'query/liste-rendezvousQuery.php'; ?>
<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divList">
                <h1>Liste des rendez-vous</h1>
                <div class="list-group">
                    <?php foreach ($appointmentsList AS $appointments) {
                        ?> <a href="profil-patient.php?id=<?= $appointments->idPatients; ?>" class="list-group-item list-group-item-action">Rendez-vous : <?= $appointments->dateHour; ?></a>
                    <?php 
                    } ?>
                </div>
                <a href="ajout-rendezvous.php" class="btn btn-circle btn-default">
                    <i class="fa fa-plus"></i><br>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>