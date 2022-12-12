<?php
require_once("databaseClass.php");
$db_obj = new DatabaseConnection();

class Reservation{

    public function getReservations(){
        global $db_obj;
        $pdo = $db_obj->getConnect();
        $statement = $pdo->prepare("SELECT T.*,U.*,R.*,V.*
        FROM reservation R JOIN users U JOIN voyages V JOIN trains T
        WHERE R.id_client = U.id   
        and   R.id_voyage = V.id
        and   R.id_train  = T.id;");
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