<?php
  require_once '../../config/connect.php';
  $pupils = mysqli_query($connect, "SELECT * FROM `students`");							
  $pupils = mysqli_fetch_all($pupils);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Редактировать учеников</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body style = "background: #c9dbdc">
        <div class="menu">
        <a href="../teachers/doActionWithTeachers.php">Учителя</a>
		    <a href="doActionWithClasses.php"  style = "background: #5F9EA0">Ученики</a>
			<a href="../group/doActionWithGr.php">Группы</a>
		    <a href="../subjects/doActionWithSubjects.php">Дисциплины</a>
		    <a href="../schedule/var.php">Расписание</a>
		    <a href="/logout.php">Выйти</a>
		    <div class="triangle"></div>
        </div> </br>
        <main>
        <div class="doChoice" id="editPupilsPage">
            <br><br><a href="doActionWithClasses.php">Вернуться назад</a> <br />
		</div>
		<div class="main" id="editpupils">
            <h2>Список всех учеников</h2>
			<p>Вы можете отредактировать или удалить данные по любому ученику</p>
            <table class="allClasses table table-striped table table-bordered border-dark" id="editPupils" border="1">
                    <tr class="table-dark">
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Номер телефона</th>
                        <th>Дата рождния</th>
                        <th>Логин</th>
                        <th>Пароль</th>
                        <th>Группа</th>
                        <th>Сведения о родителях</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                    </tr>
                    <form name="edit" method="post">
					<?php
						foreach($pupils as $item) {
	  				?>
					<tr>
						<td><?=$item[1]?></td>
						<td><?=$item[2]?></td>
						<td><?=$item[3]?></td>
						<td><?=$item[4]?></td>
						<td><?=$item[5]?></td>
						<td><?=$item[6]?></td>
						<td><?=$item[7]?></td>
                        <td><?=$item[8]?></td>
                        <td><?=$item[9]?></td>
						<td><a href="processUpdate.php?id=<?= $item[0] ?>">Редактировать</a></td>								
						<td><a href="processDelete.php?del=<?= $item[0] ?>">Удалить</a></td>
					</tr>
					<?php
						}
					?>
            </table>
        </div>
	</main>
    </body>
</html>