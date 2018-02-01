<?php include 'query/ajout-rendezvousQuery.php'; ?>
<?php include 'header.php'; ?>
<?php
// Si le formulaire est rempli, on envoie les informations dans la base de données
if (!empty($_POST['dateHour']) && !empty($_POST['idPatients'])) {
    $req->execute(array(
        ':dateHour' => $_POST['dateHour'],
        ':idPatients' => $_POST['idPatients']
    ));
    ?>
    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <h1 style="text-align: center; font-size: 25px;">Le rendez-vous a bien été ajouter.</h1>
                <p>Pour voir la liste des rendez-vous, <a href="liste-rendezvous.php">cliquez-ici</a></p>
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
                <h1>Ajouter un rendez-vous</h1>
                <form method="post" action="ajout-rendezvous.php">
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Heure du rendez-vous</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
                                <input type="datetime" class="form-control" name="dateHour" id="name" placeholder="yyyy-mm-dd hh:mm:ss"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Selection du patient</label>
                        <div class="cols-sm-10">
                            <select name="idPatients" style="color: black">
                                <?php foreach ($patientsList as $patients) {
                                    ?> <option value="<?= $patients->id ?>"><?= $patients->lastname . ' ' . $patients->firstname ?></option>  
                                <?php } ?>
                            </select>
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
