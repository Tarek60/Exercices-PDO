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
                            <form action="query/modificationQuery.php" method="post">
                                <h1>Modification du patient</h1>
                                <h2>Nom : </h2>
                                <input type="hidden" name="id" value="<?= $patientList->id ?>" />
                                <input type="text" name="lastname" value="<?= $patientList->lastname ?>" />
                                <hr align="left">
                                <h2>Prénom : </h2>
                                <input type="text" name="firstname" value="<?= $patientList->firstname ?>" />
                                <hr align="left">
                                <h2>Date de naissance : </h2>
                                <input type="text" name="birthdate" value="<?= $patientList->birthdate ?>" />
                                <hr align="left">
                                <h2>Numéro de téléphone : </h2>
                                <input type="text" name="phone" value="<?= $patientList->phone ?>" />
                                <hr align="left">
                                <h2>Adresse e-mail : </h2>
                                <input type="email" name="mail" value="<?= $patientList->mail ?>" />
                                <hr align="left">
                                <input type="submit" value="Enregistrer les modifications" />
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>