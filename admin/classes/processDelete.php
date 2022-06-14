<?php
require_once '../../config/connect.php';

$id = $_GET['del'];

mysqli_query($connect, "DELETE FROM `students` WHERE `students`.`id_stud` = '$id'");

header('Location: editPupils.php');