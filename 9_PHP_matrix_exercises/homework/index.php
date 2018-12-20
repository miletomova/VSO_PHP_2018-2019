<!DOCTYPE html>
<html lang="bg">
<head>
	<title>PHP матрици и упр. - домашно</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">Домашното на Мартин Георгиев</div>
		<div class="main">
			<div class="main_body">
				<div class="task">Задача 1</div>
				<div class="task_text">Напишете програма, която отпечатва таблицата за умножение</div>

				<table border="1" align="center">
				<?php
				for ($i = 0;$i <= 10; $i++) {
					echo '<tr>';
					for($k = 1;$k <= $i; $k++) {
						echo '<td>'.$i.' * '.$k.' = '.$i*$k.'</td>';
					}
				echo '</tr>';
				}
				?>
				</table>

				<div class="task">Задача 2</div>
				<div class="task_text">Напишете програма, която намира дължината на елемент в масив от стрингове</div>

				<?php
				$array = ['Hello!', 'I am Martin.', 'I am 14 years old.'];

				$str_len0 = strlen($array[0]);
				$str_len1 = strlen($array[1]);
				$str_len2 = strlen($array[2]);
				?>

				<div class="text"><?=$array[0].' - '.$str_len0.' символа'?></div>
				<div class="text"><?=$array[1].' - '.$str_len1.' символа'?></div>
				<div style="margin-bottom: 5%;" class="text"><?=$array[2].' - '.$str_len2.' символа'?></div>

				<div class="task">Задача 3</div>
				<div class="task_text">Генерирайте елементите на двумерен масив с размер m*n и ги отпечатайте под формата на<br>таблица като скриптът трябва да работи за произволни m и n</div>

				<?php
				$arr = [];
				$rows = 5;
				$cols = 4;
				$value = 1;

				for($i = 0; $i < $rows; $i++){
					$value = $i*3+1;
					for($k = 0; $k < $cols; $k++){
						$arr[$i][$k] = $value;
						$value += 15;
					}
				}

				echo "<table border=1 align='center'>";
				for($m = 0; $m < $rows; $m++){
					echo "<tr>";
					for($n = 0; $n < $cols; $n++){
						echo "<td style='width: 22px;'>{$arr[$m][$n]}</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
				?>

				<?php
				$arr = [];
				$rows = 5;
				$cols = 5;
				$value = 1;

				for($i = 0; $i < $rows; $i++){
					$value = $i*(-1)+25;
					for($k = 0; $k < $cols; $k++){
						$arr[$i][$k] = $value;
						$value -= 5;
					}
				}

				echo "<table border=1 align='center'>";
				for($m = 0; $m < $rows; $m++){
					echo "<tr>";
					for($n = 0; $n < $cols; $n++){
						echo "<td style='width: 22px;'>{$arr[$m][$n]}</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
				?>
			</div>
		</div>
	</div>
</body>
</html>