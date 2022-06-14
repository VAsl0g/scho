<?php
    require_once '..\config\connect.php';
    $grup=mysqli_query($connect,'SELECT * from `grup`');
    $grup = mysqli_fetch_all($grup);
    $post=mysqli_query($connect,'SELECT `id_post` from `post`');
    $post = mysqli_fetch_all($post);
	$raspis=mysqli_query($connect,'SELECT * from `raspis`');
    $raspis = mysqli_fetch_all($raspis);

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Работа с журналом</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>

<body>
	<?php $name=$_COOKIE['userq2']?>
	<b>Здравствуйте, <?=$name?></b>
	<a href="/php/exit.php">Выйти</a></b>


	<main class="main" id="beginAndEndOfQuarter">
		<div>
			<form name="chooseSubjectAndClass" action="posesh.php" method="get">
				<?php     $person=mysqli_query($connect,"SELECT * from `person` INNER JOIN `post` ON
				 `person`.`id_post` = `post`.`id_post` WHERE `login`= '$name'");
                                           echo '<div>
                            <select name="post5"> <option hidden>Список предметов</option>';
                            while ($rowG=mysqli_fetch_array($person)){
                            echo ' <option value='.$rowG['id'].'>'.$rowG['name_post'].'</option> ';
                            }
                            echo '</select>';
                        	'</div>'; 
						?>
					<?php
						$person1=mysqli_query($connect,"SELECT  DISTINCT * from `raspis` INNER JOIN `person` ON
						`raspis`.`id_post` = `person`.`id_post` WHERE `login`= '$name'");

						/* $person1=mysqli_query($connect,"SELECT `id_post` from `raspis` WHERE `login`= '$name'");
						$person1=mysqli_fetch_all($person1);   /* связь для логина */
						/*  $rowG=$person1['id'];
						$grup=mysqli_query($connect,"SELECT * from `raspis` INNER JOIN `grup` 
						ON  `raspis`.`id_grup` = `grup`.`id_grup` WHERE `raspis`.`id_post`='$rowG'");  */
                                           echo '<div>
                            <select name="post5"> <option hidden>Список групп</option>';
                            while ($rowG=mysqli_fetch_array($person1)){
							echo ' <option value='.$rowG['login'].'>'.$rowG['id_grup'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>  
				<input class="chooseSubjAndClass" type="submit" name="chooseSubjectAndClass" value="Отобразить">
			</form>
		</div>	
	</main>


<!-- 			<?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post5"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
 -->

</body>
</html>