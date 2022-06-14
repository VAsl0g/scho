<?php
/*   require_once '..\..\config\connect.php';
  $person=mysqli_query($connect,'SELECT `id_person`,`middleName` from `person`');
  $post=mysqli_query($connect,'SELECT `id_post`,`name_post` from `post`');
/*   $post1=mysqli_query($connect,'SELECT `id_post`,`name_post` from `post`');
  $post2=mysqli_query($connect,'SELECT `id_post`,`name_post` from `post`');
  $post3=mysqli_query($connect,'SELECT `id_post`,`name_post` from `post`');
  $post4=mysqli_query($connect,'SELECT `id_post`,`name_post` from `post`'); */
  /* $author1=mysqli_query($connect,'SELECT `id_grup` from `grup`');
  $grops=mysqli_query($connect,'SELECT * from `grup`');
  for ($i=1; $i<7; $i++){
  		${'post'.$i} = &$post;
  } */ 
    require_once '../../config/connect.php';
    $raspis=mysqli_query($connect,'SELECT * from `raspis`');
    $raspis = mysqli_fetch_all($raspis);
    $grup=mysqli_query($connect,'SELECT * from `grup`');
    $grup = mysqli_fetch_all($grup);
    $post=mysqli_query($connect,'SELECT `id_post` from `post`');
    $post = mysqli_fetch_all($post);

?>


<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Работа с расписанием</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<style type='text/css'>
	</style>
</head>

<body style = "background: #c9dbdc">
	<div class="menu">
		<a href="../teachers/doActionWithTeachers.php">Учителя</a>
		<a href="../classes/doActionWithClasses.php">Ученики</a>
		<a href="../subjects/doActionWithSubjects.php">Дисциплины</a>
		<a href="var.php" style = "background: #5F9EA0">Расписание</a>
		<a href="/logout.php">Выйти</a>
		<div class="triangle"></div>
	</div> <br />

    
    <form  action="add.php" method="post">
        <h1>Расписание</h1>
            <table class="allClasses table table-striped table table-bordered border-dark" border='1'>
                <tr class="table-dark">
                    <th colspan="3">Понедельник</th>
                    <th colspan="3">Вторник</th>
                    <th colspan="3">Среда</th>
                    <th colspan="3">Четверг</th>
                    <th colspan="3">Пятница</th>
                </tr> <!--ряд с ячейками заголовков-->
                <tr class="table-light">
                    <td align="center">Время</td>
                    <td align="center">Дисциплина</td>
                    <td align="center">Группа</td>
                    <td align="center">Время</td>
                    <td align="center">Дисциплина</td>
                    <td align="center">Группа</td>
                    <td align="center">Время</td>
                    <td align="center">Дисциплина</td>
                    <td align="center">Группа</td>
                    <td align="center">Время</td>
                    <td align="center">Дисциплина</td>
                    <td align="center">Группа</td>
                    <td align="center">Время</td>
                    <td align="center">Дисциплина</td>
                    <td align="center">Группа</td>
                </tr> <!--ряд с ячейками тела таблицы-->
                <tr>
                    <td><input  name="time1" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>
                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post1"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup1"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time2" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post2"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup2"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time3" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post3"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup3"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time4" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post4"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup4"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time5" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post5"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup5"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                </tr>

                <tr>
                    <td><input  name="time6" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post6"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup6"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time7" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post7"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup7"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time8" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post8"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup8"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time9" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post9"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup9"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time10" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post10"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup10"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                </tr>

                <tr>
                    <td><input  name="time11" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post11"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup11"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time12" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post12"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup12"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time13" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post13"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup13"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time14" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post14"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup14"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time15" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post15"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup15"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                </tr>

                <tr>
                    <td><input  name="time16" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post16"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup16"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time17" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post17"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup17"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time18" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post18"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup18"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time19" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post19"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup19"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                    <td><input  name="time20" type="time" pattern="^\d{2}-\d{2}$" value="">
                    </td>

                    <td>
                        <?php     $post=mysqli_query($connect,'SELECT * from `post`');
                                           echo '<div>
                            <select name="post20"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($post)){
                            echo ' <option value='.$rowG['id_post'].'>'.$rowG['name_post'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                      
                    <td>
                        <?php       $grup=mysqli_query($connect,'SELECT * from `grup`');
                                           echo '<div>
                            <select name="grup20"> <option hidden> </option>';
                            while ($rowG=mysqli_fetch_array($grup)){
                            echo ' <option value='.$rowG['id_grup'].'>'.$rowG['name_group'].'</option>';
                            }
                            echo '</select>
                            </div>'; 
                            ?>
                    </td>
                </tr>

            </table>
            <input type=submit value="Добавить">
    </form>
</body>
</html>





<!-- 
        	<div>
				<input type="hidden" name="id_grup" value="<?= $posts['id_grup'] ?>">
			</div>
        	<div>
          		<p>Название группы</p>
				<input class="standartInput" type="text" name="name_group" value="<?= $posts['name_group'] ?>">
				<span style="color: red";></span>
			</div>
			<input type="submit" name="editSubject" value="Изменить"></br>
        </form><form  action="../../Vendors/vendor3/update.php" method="post">
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


	
			<input type="submit" name="updateSchedule" value="Сохранить изменения">
			</form>
			</table>
		</div>
		<br />


		<br /> -->
<!-- </main>
</div>

</body>

</html> -->
