<?php
require_once("databaseClass.php");
$db_obj = new DatabaseConnection();

class Reservation
{

    public function getReservations()
    {
        global $db_obj;
        $pdo = $db_obj->getConnect();
        $statement = $pdo->prepare("SELECT * FROM `reservation` ");
        $statement->execute();
        $user_res = $statement->fetch();
        if (is_array($user_res)) {
            return $user_res;
        }
        return false;
    }
    public function insertReservetion($_post, $_session)
    {
        global $db_obj;
        $id_client = $_session['user_id'];
        $id_voyage = $_post['book-now'];
        $time = time();
        $current_date = date('Y-m-d h:m:s', $time);
        $data = [$id_client, $id_voyage, $current_date];
        $pdo = $db_obj->getConnect();
        $statement = $pdo->prepare("INSERT INTO reservation (id_client,id_voyage,date_reservation) VALUES (?,?,?)")->execute($data);
    }
    public function deleteReservation($id)
    {
        global $db_obj;
        $pdo = $db_obj->getConnect();
        $statement = $pdo->prepare("DELETE FROM `reservation` WHERE id = ?");
        $statement->execute(array($id));
    }
}

$deleteData = new Reservation();
$deleteData->deleteReservation(2);
