<?php

include 'connexionQuery.php';

$query = 'SELECT id, dateHour, idPatients FROM appointments';
// Gràce à ->query($query) on éxécute la requête SQL et on récupère un objet PDO Statement
$appointmentsResult = $bdd->query($query);
/* fetchAll() va retourner le résultat sous la forme du paramètre demandé
 * PDO::FETCH_OBJ est le paramètre qui permet d'avoir un tableau d'objets. Les clés sont les noms des colonnes de la table
 */
$appointmentsList = $appointmentsResult->fetchAll(PDO::FETCH_OBJ);
// On affecte NULL à l'objet PDO pour fermer la connexion à la base de données
$bdd = NULL;
?>