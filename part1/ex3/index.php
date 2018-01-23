<?php include 'Exercice3Query.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Exercice 3 - PDO</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php include '../pagination.php'; ?>
                    <h1 style="font-size: 20px">Exercice 3 : Afficher les 20 premiers clients</h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Date de naissance</th>
                                <th>Age</th>
                                <th>Carte</th>
                                <th>Numéro de carte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clientsList AS $clients) { ?>
                                <tr>
                                    <td><?= $clients->id; ?></td>
                                    <td><?= $clients->lastName; ?></td>
                                    <td><?= $clients->firstName; ?></td>
                                    <td><?= $clients->birthDate; ?></td>
                                    <td><?= $clients->age; ?></td>
                                    <td><?= $clients->card; ?></td>
                                    <td><?= $clients->cardNumber; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

