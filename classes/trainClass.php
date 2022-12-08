<?php
include('databaseClass.php');
$obj = new DatabaseConnection();

class Train
{
    public function insert($_post)
    {
        global $obj;
        $num = $_post['num'];
        $capacite = $_post['capacite'];
        $date_departe = $_post['date_departe'];
        $date_arrivee = $_post['date_arrivee'];
        $id_reservation = $_post['id_reservation'];
        $data = [$num, $capacite, $date_departe, $date_arrivee, $id_reservation];
        $sql = "INSERT INTO train (num,capacite,date_departe,date_arrivee,id_reservation) VALUES (?,?,?,?,?)";
        $stmt = $obj->getConnect()->prepare($sql)->execute($data);
    }

    public function displayTrains()
    {
        global $obj;
        $sql = "SELECT * FROM train";
        $stmt = $obj->getConnect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }
    public function update($_post)
    {
        global $obj;
        $id = $_post['id'];
        $num = $_post['num'];
        $capacite = $_post['capacite'];
        $date_departe = $_post['date_departe'];
        $date_arrivee = $_post['date_arrivee'];
        $id_reservation = $_post['id_reservation'];
        $data = [$num, $capacite, $date_departe, $date_arrivee, $id_reservation, $id];
        $sql = "UPDATE train SET num=?, capacite=?, date_departe=?, date_arrivee=? , id_reservation=? WHERE id=?";
        $stmt = $obj->getConnect()->prepare($sql)->execute($data);
    }

    public function delete($_post)
    {
        global $obj;
        $id = $_post['id'];
        $sql = "DELETE FROM `train` WHERE id=?";
        $stmt = $obj->getConnect()->prepare($sql)->execute([$id]);
    }
}
