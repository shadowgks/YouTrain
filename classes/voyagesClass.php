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
    private $id_train;

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
    function setDateDeparte($date_depart)
    {
        $this->date_depart = $date_depart;
    }
    function GetDateDeparte()
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
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //Update All Data
    function updateData()
    {
        try {
            $stm = $this->getConnect()->prepare("UPDATE voyages SET date_depart=?, date_darrivee=?, `gare_depart=?`, `gare_darrivee=?`, price=? WHERE id = ? ;");
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

    //Search Data
    function searchData()
    {
        try {
            $stm = $this->getConnect()->prepare("SELECT v.id,v.date_depart,v.date_darrivee,v.price,v.id_train,trains.capacite,
            g1.nom AS 'gare_depart',g2.nom AS 'gare_darrivee'
            From voyages v
            join gares g1 on g1.id=v.gare_depart 
            join gares g2 on g2.id=v.gare_darrivee
            join trains on v.id_train
            where v.date_depart >= ?
            or    v.date_darrivee <= ?
            and   v.gare_depart = ? and v.gare_darrivee = ?;");
            $stm->execute([$this->date_depart, $this->date_darrivee, $this->gare_depart, $this->gare_darrivee]);
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    static public function splitDateTime($time)
    {
        $hour = new DateTime($time);
        return $hour->format('H:i');
    }

    static public function splitDate($date)
    {
        $day = new DateTime($date);
        return $day->format('d M');
    }
}
