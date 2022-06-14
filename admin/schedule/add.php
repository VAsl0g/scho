<?php
require_once '../../config/connect.php';

$day1 = $_POST['day1'];$day2 = $_POST['day2'];$day3 = $_POST['day3'];$day4 = $_POST['day4'];$day5 = $_POST['day5'];
$time1 = $_POST['time1'];$time2 = $_POST['time2'];$time3 = $_POST['time3'];$time4 = $_POST['time4'];$time5 = $_POST['time5'];
$time6 = $_POST['time6'];$time7 = $_POST['time7'];$time8 = $_POST['time8'];$time9 = $_POST['time9'];$time10 = $_POST['time10'];
$time11 = $_POST['time11'];$time12 = $_POST['time12'];$time13 = $_POST['time13'];$time14 = $_POST['time14'];$time15 = $_POST['time15'];
$time16 = $_POST['time16'];$time17 = $_POST['time17'];$time18 = $_POST['time18'];$time19 = $_POST['time19'];$time20 = $_POST['time20'];
$post1=$_POST['post1'];$post2=$_POST['post2'];$post3=$_POST['post3'];$post4=$_POST['post4'];$post5=$_POST['post5'];$post6=$_POST['post6'];
$post7=$_POST['post7'];$post8=$_POST['post8'];$post9=$_POST['post9'];$post10=$_POST['post10'];$post11=$_POST['post11'];$post12=$_POST['post12'];
$post13=$_POST['post13'];$post14=$_POST['post14'];$post15=$_POST['post15'];$post16=$_POST['post16'];$post17=$_POST['post17'];$post18=$_POST['post18'];
$post19=$_POST['post19'];$post20=$_POST['post20'];
$grup1=$_POST['grup1'];$grup2=$_POST['grup2'];$grup3=$_POST['grup3'];$grup4=$_POST['grup4'];$grup5=$_POST['grup5'];$grup6=$_POST['grup6'];$grup7=$_POST['grup7'];
$grup8=$_POST['grup8'];$grup9=$_POST['grup9'];$grup10=$_POST['grup10'];$grup11=$_POST['grup11'];$grup12=$_POST['grup12'];$grup13=$_POST['grup13'];$grup14=$_POST['grup14'];
$grup15=$_POST['grup15'];$grup16=$_POST['grup16'];$grup17=$_POST['grup17'];$grup18=$_POST['grup18'];$grup19=$_POST['grup19'];$grup20=$_POST['grup20'];

mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 1");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 2");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 3");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 4");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 5");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 6");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 7");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 8");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 9");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 10");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 11");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 12");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 13");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 14");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 15");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 16");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 17");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 18");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 19");
mysqli_query($connect, "DELETE FROM `raspis` WHERE `raspis`.`id_rasp` = 20");


mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (1,'1', '$time1', '$post1', '$grup1')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (2,'2', '$time2', '$post2', '$grup2')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (3,'3', '$time3', '$post3', '$grup3')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (4,'4', '$time4', '$post4', '$grup4')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (5,'5', '$time5', '$post5', '$grup5')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`, `day`,`time`, `id_post`, `id_grup`) VALUES (6,'1', '$time6', '$post6', '$grup6')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (7,'2', '$time7', '$post7', '$grup7')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`, `day`,`time`, `id_post`, `id_grup`) VALUES (8,'3', '$time8', '$post8', '$grup8')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (9,'4', '$time9', '$post9', '$grup9')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (10,'5', '$time10', '$post10', '$grup10')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (11,'1', '$time11', '$post11', '$grup11')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (12,'2', '$time12', '$post12', '$grup12')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (13,'3', '$time13', '$post13', '$grup13')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (14,'4', '$time14', '$post14', '$grup14')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (15,'5', '$time15', '$post15', '$grup15')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (16,'1', '$time16', '$post16', '$grup16')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (17,'2', '$time17', '$post17', '$grup17')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (18,'3', '$time18', '$post18', '$grup18')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (19,'4', '$time19', '$post19', '$grup19')");
mysqli_query($connect, "INSERT INTO `raspis` (`id_rasp`,`day`, `time`, `id_post`, `id_grup`) VALUES (20,'5', '$time20', '$post20', '$grup20')"); 


header('Location: successaddRasp.php');