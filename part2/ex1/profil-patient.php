<?php include 'query/profil-patientQuery.php'; ?>
<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divProfil">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="imgUser">
                            <i class="fa fa-user-circle fa-5x"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="infoUser">
                            <h1>Informations du patient</h1>
                            <h2>Nom : </h2>
                            <p><?= $patientList->lastname; ?></p>
                            <hr align="left">
                            <h2>Prénom : </h2>
                            <p><?= $patientList->firstname; ?></p>
                            <hr align="left">
                            <h2>Date de naissance : </h2>
                            <p><?= $patientList->birthdate; ?></p>
                            <hr align="left">
                            <h2>Numéro de téléphone : </h2>
                            <p><?= $patientList->phone; ?></p>
                            <hr align="left">
                            <h2>Adresse e-mail : </h2>
                            <p><?= $patientList->mail; ?></p>
                            <hr align="left">
                            <a href="profil-patient-modif.php?id=<?= $patientList->id; ?>" class="btn btn-default">Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>