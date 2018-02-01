<?php
include 'models/dataBase.php';
include 'models/patients.php';
include 'controllers/profil-patientController.php';
include 'header.php';
?>
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
                            <?php if ($isFind) {
                                ?> 
                                <h1>Informations du patient</h1>
                                <?php foreach ($errors as $error) { ?>
                                <p><?= $error ?><br></p>
                                <?php } ?>
                                <form action="profil-patient.php?patientId=<?= $_GET['patientId'] ?>" method="post">
                                    <h2>Nom : </h2>
                                    <input type="text" name="lastname" value="<?= $patient->lastname ?>" />
                                    <hr align="left">
                                    <h2>Prénom : </h2>
                                    <input type="text" name="firstname" value="<?= $patient->firstname ?>" />
                                    <hr align="left">
                                    <h2>Date de naissance : </h2>
                                    <input type="date" name="birthdate" value="<?= $patient->birthdate ?>" />
                                    <hr align="left">
                                    <h2>Numéro de téléphone : </h2>
                                    <input type="text" name="phone" value="<?= $patient->phone ?>" />
                                    <hr align="left">
                                    <h2>Adresse e-mail : </h2>
                                    <input type="email" name="mail" value="<?= $patient->mail ?>" />
                                    <hr align="left">
                                    <input type="submit" name="submit" value="Enregistrer les modifications" />
                                </form>
                            <?php } else { ?>
                                <p>Le patient n'a pas été trouvé.</p><?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
<!-- <h2>Nom : </h2>
<p></p>
<hr align="left">
<h2>Prénom : </h2>
<p></p>
<hr align="left">
<h2>Date de naissance : </h2>
<p></p>
<hr align="left">
<h2>Numéro de téléphone : </h2>
<p></p>
<hr align="left">
<h2>Adresse e-mail : </h2>
<p></p>
<hr align="left">
<a href="modif-patient.php?patientId=" class="btn btn-default">Modifier</a> -->