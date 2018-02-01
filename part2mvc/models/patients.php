<?php

class patients extends dataBase {

    public $id = 0;
    public $lastname = '';
    public $firstname = '';
    public $birthdate = '01/01/1900';
    public $phone = '';
    public $mail = '';

    public function __construct() {
        parent::__construct();
    }

    public function addPatient() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `patients`(`lastname`, `firstname`, `birthdate`, `phone`, `mail`) VALUES(:lastname, :firstname, :birthdate, :phone, :mail)';
        $responseRequest = $this->db->prepare($query);
        $responseRequest->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $responseRequest->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $responseRequest->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $responseRequest->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $responseRequest->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $responseRequest->execute();
    }

    public function getPatientsList() {
        $patientList = array();
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `patients`';
        $patientsResult = $this->db->query($query);
        if (is_object($patientsResult)) {
            $patientsList = $patientsResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $patientsList;
    }

    public function getPatientById() {
        $isCorrect = false;
        $query = 'SELECT `id`, `lastname`, `firstname`, `birthdate`, `phone`, `mail` FROM `patients` WHERE `id` = :id';
        $patientResult = $this->db->prepare($query);
        $patientResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($patientResult->execute()) {
            $patientInfo = $patientResult->fetch(PDO::FETCH_OBJ);
            if (is_object($patientInfo)) {
                $this->lastname = $patientInfo->lastname;
                $this->firstname = $patientInfo->firstname;
                $this->birthdate = $patientInfo->birthdate;
                $this->phone = $patientInfo->phone;
                $this->mail = $patientInfo->mail;
                $isCorrect = true;
            }
        }
        return $isCorrect;
    }

    public function updatePatient() {
        $query = 'UPDATE patients SET lastname=:lastname, firstname=:firstname, birthdate=:birthdate, phone=:phone, mail=:mail WHERE id = :id';
        $patientResult = $this->db->prepare($query);
        $patientResult->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $patientResult->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $patientResult->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $patientResult->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $patientResult->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $patientResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $patientResult->execute();
    }

    public function __destruct() {
        
    }

}

?>