<?php
require_once '../../config/connect.php';

$id = $_GET['del'];

mysqli_query($connect, "DELETE FROM `person` WHERE `person`.`id` = '$id'");

header('Location: editTeachers.php');