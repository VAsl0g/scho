<?php
    require_once '.../config/connect.php';

?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Работа с журналом</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>

<body>
	<?php $name = $_COOKIE['userq2'] ?>
	<b>Здравствуйте, <?= $name ?></b>
	<a href="/php/exit.php">Выйти</a></b>
	<main class="main chooseSubjectAndClass" id="editPupilsPage">


		</br></br></br>
		<table class="tableForClassRegister" border="1">

			<tbody>
				<tr>
					<th rowspan="2">№п/п</th>
					<th rowspan="2">ФИО</th>
					<th colspan="5"> Дни недели </th>
				</tr>
				<tr>

					<th>
						ПН
					</th>
					<th>
						ВТ
					</th>
					<th>
						СР
					</th>
					<th>
						ЧТ
					</th>
					<th>
						ПТ
					</th>

				<tr>
					<td>1</td>
					<td>Осадчий Сергей Семенович</td>
					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-16&amp;idPupil=3&amp;idSubject=13&amp;idMark=264">
							<div class="inCells"> 5 </div>
						</a>

					</td>

					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-17&amp;idPupil=3&amp;idSubject=13&amp;idMark=279">
							<div class="inCells"> 5 </div>
						</a>

					</td>

					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-18&amp;idPupil=3&amp;idSubject=13&amp;idMark=265">
							<div class="inCells"> 2 </div>
						</a>

					</td>

					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-19&amp;idPupil=3&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-20&amp;idPupil=3&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

				<tr>
					<td>2</td>
					<td>Сереброва Алина Валентиновна</td>
					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-16&amp;idPupil=4&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

					<td>
						<a href="chooseSubjectAndClass.php?fromCells=2022-06-17&amp;idPupil=4&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-18&amp;idPupil=4&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-19&amp;idPupil=4&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-20&amp;idPupil=4&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

				</tr>
				<tr>
					<td>3</td>
					<td>Хорошков Иван Дмитриевич</td>
					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-16&amp;idPupil=16&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-17&amp;idPupil=16&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

					<td>
						<a href="chooseSubjectAndClass.php?fromCells=2022-06-18&amp;idPupil=16&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

					<td>

						<a href="chooseSubjectAndClass.php?fromCells=2022-06-19&amp;idPupil=16&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>

					<td>
						<a href="chooseSubjectAndClass.php?fromCells=2022-06-20&amp;idPupil=16&amp;idSubject=13&amp;idMark=">
							<div class="inCells"> </div>
						</a>

					</td>
				</tr>
				<tr>
					<td colspan="2">д/з</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>

				</tr>

			</tbody>
		</table>

	</main>
</body>

</html>