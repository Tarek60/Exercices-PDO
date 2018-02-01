<?php

include 'connexionQuery.php';

if (isset($_GET['id'])) {
    $query = 'SELECT id, lastname, firstname, birthdate, phone, mail FROM patients WHERE id = :id';
    // Gràce à ->query($query) on éxécute la requête SQL et on récupère un objet PDO Statement
    $patientResult = $bdd->prepare($query);
    $patientResult->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $patientResult->execute();
    /* fetch() va retourner le résultat sous la forme du paramètre demandé
     * PDO::FETCH_OBJ est le paramètre qui permet d'avoir un tableau d'objets. Les clés sont les noms des colonnes de la table
     */
    $patientList = $patientResult->fetch(PDO::FETCH_OBJ);
// On affecte NULL à l'objet PDO pour fermer la connexion à la base de données
}

$bdd = NULL;
?>