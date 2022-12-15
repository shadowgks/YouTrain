<?php
require_once("databaseClass.php");
$db_obj = new DatabaseConnection();
class Stations{
    public $data = array();
    static public function insertStation($post){
        global $db_obj;
        $data["nom"] = $post["nom"];
        $data["id_ville"] = $post["id_ville"];
        // $data = [
        //     "nom" => $post["nom"],
        //     "id-ville" => $post["id_ville"]
        // ];
        $sql = "INSERT INTO gares (`nom`, `id_ville`) VALUES (:nom, :id_ville)";
        $pdo = $db_obj->getConnect(); 
        $statement= $pdo->prepare($sql);
        $statement->execute($data);
    }

    static public function readStations(){
        global $db_obj;
        $sql = "SELECT * FROM `gares`";
        $pdo = $db_obj->getConnect();
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $stm = $statement->fetchAll();
        return $stm;
    }

    static public function updateStation($post){
        global $db_obj;
        $data["id"]= $post["id"];
        $data["nom"] = $post["nom"];
        $data["id_ville"] = $post["id_ville"];
        $sql = "UPDATE gares SET nom = :nom, id_ville = :id_ville  WHERE id=:id";
        $pdo = $db_obj->getConnect(); 
        $pdo->prepare($sql)->execute($data);

    }

    static public function deleteStation($post){
        global $db_obj;
        $data["id"]= $post["id"];
        $sql = "DELETE FROM gares WHERE id=?";
        $pdo = $db_obj->getConnect(); 
        $stmt= $pdo->prepare($sql);
        $stmt->execute(array($data["id"]));
    }

    static public function availableStations(){
        global $db_obj;
        $sql = "SELECT count(*) FROM gares";
        $res = $db_obj->getConnect()->query($sql,PDO::FETCH_NUM);
        return $res->fetch()[0];
    }
}
// $test = [
//     "id"=>4
// ];
// Stations::deleteStation($test);
?>