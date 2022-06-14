<?php
  require_once '../../config/connect.php';

print_r($_POST);

$middleName = $_POST['middleName'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$telephon = $_POST['telephon'];
$date = $_POST['date'];
$login = $_POST['login'];
$password = md5($_POST['password']); 
$parents = $_POST['parents']; 
$id_grup=$_POST['id_grup'];


mysqli_query($connect, "INSERT INTO `students`( `middleName`, `firstName`, `lastName`, `phone`, `date_of_birth`, `login`, `password`, `id_grup`, `roditinfo`, `status`) 
VALUES ('$middleName', '$firstName','$lastName', '$telephon', '$date', '$login', '$password','$id_grup', '$parents', '3')");

header('Location: /admin/classes/successAction.php');