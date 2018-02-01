<?php

class patients extends dataBase {

    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '01/01/1900';
    public $phone = '0000000000';
    public $mail = '';

    public function __construct() {
        parent::__construct();
    }

    public function addPatient() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `patients`(`lastName`, `firstName`, `birthDate`, `phone`, `mail`) VALUES(:lastName, :firstName, :birthDate, :phone, :mail)';
        $responseRequest = $this->db->prepare($query);
        $responseRequest->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $responseRequest->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $responseRequest->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $responseRequest->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $responseRequest->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $responseRequest->execute();
    }

    public function getPatientList() {
        $patientList = array();
        $query = 'SELECT `id`, `lastName`, `firstName`, `birthDate`, `phone`, `mail` FROM `patients`';
        $patientResult = $this->db->query($query);
        if (is_object($patientResult)) {
            $patientList = $patientResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $patientList;
    }

    public function getPatientById() {
        $isCorrect = false;
        $query = 'SELECT `id`, `lastName`, `firstName`, `birthDate`, `phone`, `mail` FROM `patients` WHERE `id` = :id';
        $patientResult = $this->db->prepare($query);
        $patientResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        if ($patientResult->execute()) {
            $patientInfo = $patientResult->fetch(PDO::FETCH_OBJ);
            if (is_object($patientInfo)) {
                $this->lastName = $patientInfo->lastName;
                $this->firstName = $patientInfo->firstName;
                $this->birthDate = $patientInfo->birthDate;
                $this->phone = $patientInfo->phone;
                $this->mail = $patientInfo->mail;
                $isCorrect = true;
            }
        }
        return $isCorrect;
    }

    public function updatePatient() {
        $query = 'UPDATE `patients` SET `lastName` = :lastName, `firstName` = :firstName, `birthDate` = :birthDate,  `phone` = :phone, `mail` = :mail WHERE `id` = :id';
        $updatePatient = $this->db->prepare($query);
        $updatePatient->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $updatePatient->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $updatePatient->bindValue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $updatePatient->bindValue(':phone', $this->phone, PDO::PARAM_STR);
        $updatePatient->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $updatePatient->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $updatePatient->execute();
    }

    public function __destruct() {
        
    }

}

?>