<?php include 'Exercice7Query.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 7 - PDO</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php include '../pagination.php'; ?>
                    <h1 style="font-size: 20px">Exercice 7 : Afficher tout les clients</h1>
                    <?php foreach ($clientsList AS $clients) { ?>
                        <div class="well">
                            <p><strong>Nom : </strong><?= $clients->lastName; ?></p>
                            <p><strong>Prénom : </strong><?= $clients->firstName; ?></br>
                            <p><strong>Date de naissance : </strong><?= $clients->birthDate; ?></br>
                            <p><strong>Carte de fidélité : </strong><?php
                                if ($clients->card == 1) {
                                    echo 'Oui';
                                } else {
                                    echo 'Non';
                                }
                                ?></p>
                            <?php if ($clients->cardNumber == true) { ?>
                                <p><strong>Numéro de carte : </strong><?= $clients->cardNumber; ?></p>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>

