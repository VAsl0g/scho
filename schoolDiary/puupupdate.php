<?php
require_once '../config/connect.php';
//print_r($_GET);
$id = $_POST['id'];
$middleName = $_POST['middleName'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$telephon = $_POST['telephon'];
$date = $_POST['date'];
$login = $_POST['login'];
$password = md5($_POST['password']); 
$id_grup = $_POST['id_grup'];
$roditinfo = $_POST['roditinfo'];

mysqli_query($connect, "UPDATE `students` SET `middleName` = '$middleName', `firstName` = '$firstName', `lastName` = '$lastName', 
 `phone` = '$telephon',`date_of_birth` = '$date', `login`='$login', `password` = '$password', `id_grup`='$id_grup', `roditinfo` = '$roditinfo'  WHERE `students`.`id_stud` = '$id'");


header('Location: /schoolDiary/schoolDiary.php'); 