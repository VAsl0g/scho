<?php
require_once '../../config/connect.php';

$id = $_GET['del'];

mysqli_query($connect, "DELETE FROM `post` WHERE `post`.`id_post` = '$id'");

header('Location: editSubjects.php');