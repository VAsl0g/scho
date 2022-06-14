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
$password = md5($_POST['password']); 
$id_grup = $_POST['id_grup'];
$roditinfo = $_POST['roditinfo']; 


mysqli_query($connect, "UPDATE `students` SET `middleName`='$middleName',`firstName`='$firstName',`lastName`='$lastName',`phone`='$phone',
`date_of_birth`='$date_of_birth',`login`='$login',`password`='$password', `id_grup`='$id_grup', `roditinfo`='$roditinfo',`status`='3'  WHERE `students`.`id_stud` ='$id'");
header('Location: /admin/classes/successUpdate.php');