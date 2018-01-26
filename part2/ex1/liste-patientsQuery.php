<?php
$query = 'SELECT id, lastname, firstname FROM patients';
try {

    $bdd = new PDO('mysql:host=127.0.0.1;dbname=HospitalE2N;charset=utf8', 'usr_pdopartie2', 'pdopartie2');
} catch (Exception $ex) { 
    die('Erreur : ' . $ex->getMessage());
}
// Gràce à ->query($query) on éxécute la requête SQL et on récupère un objet PDO Statement
$patientsResult = $bdd->query($query);
/* fetchAll() va retourner le résultat sous la forme du paramètre demandé
 * PDO::FETCH_OBJ est le paramètre qui permet d'avoir un tableau d'objets. Les clés sont les noms des colonnes de la table
 */
$patientsList = $patientsResult->fetchAll(PDO::FETCH_OBJ);
// On affecte NULL à l'objet PDO pour fermer la connexion à la base de données
$bdd = NULL;
?>