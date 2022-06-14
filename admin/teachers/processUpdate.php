<?php
  require_once '..\..\config\connect.php';
  $teacher_id = $_GET['id'];
  $teacher = mysqli_query($connect, "SELECT * FROM `person` WHERE `id`='$teacher_id' ");							
  $teacher = mysqli_fetch_assoc($teacher);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Обновить товара</title>
</head>
<body>
    <h2>Обновить данные</h2>
    <form action="tupdate.php" method="post">
        <div>
					<input type="hidden" name="id" value="<?= $teacher['id'] ?>">
				</div>
        <div>
          <p>Фамилия</p>
					<input class="standartInput" type="text" name="middleName" value="<?= $teacher['middleName'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
          <p>Имя</p>
					<input class="standartInput" type="text" name="firstName" value="<?= $teacher['firstName'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
          <p>Отчество</p>
					<input class="standartInput" type="text" name="lastName" value="<?= $teacher['lastName'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
			<p>Номер телефона</p>
					<input class="standartInput" type="text" name="telephon" value="<?= $teacher['phone'] ?>">
						<span style="color: red";></span>
					</div>
					<div>
			<p>Стаж</p>
						<input class="standartInput" type="number" name="exp" value="<?= $teacher['experience'] ?>">
						<span style="color: red";></span>
					</div>
			<p>Дата рождения</p>
					<div>
						<input class="standartInput" type="date" name="date" value="<?= $teacher['date_of_birth'] ?>">
						<span style="color: red";></span>
				</div>
				<div>
          <p>Логин</p>
					<input class="standartInput" type="text" name="login" value="<?= $teacher['login'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
          <p>Пароль</p>
					<input class="standartInput" type="text" name="password" value="<?= $teacher['password'] ?>">
					<span style="color: red";></span>
				</div> <br />
			<input class="standartButton" id="editTeacher" type="submit" name="editTeacher" value="Обновить">
			<div class="doChoice" id="editTeache">
				<a href="editTeachers.php">Вернуться назад</a> <br />
			</div>
    </form>
</body>
</html>


