<?php
// Je crée une variable query dans laquelle je mets ma requête SQL
$query = 'SELECT `id`, `type` FROM showTypes';
// On fait un try catch pour être sûr que la connexion à mysql se fasse
try {
    // On instancie un objet PDO. Le host est l'adresse locale sur laquelle on se connecte. dbname correspond au nom de la base de données.
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8', 'usr_pdopartie1', 'pdopartie1');
} catch (Exception $ex) { // On attrape l'exception, qui est une erreur de PHP
    // Die arrête le script PHP en cas d'erreur et affiche ce qu'on lui met en paramètre
    die('Erreur : ' . $ex->getMessage());
}
// Gràce à ->query($query) on éxécute la requête SQL et on récupère un objet PDO Statement
$showTypesResult = $bdd->query($query);
/* fetchAll() va retourner le résultat sous la forme du paramètre demandé
 * PDO::FETCH_OBJ est le paramètre qui permet d'avoir un tableau d'objets. Les clés sont les noms des colonnes de la table
 */
$showTypesList = $showTypesResult->fetchAll(PDO::FETCH_OBJ);
// On affecte NULL à l'objet PDO pour fermer la connexion à la base de données
$bdd = NULL;
?>