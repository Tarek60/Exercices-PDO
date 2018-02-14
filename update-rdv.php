<?php
include 'header.php';
include 'controllers/update-appointmentController.php';
?>
<div class="section white">
    <?php if ($_GET['appointment']) { ?>
        <div>
            <?php foreach ($formError as $error) { ?>
                <p class="black-text"><?= $error ?></p>
            <?php } ?>
        </div>
        <form action="#" method="POST">
            <label for="idPatients" class="<?= isset($formError['idPatients']) ? 'inputError' : '' ?>">Numéro du patient </label>
            <select name="idPatients">
                <option disabled>Sélectionnez un patient</option>
                <?php foreach ($patientsList as $patient) { ?>
                    <option value="<?= $patient->id; ?>" <?= $patient->id == $appointmentInfo->idPatients ? 'selected' : ''; ?>><?= $patient->firstname . ' ' . $patient->lastname; ?></option>
                <?php } ?>
            </select>
            <label for="date" class="<?= isset($formError['date']) ? 'inputError' : '' ?>">Date du rendez-vous </label><input type="date" min="<?= date('Y-m-d') ?>" max="2018-12-31" name="date" value="<?= $appointmentInfo->date ?>"/>
            <label for="hour" class="<?= isset($formError['hour']) ? 'inputError' : '' ?>">Heure du rendez-vous </label><input type="time" name="hour" value="<?= $appointmentInfo->hour ?>"/>
            <input name="submit" type="submit" class="waves-effect waves-light btn" value="Valider" />
        </form>
        <p class="formValid">
            <?php if ($updateSuccess) { ?>
            <p class="black-text">Envoi réussi</p>
            <?php
        }
    } else {
        ?>
        <p>Raté</p>
    <?php } ?>
</p>
</div>
<?php
include 'footer.php';
?>
