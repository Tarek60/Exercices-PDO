<?php
include 'models/dataBase.php';
include 'models/patients.php';
include 'controllers/ajout-patientController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <link href="assets/style.css" rel="stylesheet" type="text/css"/>
        <title>Ajout-Patient</title>
    </head>
    <body>
        <p><a href="index.php">Accueil</a></p>
        <div>
            <?php foreach ($formError as $Error) { ?>
                <p><?= $Error ?></p>
            <?php } ?>
        </div>
        <form action="#" method="POST">
            <p><label for="lastname" class="<?= isset($formError['lastName']) ? 'inputError' : '' ?>">Nom : </label><input type="text" name="lastname" value="<?= $patients->lastName ?>" /></p>
            <p><label for="firstname" class="<?= isset($formError['firstName']) ? 'inputError' : '' ?>">Prénom : </label><input type="text" name="firstname" value="<?= $patients->firstName ?>" /></p>
            <p><label for="birthdate" class="<?= isset($formError['birthDate']) ? 'inputError' : '' ?>">Date de naissance : </label><input type="date" name="birthdate" value="<?= $patients->birthDate ?>" /></p>
            <p><label for="phone" class="<?= isset($formError['phone']) ? 'inputError' : '' ?>">Numéro de tel : </label><input type="text" name="phone" value="<?= $patients->phone ?>" /></p>
            <p><label for="mail" class="<?= isset($formError['mail']) ? 'inputError' : '' ?>">Adresse mail : </label><input type="text" name="mail" value="<?= $patients->mail ?>" /></p>
            <p><input name="submit" type="submit" value="Valider" /></p>
        </form>
        <p class="formValid">
            <?php
            if ($insertSuccess) {
                echo 'Envoi réussi';
            }
            ?>
        </p>
    </body>
</html>
