<?php
include 'models/dataBase.php';
include 'models/patients.php';
include 'controllers/list-patientController.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <title>List-patient</title>
    </head>
    <body>
        <p><a href="index.php">Accueil</a></p>
        <p><a href="ajout-patient.php">Ajout-patient</a></p>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Numéro Tel</th>
                    <th>Mail</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patientList as $patient) { ?>
                    <tr>
                        <td ><?= $patient->lastName ?></td>
                        <td><?= $patient->firstName ?></td>
                        <td><?= $patient->birthDate ?></td>
                        <td><?= $patient->phone ?></td>
                        <td><?= $patient->mail ?></td>
                        <td><a href="profil-patient.php?patientId=<?= $patient->id ?>" class="btn">Modifier</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
