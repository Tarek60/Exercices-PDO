<?php
class appointments {
    public $id = 0;
    public $dateHours = '01/01/1900 00:00';
    public $idPatients = 0;
    public function __construct() {
        //connexion a la bdd
        try {
            $db = new PDO('mysql:host=localhost;dbname=HospitalE2N;charset=utf8', 'usr_pdopartie2', 'pdopartie2');
            //message si il y a une erreur lors de la connexion a la bdd
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function __destruct() {   
    }
}
?>