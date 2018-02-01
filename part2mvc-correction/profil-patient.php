<?php
include_once 'models/dataBase.php';
include_once 'models/patients.php';
include_once 'controllers/profil-patientController.php';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Profil patient</title>
  </head>
  <body>
      <?php if ($isFind) { ?>
        <h1>Profil de : <?= $patient->lastName ?> <?= $patient->firstName ?></h1>
        <?php foreach ($errors as $error) { ?>
            <p><?= $error ?></p>
        <?php } ?>
        <form action="profil-patient.php?patientId=<?= $_GET['patientId'] ?>" method="POST" class="form">
          <label for="lastName">Nom : </label><input type="text" value="<?= $patient->lastName ?>" name="lastName" />
          <label for="firstName">Prénom : </label><input type="text" value="<?= $patient->firstName ?>" name="firstName" />
          <label for="birthDate">Date de naissance : </label><input type="date" value="<?= $patient->birthDate ?>" name="birthDate" />
          <label for="phone">Numéro de téléphone : </label><input type="text" value="<?= $patient->phone ?>" name="phone" />
          <label for="mail">Mail : </label><input type="text" value="<?= $patient->mail ?>" name="mail" />
          <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
        </form>
    <?php } else { ?>
        <p>Le patient n'a pas été trouvé.</p>
    <?php } ?>
    <a href="index.php">Accueil</a>
  </body>
</html>