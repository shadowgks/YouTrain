<?php

use LDAP\Result;

class Train
{
    private $host = 'localhost';
    private $dbname = 'youtraindb';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function getConnection()
    {
        try {
            $conn = new PDO("mysql: host=$this->host; dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected Successfully";
        } catch (PDOException $e) {
            echo "Connection Failed" . $e->getMessage();
        }
        return $conn;
    }
    public function insert($_post)
    {
        $num = $_post['num'];
        $capacite = $_post['capacite'];
        $date_departe = $_post['date_departe'];
        $date_arrivee = $_post['date_arrivee'];
        $id_reservation = $_post['id_reservation'];
        $data = [$num, $capacite, $date_departe, $date_arrivee, $id_reservation];
        $sql = "INSERT INTO train (num,capacite,date_departe,date_arrivee,id_reservation) VALUES (?,?,?,?,?)";
        $stmt = $this->getConnection()->prepare($sql)->execute($data);
    }

    public function displayTrains()
    {
        $sql = "SELECT * FROM train";
        $stmt = $this->getConnection()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }
    public function update($_post)
    {
        $id = $_post['id'];
        $num = $_post['num'];
        $capacite = $_post['capacite'];
        $date_departe = $_post['date_departe'];
        $date_arrivee = $_post['date_arrivee'];
        $id_reservation = $_post['id_reservation'];
        $data = [$num, $capacite, $date_departe, $date_arrivee, $id_reservation, $id];
        $sql = "UPDATE train SET num=?, capacite=?, date_departe=?, date_arrivee=? , id_reservation=? WHERE id=?";
        $stmt = $this->getConnection()->prepare($sql)->execute($data);
    }

    public function delete($_post)
    {
        $id = $_post['id'];
        $sql = "DELETE FROM `train` WHERE id=?";
        $stmt = $this->getConnection()->prepare($sql)->execute([$id]);
    }
}
