<?php
class DatabaseConnection
{
    private $host = "localhost";
    private $username = "root";
    private $pw = "";
    private $databaseName = "youtrain";


    public function connect(){
        $datasn = "mysql:host=$this->host;dbname=$this->databaseName;";
        try {
            $pdo = new PDO($datasn, $this->username, $this->pw);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Connection failed.";
        }
        return $pdo;
    }

    public function write($query, $data = array())
    {
        $connection = $this->connect();
        $stmt = $connection->prepare($query);
        $result = $stmt->execute($data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function read($query, $data = array())
    {
        $connection = $this->connect();
        $stmt = $connection->prepare($query);
        $result = $stmt->execute($data);
        if ($result) {
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (is_array($data) && count($data) > 0) {
                return $data;
            }
        }
        return false;
    }
}
