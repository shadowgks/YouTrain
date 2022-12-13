<?php
require_once('databaseClass.php');

class Ville extends DatabaseConnection{
    //READ
    function readData()
    {
        try {
            $stm = $this->getConnect()->prepare("SELECT * FROM villes");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}