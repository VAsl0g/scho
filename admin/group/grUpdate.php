<?php
require_once '../../config/connect.php';
//print_r($_POST);
$id_grup = $_POST['id_grup'];
$name_group = $_POST['name_group'];



mysqli_query($connect, "UPDATE `grup` SET `name_group`='$name_group'  WHERE `grup`.`id_grup` ='$id_grup'");
header('Location: /admin/group/successUpdate.php');