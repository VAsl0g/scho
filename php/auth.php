<?php
	require_once '../config/connect.php';
	$login = $_POST['login'];
	$pass = md5($_POST['password']);
	$result1 = mysqli_query($connect, "SELECT * FROM `person` WHERE `login`='$login' AND `password`='$pass'");
	$user = mysqli_fetch_assoc($result1);
	$result2 = mysqli_query($connect, "SELECT * FROM `students` WHERE `login`='$login' AND `password`='$pass'");
	$user1 = mysqli_fetch_assoc($result2);

	if (($user['status']) == '' && ($user1['status']) == '' )  {
		echo "Такой пользователь не найден!";
		exit();
	} elseif (($user['status']) == '1') {
		setcookie('userq1', $user['login'], time() + 3600, "/");
		header('Location: /index1.php');} 
 	 elseif (($user['status']) == '2') {
		setcookie('userq2', $user['login'], time() + 3600, "/");
		header('Location: /index1.php'); 
	}
	elseif (($user1['status']) == '3') {
		setcookie('userq3', $user1['login'], time() + 3600, "/");
		header('Location: /index1.php'); 
	}



	/* print_r($user['status']) */
/* 	switch ($user['status']) {
		case '':
			echo "Такой пользователь не найден!";
			break;
		case 1:
			setcookie('userq1', $user['login'], time() + 3600, "/"); 
			break; */
			/* header('Location: /'); */
/* 		case 2:
			setcookie('userq2', $user['login'], time() + 3600, "/");
			  break; */
			/* header('Location: /'); */
	

	/* if(count($user) ==0 ) {
		echo "Такой пользователь не найден!";
		exit();
	} */

/* 	setcookie('userq', $user1['login'], time() + 3600, "/"); 

	if(isset($_COOKIE['userq'])){
		echo 'Куки успешно установлены!';
	  }else{
		echo 'Куки НЕ установлены!';
	  }  */
/* 	  header('Location: /'); */ 
?>