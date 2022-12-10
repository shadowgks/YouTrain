<?php
// begin crud fouad
// include('classes/trainClass.php');
session_start();

// $train_object = new Train();
// if (isset($_POST['save']))   $train_object->insert($_POST);
// if (isset($_POST['update']))   $train_object->update($_POST);
// if (isset($_POST['delete']))  $train_object->delete($_POST);
// //end crud fouad

// // ====================================================
// // Begin saad
// include 'classes/voyagesClass.php';
// $data_voyages = new Voyages();
// // End saad


// // ====================================================
// // Begin amine
// include 'classes/stationsClass.php';
// $data_stations = Stations::readStations();
// // End amine


// Begin Amina
include(__DIR__."/../classes/userClass.php");
if (isset($_POST["signup"])) signup();
if (isset($_POST["signin"])) signin();
if (isset($_POST["profile_edit"])) updateUser($_SESSION["user_id"]);
if(isset($_POST["profile_delete"]))  delete_user($_SESSION["user_id"]);


function signup()
{
    $user1 = new Users($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"], $_POST["password_confirm"]);
    if ($user1->signup()) {
        echo "good";
    } else {
        echo "bad";
    }
}

function signin()
{
    $row = Users::login($_POST["email"], $_POST["password"]);
    if(!empty($row)) {
       $_SESSION["user_id"] = $row["id"];
       $_SESSION["user_last"] = $row["nom"];
       $_SESSION["user_first"] = $row["prenom"];
       header("location:../dashboard.php");
       
    } else {
        echo "bad";
    }
}
//pour utiliser cette fontion vous devez declarer dans la variable option (all_user or this_user) si this_user ajouter user_id
function viewUser($option,$user_id)
{
    $rows = Users::viewUser($option, $user_id);
    if ($rows) {
        return $rows;
    } else {
        return "no user found";
    }
}
// viewUser("this_user",2);
function updateUser($user_id)
{
    $firstname      = $_POST["edit_first"];
    $lastname       = $_POST["edit_last"];
    $email          = $_POST["edit_email"];
    $password       = $_POST["edit_pass"];
    $password_confirm = $_POST["edit_confirm_pass"];
    if($password!=$password_confirm){
        echo "password don't match";
    }
    $user1 = new Users($firstname, $lastname, $email, $password, $password_confirm);
    if ($user1->updateUser($user_id)) {
        echo "good";
    } else {
        echo "bad";
    }
}
function delete_user($user_id){
    if(Users::delete_user($user_id)){
        session_destroy();
        session_unset();
        header("location:login.php");
    }
    else{
         echo "bad";
    }
}
// End Amina