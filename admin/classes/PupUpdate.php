<?php
require_once '../../config/connect.php';
//print_r($_POST);
$id = $_POST['id'];
$middleName = $_POST['middleName'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$date_of_birth = $_POST['date_of_birth'];
$login = $_POST['login'];

$id_grup = $_POST['id_grup'];
$roditinfo = $_POST['roditinfo']; 

if($_POST['password'] == ''):
    $password = mysqli_query($connect, "SELECT `password` FROM `students` WHERE `students`.`id_stud` = '$id'");
    $password = mysqli_fetch_assoc($password);
    $password = $password['password'];
    mysqli_query($connect, "UPDATE `students` SET `middleName`='$middleName',`firstName`='$firstName',`lastName`='$lastName',`phone`='$phone',
    `date_of_birth`='$date_of_birth',`login`='$login', `id_grup`='$id_grup', `roditinfo`='$roditinfo',`status`='3'  WHERE `students`.`id_stud` ='$id'");
endif;
if($_POST['password'] != ''):
    $password = md5($_POST['password']); 
    mysqli_query($connect, "UPDATE `students` SET `middleName`='$middleName',`firstName`='$firstName',`lastName`='$lastName',`phone`='$phone',
    `date_of_birth`='$date_of_birth',`login`='$login', `password` = '$password', `id_grup`='$id_grup', `roditinfo`='$roditinfo',`status`='3'  WHERE `students`.`id_stud` ='$id'");
endif;


header('Location: /admin/classes/successUpdate.php');