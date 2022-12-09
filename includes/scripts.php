<?php
// begin crud fouad
include('classes/trainClass.php');
session_start();

$train_object = new Train();
if (isset($_POST['save']))   $train_object->insert($_POST);
if (isset($_POST['update']))   $train_object->update($_POST);
if (isset($_POST['delete']))  $train_object->delete($_POST);
//end crud fouad