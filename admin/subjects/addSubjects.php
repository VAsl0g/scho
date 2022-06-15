<?php
    require_once '../../config/connect.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Добавить предмет</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
    </head>
    <body>
        <div class="menu">
            <a href="../teachers/doActionWithTeachers.php">Учителя</a>
			<a href="../classes/doActionWithClasses.php">Ученики</a>
            <a href="../group/doActionWithGr.php">Группы</a>
			<a href="doActionWithSubjects.php"  style = "background: #5F9EA0">Дисциплины</a>
			<a href="../schedule/var.php">Расписание</a>
			<a href="/logout.php">Выйти</a>
            <div class="triangle"></div>
        </div> </br></br>
        <main class="main">
            <form name="addTeacher" method="post">
                <h3>Название предмета</h3>
                <input class="standartInput" type="name_post" name="name_post"> <br /><br />
                <input type="submit" name="addSubject" value="Добавить">
                    <?php
                        $name_post = $_POST['name_post'];
                        if($_POST['name_post'] !=''):
                        mysqli_query($connect, "INSERT INTO `post`(`name_post`) VALUES ('$name_post')");
                        endif;
                        if (isset($_POST["addSubject"])) {
                            header('Location: successAddSubject.php');
                        }
                    ?>
            </form> 
            <br/>       
            <div class="doChoice" id="addSubject">
                <a href="doActionWithSubjects.php">Вернуться назад</a> <br />
            </div>
        </main>
    </body>
</html>

<!-- action="successAddSubject.php" -->