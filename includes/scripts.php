<?php 

require("../classes/UserClass.php");
if(isset($_POST["signup"])) signup();
if(isset($_POST["signin"])) signin();




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


?>