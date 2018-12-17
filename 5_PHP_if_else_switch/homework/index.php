<?php

// task 2
$used = 302;

$f_50 = 0.10;
$f_100 = 0.15;
$s_100 = 0.25;
$next = 0.35;

$all_50 = 50 * $f_50;
$all_100 = 100 * $f_100;
$all_s100 = 100 * $s_100;

$price;
$all_price;

if ($used <= 50) {
	$price = $used * $f_50;
	$all_price = $price + 0.2 * $price;
} else if ($used > 50 && $used <= 150) {
	$price = $all_50 + ($used - 50) * $f_100;
	$all_price = $price + 0.2 * $price;
} else if ($used > 150 && $used <= 250) {
	$price = $all_50 + $all_100 + ($used - 150) * $s_100;
	$all_price = $price + 0.2 * $price;
} else if ($used > 250) {
	$price = $all_50 + $all_100 + $all_s100 + ($used - 250) * $next;
	$all_price = $price + 0.2 * $price;
}

// task 3
$a = 9;
$b = 9;
$c = 1;
$d = 0;
$e = 2;
$f = 4;
$g = 1;
$h = 6;
$i = 0;

$egn_10_num = ($a*2 + $b*4 + $c*8 + $d*5 + $e*10 + $f*9 + $g*7 + $h*3 + $i*6) % 11;

// task 4
$month_num = 12;
$month_str;

switch ($month_num) {
	case '1':
		$month_str = 'Януари';
		break;
	case '2':
		$month_str = 'Февруари';
		break;
	case '3':
		$month_str = 'Март';
		break;
	case '4':
		$month_str = 'Април';
		break;
	case '5':
		$month_str = 'Май';
		break;
	case '6':
		$month_str = 'Юни';
		break;
	case '7':
		$month_str = 'Юли';
		break;
	case '8':
		$month_str = 'Август';
		break;
	case '9':
		$month_str = 'Септември';
		break;
	case '10':
		$month_str = 'Октомври';
		break;
	case '11':
		$month_str = 'Ноември';
		break;
	case '12':
		$month_str = 'Декември';
		break;						
	default:
		$month_str = 'месец';
		break;
}
?>
<!DOCTYPE html>
<html lang="bg">
<head>
	<title>PHP conditionals - homework</title>
	<link rel="icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/diagrams/512/ifelse-512.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
</head>
<body>
	<div class="wrapper">
		<div class="header">Домашното на Мартин Георгиев</div>
		<div class="main">
			<div style="margin-top: 4.5%;" class="task_area">
				<div class="ex">Задача 2</div>
				<div class="faded">Напишете програма, която по зададени единици използвана електроенергия и<br>тяхната цена изчислява сметката за ток</div>

				<table border="1" align="center">
					<tr>
						<td class="header_td">единици</td>
						<td class="header_td">сума за единица</td>
					</tr>
					<tr>
						<td class="left_td">за първите 50</td>
						<td><?=$f_50.'0'?> лв</td>
					</tr>
					<tr>
						<td class="left_td">за следващите 100</td>
						<td><?=$f_100?> лв</td>
					</tr>
					<tr>
						<td class="left_td">за следващите 100</td>
						<td><?=$s_100?> лв</td>
					</tr>
					<tr>
						<td class="left_td">за следващите</td>
						<td><?=$next?> лв</td>
					</tr>
				</table>

				<div style="margin-top: 2.5%; margin-left: 0%; margin-bottom: 3%; text-align: center;" class="faded">Към общата сметка се добавят 20% ДДС</div>

				<div class="result">
					<div style="border-bottom: 2px solid #0073cf;" class="text2"><?=$used.' ед.'?></div>
					<div style="text-align: center;" class="text2"><?=$all_price." лв"?></div>
				</div>	
			</div>

			<div class="task_area">
				<div class="ex">Задача 3</div>
				<div class="faded">Напишете програма, която по зададени 9 цифри изчислява 10-тата на ЕГН</div>

				<div class="result">
					<span class="text2"><?=$a.$b.$c.$d.$e.$f.$g.$h.$i?></span>
					<span class="blue"><?=$egn_10_num?></span>
				</div>
			</div>
			
			<div class="task_area">	
				<div class="ex">Задача 4</div>
				<div class="faded">Напишете програма, която в зависимост от въведеното число (1-12) определя<br>името на месеца</div>
				
				<div class="result">
			  		<div style="text-align: center;" class="text2"><?=$month_str.' ('.$month_num.')'?></div>
			  	</div>	
			</div>	
		</div>
	</div>
</body>
</html>