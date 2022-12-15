<?php
require_once('databaseClass.php');
class Users
{
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $password_confirm;
    private $image;

    public function __construct($firstname, $lastname, $email, $password, $password_confirm, $image)
    {
        $this->firstname        = $firstname;
        $this->lastname         = $lastname;
        $this->email            = $email;
        $this->password         = $password;
        $this->password_confirm = $password_confirm;
        $this->image = $image;
    }
    public function __set($var, $val)
    {
        $this->$var = $val;
    }
    public function __get($var)
    {
        return $this->$var;
    }

    public function signup()

    {
        $db = new DatabaseConnection;
        $pdo = $db->getConnect();
        $sql = "SELECT `email` FROM `users` WHERE email=:email";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
        $row = $stmt->fetch();

        if (!empty($row)) {
            return false;
        }
        //
        $sql = "INSERT INTO `users`(`nom`, `prenom`, `email`, `password`,`role`,`image`) VALUES (:nom,:prenom,:email,:password,0,'image.png')";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":nom", $this->lastname);
        $stmt->bindParam(":prenom", $this->firstname);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public static function login($email, $password)
    {
        $db = new DatabaseConnection;
        $pdo = $db->getConnect();
        $sql = "SELECT * FROM users WHERE email=:email and password=:password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password",$password);
        $stmt->execute();

        $row = $stmt->fetch();
        $_SESSION['my-id'] = $row['id'];
        if (!empty($row)) {
            return $row;
        } else {
            return false;
        }
    }

    public function get_user($varrr)
    {
        $varrr = $_SESSION['my-id'];
        $db = new DatabaseConnection;
        $pdo = $db->getConnect();
        $query = "SELECT * from users WHERE id=:id";
        $arr['id'] = $varrr;
        $stmt = $pdo->prepare($query);
        $stmt->execute($arr);
        $row = $stmt->fetch();
        var_dump($row);
        die;
    }

    public static function viewUser($option, $user_id)
    {
        $db = new DatabaseConnection;
        $pdo = $db->getConnect();

        if ($option == "this_user") {
            $sql = "SELECT * FROM users where id=:user_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":user_id", $user_id);
        } else {
            $sql = "SELECT * FROM users";
            $stmt = $pdo->prepare($sql);
        }
        $stmt->execute();
        $rows = $stmt->fetchAll();
        if (!empty($rows)) {
            return $rows;
        } else {
            return false;
        }
    }
    public  function updateUser($user_id)
    {

        $db = new DatabaseConnection;
        $pdo = $db->getConnect();
        if (!empty($_FILES['edit_image']['name'])) {
            $folder = "uploads/";
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }
            $path = $folder . time() . $_FILES['edit_image']['name'];

            move_uploaded_file($_FILES['edit_image']['tmp_name'], $path);

            $this->image = $path;
        }
        $sql = "UPDATE users SET `nom`=:nom,`prenom`=:prenom,`email`=:email,`password`=:password ,`image`=:image WHERE id=:user_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":user_id",      $user_id);
        $stmt->bindParam(":nom",          $this->lastname);
        $stmt->bindParam(":prenom",       $this->firstname);
        $stmt->bindParam(":email",        $this->email);
        $stmt->bindParam(":password",     $this->password);
        $stmt->bindParam(":image",        $this->image);

        if ($stmt->execute()) {
           
            return true;
        } else {
            return false;
        }
    }
    public static function delete_user($user_id)
    {
        $db = new DatabaseConnection;
        $pdo = $db->getConnect();

        $sql = "DELETE FROM `users` WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id",      $user_id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public static function change_role($input, $user_id)
    {
        $db = new DatabaseConnection;
        $pdo = $db->getConnect();
        if ($input == 0) {
            $input = 1;
        } else {
            $input = 0;
        }
        $sql = "UPDATE users SET role=:role WHERE id=:user_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":user_id",      $user_id);
        $stmt->bindParam(":role",    $input);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public static function logout()
    {
        if (isset($_SESSION["user_id"])) {
            session_unset();
            session_destroy();
        }
        header('Location:login.php');
    }
}
