<?php
  require_once '../../config/connect.php';
  $post = mysqli_query($connect, "SELECT * FROM `grup`");							
  $post = mysqli_fetch_all($post);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Редактировать класс</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body style = "background: #c9dbdc">
	<div class="menu">
	<a href="../teachers/doActionWithTeachers.php">Учителя</a>
		    <a href="../classes/doActionWithClasses.php">Ученики</a>
			<a href="doActionWithGr.php"  style = "background: #5F9EA0">Группы</a>
		    <a href="../subjects/doActionWithSubjects.php">Дисциплины</a>
		    <a href="../schedule/var.php">Расписание</a>
		    <a href="/logout.php">Выйти</a>
		    <div class="triangle"></div>
    </div> </br></br>
	<main class="main">
		<div>
			<h2>Список всех групп</h2>
			<p>Вы можете отредактировать или удалить данные по любому классу</p>
				<table class="allClasses table table-striped table table-bordered border-dark" border='1'>
                    <tr class="table-dark">
                        <th>Группа</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                    </tr>
					<form name="edit" method="post">
						<?php
							foreach($post as $item) {
						?>
						<tr>
							<td><?=$item[1]?></td>
							<td><a href="processUpdate.php?id=<?= $item[0] ?>">Редактировать</a></td>								
							<td><a href="processDelete.php?del=<?= $item[0] ?>">Удалить</a></td>
						</tr>
						<?php
							}
						?>
					</form>
				</table>
			<div class="doChoice" id="backOnEditGr">
				<a href="doActionWithGr.php">Вернуться назад</a> <br />
			</div>
		</div>
	</main>
</body>
</html>