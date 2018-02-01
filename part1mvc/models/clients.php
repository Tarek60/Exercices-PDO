<?php

class clients {

    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '01/01/1970';
    public $card = false;
    public $cardNumber = 0;
    private $pdo;

    public function __construct() {
// Connexion à la base de données
        try {
            $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=colyseum;charset=utf8', 'usr_pdopartie1', 'pdopartie1');
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

    /**
     * Cette méthode permet de récupérer la liste des clients
     * @return array
     */
    public function getClientsList() {
        $query = 'SELECT `id`, `lastName`, `firstName`, DATE_FORMAT(`birthDate`, "%d/%m/%Y") AS `birthDate`, `card`, `cardNumber` FROM `clients`';
        $clientsResult = $this->pdo->query($query);
        // On vérfie que $clientResult est bien un objet 
        if (is_object($clientsResult)) {
            return $clientsResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Sinon on retourne un tableau vide
        else {
            return array();
        }
    }

    public function getTwentyClients() {
        $clientsList = array();
        $query = 'SELECT `id`, `lastName`, `firstName`, DATE_FORMAT(`birthDate`, "%d/%m/%Y") AS `birthDate`, `card`, `cardNumber` FROM `clients` LIMIT 0, 20';
        $clientsResult = $this->pdo->query($query);
        // On vérfie que $clientResult est bien un objet 
        if (is_object($clientsResult)) {
            $clientsList = $clientsResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Sinon, on retourne un tableau vide
        return $clientsList;
    }

    public function __destruct() {
        
    }

}
?>
