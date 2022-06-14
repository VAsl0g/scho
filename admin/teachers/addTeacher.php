<?php
  require_once '../../config/connect.php';
  $post = mysqli_query($connect, "SELECT `id_post`, `name_post` FROM `post`");							
  $post = mysqli_fetch_all($post);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Добавить учителя</title>
		<link rel="stylesheet" type="text/css" href="\css\style.css" />
	</head>
	<body>
		<div class="menu">
			<a href="doActionWithTeachers.php" style = "background: #5F9EA0">Учителя</a>
			<a href="..\classes/doActionWithClasses.php">Ученики</a>
			<a href="..\group/doActionWithGr.php">Группы</a>
			<a href="..\subjects/doActionWithSubjects.php">Дисциплины</a>
			<a href="..\schedule/var.php">Расписание</a>
			<a href="/php/exit.php">Выйти</a>
			<div class="triangle"></div>
		</div> </br></br>
		
		<main>
			<div class="doChoice" id="addTeache">
				<a href="doActionWithTeachers.php">Вернуться назад</a> <br />
			</div>
			<form class="addTeacher" name="addTeacher" action="tcreate.php" method="post" enctype=multipart/form-data>
				<div class="allFields">
						<h3>Добавить учителя</h3>
						<div>
							<input class="standartInput" type="text" name="middleName" required placeholder="Фамилия*" value="" pattern="[а-яА-Яa-zA-Z]+">
							<span style="color: red";></span>
						</div>
						<div>
							<input class="standartInput" type="text" name="firstName" required placeholder="Имя*" value=""pattern="[а-яА-Яa-zA-Z]+">
							<span style="color: red";></span>
						</div>
						<div>
							<input class="standartInput" type="text" name="lastName" required placeholder="Отчество*" value=""pattern="[а-яА-Яa-zA-Z]+">
							<span style="color: red";></span>
						</div>
						<div>
							<input class="standartInput" type="text" name="telephon" required placeholder="Номер телефона*" value="" pattern="^[0-9]{9,11}" >
							<span style="color: red";></span>
						</div>
						<div>
							<input class="standartInput" type="number" name="exp" required placeholder="Стаж*" value="" >
							<span style="color: red";></span>
						</div>
						<div>
							<input class="standartInput" type="date" name="date" required placeholder="Дата рождение*" value="" >
							<span style="color: red";></span>
						</div>
						<div>
							<input class="standartInput" type="text" name="login" required placeholder="Логин*" value="" >
							<span style="color: red";></span>
						</div>
						<div>
							<input class="standartInput" type="text" name="password" required placeholder="Пароль*" value="" minlength="8">
							<span style="color: red";></span>
						</div> <br />
				</div>
				<div class="chooseSubjects">
						<h4>Дисциплины</h4>	
						<?php
						foreach($post as $item) {
	  					?>				
						<input type="radio" name="id_post" required  value="<?= $item[0] ?>"><a></a><?= $item[1] ?></a> <br />
						<?php
						}
					?>
					</div>	
				<input class="standartButton" id="addTeacher" type="submit" name="addTeacher" value="Добавить">
			</form>
		</main>
	</body>
</html>