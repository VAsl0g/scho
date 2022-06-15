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
$roditinfo = $_POST['roditinfo'];

if($_POST['password'] == ''):
    $password = mysqli_query($connect, "SELECT `password` FROM `students` WHERE `students`.`id_stud` = '$id'");
    $password = mysqli_fetch_assoc($password);
    $password = $password['password'];
    mysqli_query($connect, "UPDATE `students` SET `middleName` = '$middleName', `firstName` = '$firstName', `lastName` = '$lastName', 
    `phone` = '$telephon',`date_of_birth` = '$date', `login`='$login', `roditinfo` = '$roditinfo'  WHERE `students`.`id_stud` = '$id'");
endif;
if($_POST['password'] != ''):
    $password = md5($_POST['password']); 
    mysqli_query($connect, "UPDATE `students` SET `middleName` = '$middleName', `firstName` = '$firstName', `lastName` = '$lastName', 
    `phone` = '$telephon',`date_of_birth` = '$date', `login`='$login', `password` = '$password', `roditinfo` = '$roditinfo'  WHERE `students`.`id_stud` = '$id'");
endif;




header('Location: /schoolDiary/schoolDiary.php'); 