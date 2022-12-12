<?php
class DatabaseConnection{
    private $host = "localhost";
    private $username = "root";
    private $pw = "";
    private $databaseName = "youtraindb";

    private function connect(){
        $datasn = "mysql:host=$this->host;dbname=$this->databaseName;";
        try{
            $pdo = new PDO($datasn, $this->username, $this->pw);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            return "Connection failed.";
        }
        return $pdo;
    }
    public function getConnect(){
        return $this->connect();
    }
}
?>
