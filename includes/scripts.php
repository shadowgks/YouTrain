<?php
// begin fouad
include(__DIR__ . '/../classes/trainClass.php');
session_start();


// if (isset($_POST['save']))   $train_object->insert($_POST);
// if (isset($_POST['update']))   $train_object->update($_POST);
// if (isset($_POST['delete']))  $train_object->delete($_POST);

if (isset($_POST['save'])) save();
if (isset($_POST['update'])) update();
if (isset($_POST['delete'])) delete();


include(__DIR__ . '/../classes/reservationClass.php');
$reservation_object = new Reservation;
if (isset($_POST['book-now'])) {
    $reservation_object->insertReservetion($_POST, $_SESSION);
    // echo "<script>window.location.replace('../voyages.php')</script>";
    header("location: ../bookings.php");
}

//end crud fouad
// ====================================================
// Begin saad
require_once __DIR__ . '/../classes/voyagesClass.php';
require_once __DIR__ . '/../classes/villeClass.php';
$data_villes  = new Ville();
$data_voyages = new Voyages();

//Search voyages
if (isset($_POST['search_voyage'])) {
    $data_voyages->setDateDeparte($_POST['date_depart']);
    $data_voyages->setDateDarrivee($_POST['date_darrivee']);
    $data_voyages->setGareDepart($_POST['gare_depart']);
    $data_voyages->setGareDarrivee($_POST['gare_darrivee']);
};
// End saad

// //==========================================================
// Begin amine
include __DIR__ . '/../classes/stationsClass.php';
$data_stations = Stations::readStations();
// End amine


// Begin Amina
include(__DIR__ . "/../classes/userClass.php");
if (isset($_POST["signup"]))                       signup();
if (isset($_POST["signin"]))                       signin();
if (isset($_POST["profile_edit"]))                 updateUser($_SESSION["user_id"]);
if (isset($_POST["profile_delete"]))               delete_user($_SESSION["user_id"]);
if (isset($_GET["logout"]))                        logout();
if (isset($_POST["delete_user"]))                  delete_user($_POST["user_id"]);
if (isset($_POST["change_user_role"]))             change_role($_POST["check_user"], $_POST["id_user"]);


function signup()
{
    if ($_POST["password"] == $_POST["password_confirm"]) {
        $user1 = new Users(
            $_POST["firstname"],
            $_POST["lastname"],
            $_POST["email"],
            $_POST["password"],
            $_POST["password_confirm"],
            $_FILES['edit_image']['name']
        );
        if ($user1->signup()) {
            header('Location:../dashboard.php');
        } else {
            header('Location:../login.php');
        }
    } else {
        header('Location:../login.php');
    }
}

function signin()
{
    $row = Users::login($_POST["email"], $_POST["password"]);
    if (!empty($row)) {
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_last"] = $row["nom"];
        $_SESSION["user_first"] = $row["prenom"];
        $_SESSION["user_image"] = $row["image"];
        $_SESSION["role"] = $row["role"];
        header("location:../dashboard.php");
    } else {
        header('Location:../login.php');
    }
}
//pour utiliser cette fontion vous devez declarer dans la variable option (all_user or this_user) si this_user ajouter user_id
function viewUser($option, $user_id)
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
    $image = $_FILES['edit_image']['name'];

    if ($password != $password_confirm) {
        echo "password don't match";
    } else {
        $user1 = new Users($firstname, $lastname, $email, $password, $password_confirm, $image);
        if ($user1->updateUser($user_id)) {
            $_SESSION["user_last"] = $lastname;
            $_SESSION["user_first"] = $firstname;
        } else {
        }
    }
}
function delete_user($user_id)
{
    if (Users::delete_user($user_id)) {
        session_destroy();
        session_unset();
        header("location:login.php");
    }
}
function logout()
{
    Users::logout();
}
function change_role($input, $user_id)
{
    if (Users::change_role($input, $user_id)) {
    } else {
        echo "didn't change";
    }
}

function save(){
    if($_POST["functionToUse"] == 'train'){
        $train_object = new Train();
        $train_object->insert($_POST);
    }else if($_POST["functionToUse"] == 'station'){
        Stations::insertStation($_POST);
    }else if(isset($_POST["functionToUse"]) == 'trip'){
        require_once __DIR__ . '/../classes/voyagesClass.php';
        $save_voyages = new Voyages();
        $save_voyages->setDateDeparte($_POST["departureDate"]);
        $save_voyages->setDateDarrivee($_POST["arrivalDate"]);
        $save_voyages->setGareDepart($_POST["depStation"]);
        $save_voyages->setGareDarrivee($_POST["arrStation"]);
        $save_voyages->setPrice($_POST["price"]);
        // $save_voyages->setTrain($_POST["Train"]);
        $save_voyages->createData();
    }
}

function update(){
    if($_POST["functionToUse"] == 'train'){
        $train_object = new Train();
        $train_object->update($_POST);
    }else if($_POST["functionToUse"] == 'station'){
        Stations::updateStation($_POST);
    }else if(isset($_POST["functionToUse"]) == 'trip'){
        require_once __DIR__ . '/../classes/voyagesClass.php';
        $update_voyages = new Voyages();
        $update_voyages->setID($_POST["id"]);
        $update_voyages->setDateDeparte($_POST["departureDate"]);
        $update_voyages->setDateDarrivee($_POST["arrivalDate"]);
        $update_voyages->setGareDepart($_POST["depStation"]);
        $update_voyages->setGareDarrivee($_POST["arrStation"]);
        $update_voyages->setPrice($_POST["price"]);
        // $update_voyages->setTrain($_POST["Train"]);
        $update_voyages->updateData();
        
    }
}

function delete(){
    if($_POST["functionToUse"] == 'train'){
        $train_object = new Train();
        $train_object->delete($_POST);
    }else if($_POST["functionToUse"] == 'station'){
        Stations::deleteStation($_POST);
    }else if($_POST["functionToUse"] == 'trip'){
        require_once __DIR__ . '/../classes/voyagesClass.php';
        $delete_voyages = new Voyages();
        $delete_voyages->setID($_POST["id"]);
        $delete_voyages->deleteData();
    }
}