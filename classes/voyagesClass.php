<?php
require_once('databaseClass.php');
class Voyages extends DatabaseConnection
{
    private $id;
    private $date_depart;
    private $date_darrivee;
    private $gare_depart;
    private $gare_darrivee;
    private $price;

    //set and get id
    function setID($id)
    {
        $this->id = $id;
    }
    function getID()
    {
        return $this->id;
    }

    //set and get DateDepart
    function setDateDepart($date_depart)
    {
        $this->date_depart = $date_depart;
    }
    function getDateDepart()
    {
        return $this->date_depart;
    }

    //set and get DateDarrivee
    function setDateDarrivee($date_darrivee)
    {
        $this->date_darrivee = $date_darrivee;
    }
    function GetDateDarrivee()
    {
        return $this->date_darrivee;
    }


    //set and get GareDepart
    function setGareDepart($gare_depart)
    {
        $this->gare_depart = $gare_depart;
    }
    function getGareDepart()
    {
        return $this->gare_depart;
    }

    //set and get GareDarrivee
    function setGareDarrivee($gare_darrivee)
    {
        $this->gare_darrivee = $gare_darrivee;
    }
    function getGareDarrivee()
    {
        return $this->gare_darrivee;
    }

    //set and get price
    function setPrice($price)
    {
        $this->price = $price;
    }
    function getPrice()
    {
        return $this->price;
    }

    //Create
    function createData()
    {
        try {
            $stm = $this->getConnect()->prepare("INSERT INTO `voyages`(`date_depart`, `date_darrivee`, `gare_depart`, `gare_darrivee`, `price`) VALUES (?,?,?)");
            $stm->execute([$this->date_depart, $this->date_darrivee, $this->gare_depart, $this->gare_darrivee, $this->price]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //READ
    function readData()
    {
        try {
            $stm = $this->getConnect()->prepare("SELECT * FROM voyages");
            $stm->execute();
            while ($result = $stm->fetchAll()) {
                return $result;
                var_dump($result);
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //Update All Data
    function updateData()
    {
        try {
            $stm = $this->getConnect()->prepare("UPDATE voyages SET date_depart=?, date_darrivee=?, `gare_depar=?t`, `gare_darrivee=?`, price=? WHERE id = ? ;");
            $stm->execute([$this->date_depart, $this->date_darrivee, $this->gare_depart, $this->gare_darrivee, $this->price, $this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //Delete All Data
    function deleteData()
    {
        try {
            $stm = $this->getConnect()->prepare("DELETE FROM voyages WHERE id = ?");
            $stm->execute([$this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
