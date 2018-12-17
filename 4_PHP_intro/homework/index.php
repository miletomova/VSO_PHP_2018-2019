<?php 

	// figure parameters
    $a1 = 10;
	$a2 = 15;
	$a3 = 20;

	$b1 = 20;
	$b2 = 25;
	$b3 = 30;

	$ha1 = 15;
	$ha2 = 20;
	$ha3 = 25;

	$p = 3.14;

	$r1 = 15;
	$r2 = 20;
	$r3 = 25;

	// date and time
	$date1 = new DateTime("now", new DateTimeZone('Australia/Sydney') );
	$date_1 = $date1->format('d M, Y');
	$time_1 = $date1->format('H:i:s'.' ч.');

	$date2 = new DateTime("now", new DateTimeZone('Europe/Sofia') );
	$date_2 = $date2->format('d M, Y');
	$time_2 = $date2->format('H:i:s'.' ч.');

	// number
	$number = (5 * 25) - 75;

	// area of triangle
	$x1 = 1;
	$x2 = 4;
	$x3 = 1;

	$y1 = 1;
	$y2 = 2;
	$y3 = 3;

	$s = 0.5 * (($x1-$x2 )*($y1+$y2)+($x2-$x3)*($y2+$y3)+($x3-$x1)*($y3+$y1));

?>

<!DOCTYPE html>
<html lang="bg">
<head>
	<title>PHP intro - homework</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="https://cdn.iconscout.com/icon/free/png-256/php-28-226043.png">
</head>
<body>
	<div class="wrapper">
		<div class="header">Домашното на Мартин Георгиев</div>
		<div class="main">

			<div class="ex">Задача 1</div>

			<div class="column">
				<div class="blue">Фигурата е правоъгълник</div>
				<div class="text">1) При а = <?= $a1?>; b = <?= $b1?></div>
                <div class="text2">P = <?= 2*($a1 + $b1)?>; S = <?= $a1 * $b1?></div>
                <div class="text">2) При а = <?= $a2?>; b = <?= $b2?></div>
                <div class="text2">P = <?= 2*($a2 + $b2)?>; S = <?= $a2 * $b2?></div>
                <div class="text">3) При а = <?= $a3?>; b = <?= $b3?></div>
                <div class="text2">P = <?= 2*($a3 + $b3)?>; S = <?= $a3 * $b3?></div>
			</div>
			<div class="column">
				<div class="blue">Фигурата е квадрат</div>
				<div class="text">1) При а = <?= $a1?></div>
				<div class="text2">P = <?= 4* $a1?>; S = <?= $a1 * $a1?></div>
				<div class="text">2) При а = <?= $a2?></div>
				<div class="text2">P = <?= 4* $a2?>; S = <?= $a2 * $a2?></div>
				<div class="text">3) При а = <?= $a3?></div>
				<div class="text2">P = <?= 4* $a3?>; S = <?= $a3 * $a3?></div>
			</div>
			<div class="column">
				 <div class="blue">Фигурата е триъгълник</div>
				 <div class="text">1) При a = <?= $a1?>; ha = <?= $ha1?></div>
				 <div class="text2">P = <?= 3*$a1?>; S = <?= ($a1*$ha1) / 2?></div>
				 <div class="text">2) При a = <?= $a2?>; ha = <?= $ha2?></div>
				 <div class="text2">P = <?= 3*$a2?>; S = <?= ($a2*$ha2) / 2?></div>
				 <div class="text">3) При a = <?= $a3?>; ha = <?= $ha3?></div>
				 <div class="text2">P = <?= 3*$a3?>; S = <?= ($a3*$ha3) / 2?></div>
			</div>
			<div class="column">
				<div class="blue">Фигурата е кръг</div>
				<div class="text">1) При r = <?= $r1?></div>
				<div class="text2">P = <?= 2 * $p * $r1?>; S = <?= $p * $r1 * $r1?></div>
				<div class="text">2) При r = <?= $r2?></div>
				<div class="text2">P = <?= 2 * $p * $r2?>; S = <?= $p * $r2 * $r2?></div>
				<div class="text">3) При r = <?= $r3?></div>
				<div class="text2">P = <?= 2 * $p * $r3?>; S = <?= $p * $r3 * $r3?></div>
			</div>

			<div style="margin-top: 23.5%;" class="ex">Задача 2</div>

			<table align="center">
				<tr class="table_header_td">
					<td>Фигура</td>
					<td>Параметри</td>
					<td>Обиколка</td>
					<td>Лице</td>
				</tr>
				<tr>
					<td class="left_td">Правоъгълник</td>
					<td>a = <?= $a1?>; b = <?= $b1?></td>
					<td>P = <?= 2*($a1 + $b1)?></td>
					<td>S = <?= $a1 * $b1?></td>
				</tr>
				<tr>
					<td class="left_td">Квадрат</td>
					<td>a = <?= $a1?></td>
					<td>P = <?= 4*$a1?></td>
					<td>S = <?= $a1*$a1?></td>
				</tr>
				<tr>
					<td class="left_td">Триъгълник</td>
					<td>a = <?= $a1?>; ha = <?= $ha1?></td>
					<td>P = <?= 3*$a1?></td>
					<td>S = <?= ($a1*$ha1) / 2?></td>
				</tr>
				<tr>
					<td class="left_td">Кръг</td>
					<td>r = <?= $r1?></td>
					<td>P = <?= 2 * $p * $r1?></td>
					<td>S = <?= $p * $r1 * $r1?></td>
				</tr>
			</table>

			<div class="ex">Задача 3</div>
			
			<div class="col">
				<div style="text-align: center;" class="blue">София, България</div>
				<div class="date"><?=$date_2?></div>
				<div class="time"><?=$time_2?></div>
			</div>
			
			<div class="col">
				<div style="text-align: center;" class="blue">Сидни, Австралия</div>
				<div class="date"><?=$date_1?></div>
				<div class="time"><?=$time_1?></div>
			</div>
			
			<div style="margin-top: 19%;" class="ex">Задача 4</div>

			<div style="text-align: center;" class="text">Числото, за което се сетих е...<span style="text-align: ;" class="blue"><?=' '.$number?></span></div>

			<div class="ex">Задача 5</div>

			<div style="text-align: center; font-size: 22px;" class="text">На координатна система е начертан триъгълник с координати<br>на точките: А (<?=$x1.';'.$y1?>), B (<?=$x2.';'.$y2?>) и C (<?=$x3.';'.$y3?>).<br>Колко е площта/лицето на този триъгълник?</div>

			<div style="text-align: center; color: gray; margin-top: 20px; margin-bottom: 20px;" class="text">* формулата е 0.5*((x1-x2 )*(y1+y2)+(x2-x3)*(y2+y3)+(x3-x1)*(y3+y1))</div>

			<div style="text-align: center; margin-top: 15px; margin-bottom: 40px;" class="blue">S = <?=$s?></div>
		</div>
	</div>
</body>
</html>