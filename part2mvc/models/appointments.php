<?php

class appointments extends dataBase {

    public $id = 0;
    public $dateHour = '';
    public $idPatients = 0;

    public function __construct() {
        parent::__construct();
    }

    public function addAppointments() {
        $query = 'INSERT INTO `appointments` (`dateHour`, `idPatients`) VALUES (:dateHour, :idPatients)';
        $appointmentsResult = $this->db->prepare($query);
        $appointmentsResult->bindValue(':dateHour', $this->dateHour, PDO::PARAM_STR);
        $appointmentsResult->bindValue(':idPatients', $this->idPatients, PDO::PARAM_INT);
        return $appointmentsResult->execute();
    }

    public function getAppointmentsList() {
        $appointmentsResult = array();
        $query = 'SELECT `id`, DATE_FORMAT(`dateHour`, "%d/%m/%Y") AS `date`, DATE_FORMAT(`dateHour`, "%H:%i") AS `hour`, `idPatients` FROM `appointments`';
        $appointmentsResult = $this->db->query($query);
        if (is_object($appointmentsResult)) {
            $appointmentsList = $appointmentsResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $appointmentsList;
    }

    public function getAppointmentById() {
        $query = 'SELECT DATE_FORMAT(`dateHour`, "%Y-%m-%d") AS `date`, DATE_FORMAT(`dateHour`, "%H:%i") AS `hour`, `idPatients` FROM `appointments` WHERE `id` = :id';
        $appointmentResult = $this->db->prepare($query);
        $appointmentResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        $appointmentResult->execute();
        return $appointmentResult->fetch(PDO::FETCH_OBJ);
    }

    public function updateAppointments() {
        $query = 'UPDATE `appointments` SET `dateHour` = :dateHour, `idPatients` = :idPatients WHERE id = :id';
        $appointmentsResult = $this->db->prepare($query);
        $appointmentsResult->bindValue(':dateHour', $this->date, PDO::PARAM_STR);
        $appointmentsResult->bindValue(':idPatients', $this->idPatients, PDO::PARAM_STR);
        $appointmentsResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée, on retourne vrai
        return $appointmentsResult->execute();
    }

    public function listAppointmentsByIdPatient() {
        $listAppointments = array();
        $query = 'SELECT `id`, DATE_FORMAT(`dateHour`, "%d/%m/%Y") AS `date`,DATE_FORMAT(`dateHour`, "%H:%i") AS `hour` FROM `appointments` WHERE `idPatients` = :idPatients;';
        $listAppointmentsById = $this->db->prepare($query);
        $listAppointmentsById->bindValue(':idPatients', $this->idPatients, PDO::PARAM_INT);
        $listAppointmentsById->execute();
        if (is_object($listAppointmentsById)) {
            $listAppointments = $listAppointmentsById->fetchAll(PDO::FETCH_OBJ);
        }
        return $listAppointments;
    }

    public function deleteAppointmentById() {
        $query = 'DELETE FROM `appointments` WHERE `id` = :id';
        $deleteResult = $this->db->prepare($query);
        $deleteResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $deleteResult->execute();
    }

    public function __destruct() {
        
    }

}

?>