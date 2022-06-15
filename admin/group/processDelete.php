<?php
require_once '../../config/connect.php';

$id = $_GET['del'];

mysqli_query($connect, "DELETE FROM `grup` WHERE `grup`.`id_grup` = '$id'");

header('Location: editGr.php');