<?php
  require_once 'config/connect.php';
  $persons = mysqli_query($connect, "SELECT * FROM `person`");
  $persons = mysqli_fetch_all($persons);
  print_r($person);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Авторизация</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body class="fonForBody">
		<div class="container mt-4">
		<?php
			if($_COOKIE['userq1'] == '' and $_COOKIE['userq2'] == ''):
		?>
			<div class="authPage">
				<h1>Школьный журнал</h1>
				<div class="formAutorization">
					<form name="auth" action="php/auth.php" method="post">
						<p><b>Вход для зарегистрированных пользователей</b></p>
						<input type="text" name="login" placeholder="Имя пользователя"> <br /><br />
						<input type="password" name="password" placeholder="Пароль"> <br /><br />
						<input type="submit" name="auth" value="Войти">
					</form>
				</div>
				<b><h4>Разработчик: Васильев Константин</h4></b>
			<?php endif;?>
				<?php 
					if($_COOKIE['userq1'] != ''):
					header('Location: /admin/admin.php'); 
					endif;
					   /* setcookie("userq1"); */   
	
 					if($_COOKIE['userq2'] !=''):
						header('Location: /classRegister/chooseSubjectAndClass.php');
					endif;
					 /*  setcookie("userq2");  */

					if($_COOKIE['userq3'] !=''):
						header('Location: /schoolDiary/schoolDiary.php');
					endif;
				?> 
		</div>
		<?php
		print_r($error);
		?>
		</div>
	</body>
</html>