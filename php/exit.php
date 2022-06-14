<?php
	setcookie('userq1', $user['login'], time() - 3600, "/");
	setcookie('userq2', $user['login'], time() - 3600, "/");
	setcookie('userq3', $user['login'], time() - 3600, "/");
	header('Location: /index1.php');
?>