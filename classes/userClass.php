<?php
require("../databaseClass.php");
class Users extends DatabaseConnection
{
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $password_confirm;
    public function __construct($firstname,$lastname,$email,$password,$password_confirm){
        $this->firstname        =$firstname;
        $this->lastname         = $lastname;
        $this->email            =$email;
        $this->password         =$password;
        $this->password_confirm =$password_confirm;
    }
        public function __set($var,$val){
            $this->$var = $val;
        }
        public function __get($var){
            return $this->$var;
        }
    
    public function signup()
    {   $db =new DatabaseConnection;
        $pdo = $db->connect();
        $sql ="INSERT INTO `users`(`nom`, `prenom`, `email`, `password`) VALUES (:nom,:prenom,:email,:password)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":nom",$this->lastname);
        $stmt->bindParam(":prenom",$this->firstname);
        $stmt->bindParam(":email",$this->email);
        $stmt->bindParam(":password",$this->password);
        if( $stmt->execute()){
            return true;
        }
        else{
            return false;
        }
       
        
    }
    public static function login($email,$password){
        $db =new DatabaseConnection;
        $pdo = $db->connect();
        $sql ="SELECT * FROM users WHERE email=:email and password=:password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
        $row= $stmt->fetch();
        if(!empty($row)){
            return true;
        }
        else{
            return false;
        }

    }

















  
    public function logout()
    {
        if (isset($_SESSION['name'])) {
            session_unset();
            session_destroy();
        }
        header('Location:login.php');
        die;
    }
}
