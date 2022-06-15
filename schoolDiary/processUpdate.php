<?php
  require_once '../config/connect.php';
  $students_id = $_GET['id'];
  $student = mysqli_query($connect, "SELECT * FROM `students` WHERE `id_stud`='$students_id' ");							
  $student = mysqli_fetch_assoc($student);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Обновить данные</title>
</head>
<body>
    <h2>Обновить данные</h2>
    <form action="puupupdate.php" method="post">
        <div>
					<input type="hidden" name="id" value="<?= $student['id_stud'] ?>">
				</div>
        <div>
          <p>Фамилия</p>
					<input class="standartInput" type="text" name="middleName" value="<?= $student['middleName'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
          <p>Имя</p>
					<input class="standartInput" type="text" name="firstName" value="<?= $student['firstName'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
          <p>Отчество</p>
					<input class="standartInput" type="text" name="lastName" value="<?= $student['lastName'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
			<p>Номер телефона</p>
					<input class="standartInput" type="text" name="telephon" value="<?= $student['phone'] ?>">
						<span style="color: red";></span>
					</div>
			<p>Дата рождения</p>
					<div>
						<input class="standartInput" type="date" name="date" value="<?= $student['date_of_birth'] ?>">
						<span style="color: red";></span>
				</div>
				<div>
          <p>Логин</p>
					<input class="standartInput" type="text" name="login" value="<?= $student['login'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
          <p>Пароль</p>
					<input class="standartInput" type="text" name="password" value="">
					<span style="color: red";></span>
				</div> <br />
                <div>
          <p>Сведения о родителях</p>
					<input class="standartInput" type="text" name="roditinfo" value="<?= $student['roditinfo'] ?>">
					<span style="color: red";></span>
				</div> <br />
			<input class="standartButton" id="editPuup" type="submit" name="editTeacher" value="Обновить">
			<div class="doChoice" id="editTeache">
				<a href="schoolDiary.php">Вернуться назад</a> <br />
			</div>
    </form>
</body>
</html>