<?php
require_once '../../config/connect.php';
//print_r($_GET);
$id = $_POST['id'];
$middleName = $_POST['middleName'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$telephon = $_POST['telephon'];
$exp = $_POST['exp'];
$date = $_POST['date'];
$id_post=$_POST['id_post'];
$login = $_POST['login'];

if($_POST['password'] == ''):
    $password = mysqli_query($connect, "SELECT `password` FROM `person` WHERE `person`.`id` = '$id'");
    $password = mysqli_fetch_assoc($password);
    $password = $password['password'];
    mysqli_query($connect, "UPDATE `person` SET `middleName` = '$middleName', `firstName` = '$firstName', `lastName` = '$lastName', 
 `phone` = '$telephon',`experience` = '$exp',`date_of_birth` = '$date', `login`='$login',`password`='$password' WHERE `person`.`id` = '$id'");
endif;
if($_POST['password'] != ''):
    $password = md5($_POST['password']); 
    mysqli_query($connect, "UPDATE `person` SET `middleName` = '$middleName', `firstName` = '$firstName', `lastName` = '$lastName', 
    `phone` = '$telephon',`experience` = '$exp',`date_of_birth` = '$date', `login`='$login', `password` = '$password' WHERE `person`.`id` = '$id'");
endif;

header('Location: /admin/teachers/successUpdate.php'); 