<?php
  require_once '..\..\config\connect.php';
  $pupil_id = $_GET['id'];
  $pupil = mysqli_query($connect, "SELECT * FROM `students` WHERE `id_stud`='$pupil_id' ");							
  $pupil = mysqli_fetch_assoc($pupil);
  //print_r($_GET);

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
        <form action="PupUpdate.php" method="post">
        <div>
					<input type="hidden" name="id" value="<?= $pupil['id_stud'] ?>">
				</div>
        <div>
          <p>Фамилия</p>
					<input class="standartInput" type="text" name="middleName" value="<?= $pupil['middleName'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
          <p>Имя</p>
					<input class="standartInput" type="text" name="firstName" value="<?= $pupil['firstName'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
          <p>Отчество</p>
					<input class="standartInput" type="text" name="lastName" value="<?= $pupil['lastName'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
			<p>Номер телефона</p>
					<input class="standartInput" type="text" name="phone" value="<?= $pupil['phone'] ?>">
						<span style="color: red";></span>
					</div>
			<p>Дата рождения</p>
					<div>
						<input class="standartInput" type="date" name="date_of_birth" value="<?= $pupil['date_of_birth'] ?>">
						<span style="color: red";></span>
				</div>
				<div>
            <p>Логин</p>
					<input class="standartInput" type="text" name="login" value="<?= $pupil['login'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
          <p>Пароль</p>
					<input class="standartInput" type="text" name="password" value="<?= $pupil['password'] ?>">
					<span style="color: red";></span>
				</div>
				<div>
			<p>Группа</p>
					<input class="standartInput" type="text" name="id_grup" value="<?= $pupil['id_grup'] ?>">
					<span style="color: red";></span>
				</div> 
            <p>Сведения о родителях</p>
				<input class="standartInput" type="text" name="roditinfo" value="<?= $pupil['roditinfo'] ?>">
				<span style="color: red";></span>
				</div> 
                <input id="editPupil" type="submit" name="editPupil" value="Обновить">
			<div class="doChoice" id="doChoiceOnProcessEditOrDeletePupil">
				<a href="/admin/classes/editPupils.php">Вернуться назад</a>
			</div>
        </form>
		</body>
	</html>	