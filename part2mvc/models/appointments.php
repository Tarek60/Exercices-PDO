<?php

class appointments extends dataBase {

    public $id = 0;
    public $dateHour = '';
    public $idPatients = 0;

    public function __construct() {
        parent::__construct();
    }

    public function addAppointments() {
        $query = 'INSERT INTO `appointments`(`dateHour`, `idPatients`) VALUES(:dateHour, :idPatients)';
        $appointmentsResult = $this->db->prepare($query);
        $appointmentsResult->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $appointmentsResult->bindValue(':idPatients', $this->idPatients, PDO::PARAM_STR);
        return $appointmentsResult->execute();
    }

    public function __destruct() {
        
    }

}

?>