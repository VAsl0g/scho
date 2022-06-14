<?php
require_once '../../config/connect.php';

//print_r($_POST);

$middleName = $_POST['middleName'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$telephon = $_POST['telephon'];
$exp = $_POST['exp'];
$date = $_POST['date'];
$id_post=$_POST['id_post'];
$login = $_POST['login'];
$password = md5($_POST['password']); 


mysqli_query($connect, "INSERT INTO `person` (`middleName`, `firstName`, `lastName`, `phone`, `experience`, `date_of_birth`, `id_post`, `login`, `password`, `status` ) 
VALUES ('$middleName', '$firstName','$lastName', '$telephon', '$exp','$date', '$id_post','$login', '$password', '2')");


header('Location: ../../admin/teachers/successaddTeacher.php');