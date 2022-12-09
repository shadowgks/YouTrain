<?php 

require("../classes/UserClass.php");
if(isset($_POST["signup"])) signup();
if(isset($_POST["signin"])) signin();
if(isset($_POST["view_one_user"])) viewUser("this_user",$_POST["user_id"]);
if(isset($_POST["view_all_users"])) viewUser("all",null);
if(isset($_POST["update_user"])) updateUser($_POST["user_id"]);





function signup(){
                $user1 = new Users($_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["password"],$_POST["password_confirm"]);
                if($user1->signup()){
                                echo "good";
                }
                else{
                                 echo "bad";
                }


}

function signin(){

                if(Users::login($_POST["email"],$_POST["password"])){
                                echo "good" ;

                }
                else{
                                echo "bad";

                }
}
//pour utiliser cette fontion vous devez declarer dans la variable option (all_user or this_user) si this_user ajouter user_id
function viewUser($option,$user_id){
                $rows = Users::viewUser($option,$user_id);
                if($rows){
                    foreach($rows as $row){
                                echo  $row["prenom"];
                    }
                                
                              
                }
                else{
                                return "no user found";
                }

}
// viewUser("this_user",2);

function updateUser($user_id){
                
                $firstname      = $_POST["firstname"];
                $lastname       =$_POST["lastname"];
                $email          = $_POST["email"];
                $password       = $_POST["password"];
                $password_confirm = $_POST["password_confirm"];
                $user1 = new Users($firstname,$lastname,$email,$password,$password_confirm);
                if($user1->updateUser($user_id)){
                                echo "good";
                }
                else{
                                echo "bad";
                }
}


?>