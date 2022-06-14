<?php
  require_once '../../config/connect.php';
  $post = mysqli_query($connect, "SELECT `id_grup`, `name_group` FROM `grup`");							
  $post = mysqli_fetch_all($post);
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Добавить ученика</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
	<body>
		<div class="menu">
            <a href="../teachers/doActionWithTeachers.php">Учителя</a>
		    <a href="doActionWithClasses.php">Ученики</a>
			<a href="../group/doActionWithGr.php">Группы</a>
		    <a href="../subjects/doActionWithSubjects.php">Дисциплины</a>
		    <a href="../schedule/var.php">Расписание</a>
		    <a href="/logout.php">Выйти</a>
		    <div class="triangle"></div>
        </div> </br></br>
	
		<main class="main">
			<form name="addPupil" action="PupCreate.php" method="post" enctype=multipart/form-data>
				<div class="allFields">
					<h3>Добавить ученика</h3>
					<div>
						<input class="standartInput" type="text" name="middleName" required placeholder="Фамилия*" value="">
						<span style="color: red";></span>
					</div>
					<div>
						<input class="standartInput" type="text" name="firstName" required placeholder="Имя*" value="">
						<span style="color: red";></span>
					</div>
					<div>
						<input class="standartInput" type="text" name="lastName" required placeholder="Отчество*" value="">
						<span style="color: red";></span>
					</div>
					<div>
						<input class="standartInput" type="text" name="telephon" required placeholder="Номер телефона*" value="" >
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
					</div> 

					<div>
						<textarea class="standartTextArea" rows="6" cols="40" name="parents" placeholder="Сведения о родителях"></textarea>
					</div>
				</div>
				<div class="chooseSubjects">
						<h4>Группа</h4>	
						<?php
						foreach($post as $item) {
	  					?>				
						<input type="radio" name="id_grup" value="<?= $item[0] ?>"><a></a><?= $item[1] ?></a> <br />
						<?php
						}
					?>
					</div>
				<input class="standartButton" id="addPupil" type="submit" name="addPupil" value="Добавить">
			</form>
		</main>
				<div class="doChoice" id="doChoiceOnAddPupilPage">
			<a href="doActionWithClasses.php">Вернуться назад</a> <br />
		</div>
	</body>
</html>