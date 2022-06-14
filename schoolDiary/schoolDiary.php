<?php
require_once '..\config\connect.php';
$name = $_COOKIE['userq3'];
$students = mysqli_query($connect, "SELECT * from `students` WHERE `login`= '$name'");
$students = mysqli_fetch_assoc($students);
$gr=$students['id_grup'] ;
/* $raspis=mysqli_query($connect,'SELECT * from `raspis`WHERE `id_grup`= 9'); */
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Школьный дневник</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

</head>

<body>
    <header>
        <div class="welcome">
            <p align="right">Здравствуйте, <b><?= $students['middleName'] ?> <?= $students['firstName'] ?></b>
                <a href="/php/exit.php">Выйти</a>
            </p>
        </div>
    </header>
    <main>
        <div class="fotoAndText">
            <div class="foto">
                <img src="\profile.png" height='170' width='170'> <br />
            </div>
            <div class="text">
                <b>Номер группы: <ins><?= $students['id_grup'] ?> </ins><br />
                    <b>ФИО:<ins><?= $students['middleName'] ?> <?= $students['firstName'] ?> <?= $students['lastName'] ?> </ins></b><br />
                    <b>Дата рождения: <ins><?= $students['date_of_birth'] ?></ins> </b><br />
                    <b>Номер телефона: <ins><?= $students['phone'] ?> </ins></b><br />
                    <b>Сведения о родителях: <ins><?= $students['roditinfo'] ?> </ins></b><br />

            </div>
        </div>
        <hr class="diary">
        <div class="scheduleInDiary">
            <?php  
                 $postt=mysqli_query($connect,"SELECT * from `post` 
                 INNER JOIN `raspis` ON `post`.`id_post` = `raspis`.`id_post` 
                 JOIN  `day` ON `day`.`id_day` = `raspis`.`day` where `id_grup`= '$gr' ORDER BY `day` ASC");
                while ($row = mysqli_fetch_array($postt)) {?> 
                        <p><?= $row['name_day'] ?> - <?= $row['time'] ?> - <?= $row['name_post'] ?> </p>         

                    <?php } ?> 
        </div>

    </main>
</body>

</html>