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
        $nom = $_post['nom'];
        $data = [$num, $capacite, $nom];
        $sql = "INSERT INTO trains (num,capacite,nom) VALUES (?,?,?)";
        $stmt = $obj->getConnect()->prepare($sql)->execute($data);
        $_SESSION['insert-train'] = "The train has been added successfully";
    }
    public function displayTrains()
    {
        global $stmt;
        global $obj;
        $sql = "SELECT * FROM trains";
        $stmt = $obj->getConnect()->query($sql);
    }
    public function update($_post)
    {
        global $obj;
        $id = $_post['id'];
        $num = $_post['num'];
        $capacite = $_post['capacite'];
        $nom = $_post['nom'];
        $data = [$num, $capacite, $nom, $id];
        $sql = "UPDATE trains SET num=?, capacite=?, nom=? WHERE id=?";
        $stmt = $obj->getConnect()->prepare($sql)->execute($data);
        $_SESSION['update-train'] = "The train has been updated successfully";
    }

    public function delete($_post)
    {
        global $obj;
        $id = $_post['id'];
        $sql = "DELETE FROM `trains` WHERE id=?";
        $stmt = $obj->getConnect()->prepare($sql)->execute([$id]);
        $_SESSION['delete-train'] = "The train has been deleted successfully";
    }
}
