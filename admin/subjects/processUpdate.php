<?php
  require_once '..\..\config\connect.php';
  $post_id = $_GET['id'];
  $posts = mysqli_query($connect, "SELECT * FROM `post` WHERE `id_post`='$post_id' ");							
  $posts = mysqli_fetch_assoc( $posts);
/*   print_r($posts); */

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
        <form  action="subUpdate.php" method="post">
        	<div>
				<input type="hidden" name="id_post" value="<?= $posts['id_post'] ?>">
			</div>
        	<div>
          		<p>Название дисциплины</p>
				<input class="standartInput" type="text" name="name_post" value="<?= $posts['name_post'] ?>">
				<span style="color: red";></span>
			</div>
			<input type="submit" name="editSubject" value="Изменить"></br>
        </form>
		<div class="doChoice" id="editSubjects">
				<a href="editSubjects.php">Вернуться назад</a> <br>
			</div>
		</body>
	</html>	