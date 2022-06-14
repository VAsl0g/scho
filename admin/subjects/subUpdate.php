<?php
require_once '../../config/connect.php';
$id_post = $_POST['id_post'];
$name_post = $_POST['name_post'];


mysqli_query($connect, "UPDATE `post` SET `name_post`='$name_post'  WHERE `post`.`id_post` ='$id_post'");
header('Location: /admin/subjects/successUpdate.php');