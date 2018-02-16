<?php
include_once 'models/dataBase.php';
include_once 'models/patients.php';
include_once 'controllers/profil-patientController.php';
include_once 'header.php';
$pdo = new PDO('mysql:host=localhost;dbname=HospitalE2N;charset=utf8', 'usr_pdopartie2', 'pdopartie2');
    $reqfood = $pdo->prepare('SELECT * FROM `appointments` WHERE `idPatients` = :id');
    $reqfood->bindValue(':id', $_GET['patientId'], PDO::PARAM_INT);
    $reqfood->execute();
    $partyfood = $reqfood->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divProfil">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="infoUser">
                            <?php if ($isFind) {
                                ?> 
                                <h1>Informations du patient</h1>
                                <?php foreach ($errors as $error) { ?>
                                <p><?= $error ?><br></p>
                                <?php } ?>
                                <form action="profil-patient.php?patientId=<?= $patient->id ?>" method="post">
                                    <label>Nom : </label>
                                    <input type="text" name="lastname" value="<?= $patient->lastname ?>" />
                                    <hr align="left">
                                    <label>Prénom : </label>
                                    <input type="text" name="firstname" value="<?= $patient->firstname ?>" />
                                    <hr align="left">
                                    <label>Date de naissance : </label>
                                    <input type="date" name="birthdate" value="<?= $patient->birthdate ?>" />
                                    <hr align="left">
                                    <label>Numéro de téléphone : </label>
                                    <input type="text" name="phone" value="<?= $patient->phone ?>" />
                                    <hr align="left">
                                    <label>Adresse e-mail : </label>
                                    <input type="email" name="mail" value="<?= $patient->mail ?>" />
                                    <hr align="left">
                                    <input type="submit" name="submit" value="Enregistrer les modifications" />
                                </form>
                                <h2>Liste des rendez-vous de ce patient</h2>
                                <?php
                                    foreach ($partyfood as $appointment){
                                        echo $appointment->dateHour;
                                    }
                                ?>
                                
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
