<?php include 'Exercice6Query.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6 - PDO</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php include '../pagination.php'; ?>
                    <h1 style="font-size: 20px">Exercice 6 : Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure.</h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Titre du spectacle</th>
                                <th>Artiste</th>
                                <th>Date du spectacle</th>
                                <th>Heure du spectacle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($showsList AS $shows) { ?>
                                <tr>
                                    <td><?= $shows->title ?></td>
                                    <td><?= $shows->performer ?></td> 
                                    <td><?= $shows->date ?></td>
                                    <td><?= $shows->startTime ?></td>                          
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

