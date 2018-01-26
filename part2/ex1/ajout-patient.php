<?php include 'ajout-patientQuery.php'; ?>
<?php include 'header.php'; ?>
<?php
// Si le formulaire est rempli, on envoie les informations dans la base de données
if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['birthDate']) && !empty($_POST['phoneNumber']) && !empty($_POST['email'])) {
    $req->execute(array(
        ':lastName' => $_POST['lastName'],
        ':firstName' => $_POST['firstName'],
        ':birthDate' => $_POST['birthDate'],
        ':phoneNumber' => $_POST['phoneNumber'],
        ':email' => $_POST['email']
    ));
    ?>
    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <h1 style="text-align: center; font-size: 25px;">Le formulaire a bien été envoyer</h1>
                <p>Pour voir la liste des patients, <a href="liste-patients.php">cliquez-ici</a></p>
            </div>
        </div>
    </div>
    <?php
} else {
    // Sinon, on affiche le formulaire
    ?> 
    <div class="container">
        <div class="row main">
            <div class="main-login main-center divAdd">
                <h1>Ajouter un patient</h1>
                <form method="post" action="ajout-patient.php">
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Votre nom</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="lastName" id="name"  placeholder="Entrer votre nom"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Votre prénom</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="firstName" id="name"  placeholder="Entrer votre prénom"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Votre date de naissance</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="birthDate" id="email"  placeholder="Entrer votre date de naissance"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Votre numéro de téléphone</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="phoneNumber" id="username"  placeholder="Entrer votre numéro de téléphone"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Votre adresse e-mail</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="password"  placeholder="Entrer votre adresse email"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <input type="submit" value="Enregistrer" id="button" class="btn btn-primary btn-lg btn-block login-button" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php include 'footer.php'; ?>
