<?php
include("databaseClass.php");
$db_obj = new DatabaseConnection();

class Reservation{

    public function getReservations(){
        global $db_obj;
        $pdo = $db_obj->getConnect();
        $statement = $pdo->prepare("SELECT * FROM `reservation`");
        $statement->execute();
        $user_res = $statement->fetch();
        if(is_array($user_res)){
            return $user_res;
        }
        return false;
    }
    public function insertReservetion(){
        global $db_obj;
        $pdo = $db_obj->getConnect();
        $statement = $pdo->prepare("INSERT INTO reservation()");
    }
    public function deleteReservation($id){
        global $db_obj;
        $pdo = $db_obj->getConnect();
        $statement = $pdo->prepare("DELETE FROM `reservation` WHERE id = ?");
        $statement->execute(array($id));
    }
}

$deleteData = new Reservation();
$deleteData->deleteReservation(2);
?>