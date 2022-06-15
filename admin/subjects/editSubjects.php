<?php
  require_once '../../config/connect.php';
  $post = mysqli_query($connect, "SELECT * FROM `post`");							
  $post = mysqli_fetch_all($post);
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Редактировать или удалить предмет</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body style = "background: #c9dbdc">
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
		<div>
			<h2>Список всех дисциплин</h2>
			<p>Вы можете отредактировать или удалить данные по любой дисциплине</p>
			<table class="allClasses table table-striped table table-bordered border-dark" border='1'>
				<tr class="table-dark">
					<th>Предмет</th>
					<th>Редактировать</th>
					<th>Удалить</th>
				</tr>
				<form name="edit" method="post">
					<?php
						$sliced = array_slice($post, 1);
						foreach($sliced as $item) {
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
		</div>
		<div class="doChoice" id="editSubject">
			<a href="/admin/subjects/doActionWithSubjects.php">Вернуться назад</a> <br />
		</div>
	</main>
</body>
</html>