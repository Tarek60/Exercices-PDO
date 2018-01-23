<?php include 'Exercice2Query.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Exercice 2 - PDO</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php include '../pagination.php'; ?>
                    <h1 style="font-size: 20px">Exercice 2 : Afficher tout les types de spectacles</h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Types de spectacles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($showTypesList AS $showTypes) { ?>
                                <tr>
                                    <td><?= $showTypes->id ?></td>
                                    <td><?= $showTypes->type ?></td>                        
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </body>
</html>

