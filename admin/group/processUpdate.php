<?php
  require_once '../../config/connect.php';
  $post_id = $_GET['id'];
  $posts = mysqli_query($connect, "SELECT * FROM `grup` WHERE `id_grup`='$post_id' ");							
  $posts = mysqli_fetch_assoc( $posts);

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
        <form  action="grUpdate.php" method="post">
        	<div>
				<input type="hidden" name="id_grup" value="<?= $posts['id_grup'] ?>">
			</div>
        	<div>
          		<p>Название группы</p>
				<input class="standartInput" type="text" name="name_group" value="<?= $posts['name_group'] ?>">
				<span style="color: red";></span>
			</div>
			<input type="submit" name="editSubject" value="Изменить"></br>
        </form>
		<div class="doChoice1" id="editSubjects">
				<a href="editGr.php">Вернуться назад</a> <br>
			</div>
		</body>
	</html>	