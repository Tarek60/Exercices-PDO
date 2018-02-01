<?php include 'models/clients.php';
include 'controllers/indexController.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Exercice 1 - PDO MVC</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="font-size: 20px">Exercice 1 : Afficher tout les clients</h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Date de naissance</th>
                                <th>Carte</th>
                                <th>Numéro de carte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clientsList AS $customers) { ?>
                                <tr>
                                    <td><?= $customers->id; ?></td>
                                    <td><?= $customers->lastName; ?></td>
                                    <td><?= $customers->firstName; ?></td>
                                    <td><?= $customers->birthDate; ?></td>
                                    <td><?= $customers->card; ?></td>
                                    <td><?= $customers->cardNumber; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="font-size: 20px">Exercice 3 : Afficher les 20 premiers clients</h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Date de naissance</th>
                                <th>Carte</th>
                                <th>Numéro de carte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clientsTwentyList AS $customers) { ?>
                                <tr>
                                    <td><?= $customers->id; ?></td>
                                    <td><?= $customers->lastName; ?></td>
                                    <td><?= $customers->firstName; ?></td>
                                    <td><?= $customers->birthDate; ?></td>
                                    <td><?= $customers->card; ?></td>
                                    <td><?= $customers->cardNumber; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>   
    </body>
</html>

