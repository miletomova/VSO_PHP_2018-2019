<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="bg">
<head>
	<title>PHP функции - домашно</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="wrapper">
		<header>Домашното на Мартин Георгиев</header>
		<main>
			<div class="main_body">
				<div class="task">Задача 1</div>
				<div class="task_text">Да се декларира функция, която отпечатва индексите на елементите на масив и тяхната стойност<br>(масивът е с произволен брой елементи, като всеки елемент е с произволна дължина).</div>

				<div class="result">
				<?php
				$array_1 = [10, 15, [12, 43, [30, 40]]];

				print_all_array_el($array_1);
				?>
				</div>

				<div class="task">Задача 2</div>
				<div class="task_text">Декларирайте функция, която отпечатва индекса на най-големия елемент в масива.<br>*Добавете форма, с която потребителя да задава стойностите на масива.</div>
				
				<?php
				$array_2 = [27, 13, 11, 89];

				echo '<div class="text">';
				print_array($array_2);
				echo '</div>';

				echo '<div class="result">';
				print_max_num_index($array_2);
				echo '</div>';
				?>

				<div class="task">Задача 3</div>
				<div class="task_text">Декларирайте функция, която да преброява колко пъти дадено число се повтаря в масив.</div>

				<?php
				$array_3 = [0, 0, 1, 2, 3, 3, 4, 4, 4, 6, 7, 7, 8, 9, 9, 9];

				echo '<div class="text">';
				print_array($array_3);
				echo '</div>';

				echo '<div class="result">';
				print_num_count_in_array(8, $array_3);
				echo '</div>';
				?>
			</div>
		</main>
	</div>
</body>
</html>