<?php
require_once("databaseClass.php");
$db_obj = new DatabaseConnection();

class Reservation
{

    public function getReservations()
    {
        global $db_obj;
        $pdo = $db_obj->getConnect();
        $sql = "SELECT U.*,R.*,V.*,G1.nom as Gare_depart,G2.nom as Gare_darrivee 
        FROM reservation R JOIN users U JOIN voyages V JOIN gares G1 JOIN gares G2 
        WHERE R.id_client = U.id and R.id_voyage = V.id and V.gare_depart=G1.id and V.gare_darrivee=G2.id ;
        ";
        $statement = $db_obj->getConnect()->query($sql);
        return $statement;
    }
    public function insertReservetion($_post, $_session)
    {
        global $db_obj;
        $id_client = $_session['user_id'];
        $id_voyage = $_post['book-now'];
        $time = time();
        $current_date = date('Y-m-d h:i:s', $time);
        $data = [$current_date, $id_client, $id_voyage];
        $pdo = $db_obj->getConnect();
        $statement = $pdo->prepare("INSERT INTO reservation (date_reservation,id_client,id_voyage) VALUES (?,?,?)")->execute($data);
    }
    public function deleteReservation($id)
    {
        global $db_obj;
        $pdo = $db_obj->getConnect();
        $statement = $pdo->prepare("DELETE FROM `reservation` WHERE id = ?");
        $statement->execute(array($id));
    }

    static public function splitDateTime($date)
    {
        $hour = new DateTime($date);
        return $hour->format('H:i');
    }

    static public function splitDate($date)
    {
        $day = new DateTime($date);
        return $day->format('M/d');
    }
}

$deleteData = new Reservation();
$deleteData->deleteReservation(2);
