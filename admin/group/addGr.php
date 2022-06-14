<?php
    require_once '../../config/connect.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Добавить класс</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
    </head>
    <body>
        <div class="menu">
		<a href="../teachers/doActionWithTeachers.php">Учителя</a>
		    <a href="../classes/doActionWithClasses.php">Ученики</a>
			<a href="doActionWithGr.php">Группы</a>
		    <a href="../subjects/doActionWithSubjects.php">Дисциплины</a>
		    <a href="../schedule/var.php">Расписание</a>
		    <a href="/logout.php">Выйти</a>
		    <div class="triangle"></div>
        </div> </br></br>
        
        <main class="main">
            <form name="addTeacher" method="post"> <!-- action="successActionC.php"  -->
                <p>Номер группы</p>
                <input class="standartInput" type="number" name="name_group"> <br /><br />
                <input type="submit" name="addGr" value="Добавить">
                <?php
                        $name_group = $_POST['name_group'];
                         if($_POST['name_group'] !=''):
                        mysqli_query($connect, "INSERT INTO `grup`(`name_group`) VALUES ('$name_group')");
                        endif;
                        if (isset($_POST["addGr"])) {
                            header('Location: successActionC.php');
                        } 
                    ?>


            </form> <br/><br/>
            
            <div class="doChoice" id="addGr">
                <a href="doActionWithGr.php">Вернуться назад</a> <br />
            </div>
        </main>
    </body>
</html>