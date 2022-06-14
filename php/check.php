<?php
	$login = filter_var(trim($_POST['login']));
	$pass = filter_var(trim($_POST['password']));
	
	if(mb_strlen($login) < 4 || mb_strlen($login) > 90){
		echo "Недопустимая длина логина (минимум 4 символа)";
		exit();
	}else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 8){
		echo "Недопустимая длина пароля (минимум 8 символов)";
		exit();
	}
	header('Location: /php/auth.php');
?>