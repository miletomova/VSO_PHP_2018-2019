<?php

$cars = [
		['brand' => 'Volvo', 'model' => 'S60', 'stock' => '10', 'sold' => '20', 'price' => '50000'],
		['brand'=> 'VW', 'model' => 'Polo', 'stock' => '8', 'sold' => '10', 'price' => '20000'],
		['brand' => 'Fiat', 'model' => 'Uno', 'stock' => '10', 'sold' => '20', 'price' => '20000'],
		['brand' => 'Jeep', 'model' => 'Wrangler', 'stock' => '7', 'sold' => '3', 'price' => '62000']
	];

$answ_1 = $cars[0]['brand'];
$answ_2 = $answ_1.' '.$cars[0]['model'];

?>
<!DOCTYPE html>
<html lang="bg">
<head>
	<title>PHP For - homework</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">Домашното на Мартин Георгиев</div>
		<div class="main">
			<div class="task_area">
				<div class="task">Задача 2</div>
				<div class="task_text">Отпечатайте елементите на масива $cars съдържащ... (виж презентацията)</div>

				<div style="margin-top: 3.5%;" class="text">1) За един елемент от масива $cars по избор</div>
				<div class="answer"><?=$answ_1?></div>

				<div class="text">2) За два елемента от масива $cars по избор</div>
				<div class="answer"><?=$answ_2?></div>

				<div class="text">3) За всички елементи от масива под формата на таблица</div>

				<table border="1" align="center">
					<tr>
						<td class="head_td">Марка</td>
						<td class="head_td">Модел</td>
						<td class="head_td">Наличност</td>
						<td class="head_td">Продадени</td>
						<td class="head_td">Цена</td>
					</tr>
				<?php
				for ($i = 0; $i < count($cars); $i++) {
					echo '<tr>';
					echo '<td>'.$cars[$i]['brand'].'</td>';
					echo '<td>'.$cars[$i]['model'].'</td>';
					echo '<td>'.$cars[$i]['stock'].'</td>';
					echo '<td>'.$cars[$i]['sold'].'</td>';
					echo '<td>'.$cars[$i]['price'].'</td>';
					echo '</tr>';
				}
				?>
				</table>

				<div class="cycle">С помощта на цикъл изчислете...</div>

				<div class="text">4) Общо колко коли са продадени според стойностите,<br>запазени в $cars?</div>
				<?php
				$sum_sold = 0;
				for ($j = 0; $j < count($cars); $j++) {
					$sum_sold += $cars[$j]['sold'];
				}
				?>
				<div class="answer">Отг: <?=$sum_sold?> коли</div>

				<div class="text">5) Сумата от реализираните продажби за всяка кола поотделно,<br>добавете тази сума като елемент в масива</div>
				<?php
				for ($l = 0; $l < count($cars); $l++) {
					// $sum_total += $cars[$l]['sold'] * $cars[$l]['price'];
					echo '<div style="margin-bottom: 1.5%;" class="answer">'.$cars[$l]['brand'].' '.$cars[$l]['model'].' - '.($cars[$l]['sold'] * $cars[$l]['price']).'</div>';
				}
				?>

				<div style="margin-top: 5%;" class="text">6) Сумата от продажбата на всички коли</div>
				<?php
				$sum_price = 0;
				for ($k = 0; $k < count($cars); $k++) {
					$sum_price += $cars[$k]['price'];
				}
				?>
				<div class="answer">Отг: <?=$sum_price?></div>
			</div>
		</div>
	</div>
</body>
</html>