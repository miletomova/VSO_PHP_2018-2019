<?php

// task 8
$num_1 = $_POST['num1'];
$num_2 = $_POST['num2'];
$num_3 = $_POST['num3'];

$num_res1;
$num_res2;
$num_res3;
$num_result;

if (!empty($num_1) && !empty($num_2) && !empty($num_3)) {
	if ($num_1 <= $num_2 && $num_1 <= $num_3) {
	$num_res1 = $num_1;
		if ($num_2 < $num_3) {
			$num_res2 = $num_2;
			$num_res3 = $num_3;
		} else {
			$num_res2 = $num_3;
			$num_res3 = $num_2;
		}
	} else if ($num_2 <= $num_1 && $num_2 <= $num_3) {
		$num_res1 = $num_2;
		if ($num_1 < $num_3) {
			$num_res2 = $num_1;
			$num_res3 = $num_3;
		} else {
			$num_res2 = $num_3;
			$num_res3 = $num_1;
		}
	} else if ($num_3 <= $num_1 && $num_3 <= $num_2) {
		$num_res1 = $num_3;
		if ($num_1 < $num_2) {
			$num_res2 = $num_1;
			$num_res3 = $num_2;
		} else {
			$num_res2 = $num_2;
			$num_res3 = $num_1;
		}
	}
	$num_result = $num_res1.', '.$num_res2.', '.$num_res3;
} else {
	$num_result = "-";
}


// task 13
$a = $_POST['side_a'];
$b = $_POST['side_b'];
$c = $_POST['side_c'];

$str_res = "";
$x_res = "";
$x2_res = "";

$d = pow($b,2) - 4*$a*$c;

if ($d < 0) {
	$str_res = 'Няма реални корени';
	$x_res = '';
	$x2_res = '';
} if ($d = 0) {
	$str_res = 'Двоен корен';
	$x_res = (-$b / 2*$a);
	$x2_res = "";
} if ($d > 0) {
	// $str_res = "У-ето има 2 корена"
	// $x_res = ((-$b + sqrt($d)) / (2*$a));
	// $x2_res = ((-$b - sqrt($d)) / (2*$a));
}

// task 21
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$result_date = "";

if (!empty($day)) {

if ($month = 1) {
	if ($day > 0 && $day <= 31) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 2) {
	if ($day > 0 && $day <= 28) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 3) {
	if ($day > 0 && $day <= 31) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 4) {
	if ($day > 0 && $day <= 30) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 5) {
	if ($day > 0 && $day <= 31) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 6) {
	if ($day > 0 && $day <= 30) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 7) {
	if ($day > 0 && $day <= 31) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 8) {
	if ($day > 0 && $day <= 31) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 9) {
	if ($day > 0 && $day <= 30) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 10) {
	if ($day > 0 && $day <= 31) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 11) {
	if ($day > 0 && $day <= 30) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}
if ($month = 12) {
	if ($day > 0 && $day <= 31) {
		$result_date = "1";
	} else {
		$result_date = "Такава дата не съществува!";
	}
}

if ($result_date == "1")
	$result_date = "Тази дата съществува";
}


?>
<!DOCTYPE html>
<html lang="bg">
<head>
	<title>PHP forms - homework</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="wrapper">
		<div class="header">Домашното на Мартин Георгиев (8 зад. работи; 13 не знам защо, но не работи, а 21 зад... не съм я довършил)</div>
		<div class="main">
			<div style="margin-top: 4.5%;" class="task_area">
				<div class="ex">Задача 8</div>
				<div class="faded">Да се напише програма, която подрежда 3 числа в нарастващ ред.</div>

				<form class="center_form" action="index.php" method="post">
					<input type="number" class="parameter" name="num1" min="-1000000" max="1000000" placeholder="число">
					<input type="number" class="parameter" name="num2" min="-1000000" max="1000000" placeholder="число">
					<input type="number" class="parameter" name="num3" min="-1000000" max="1000000" placeholder="число">

					<input type="submit" class="submit" name="submit" value="Сортирай">
				</form>
				<div class="result">
					<div class="white"><?=$num_result?></div>
				</div>
			</div>

			<div class="task_area">
				<div class="ex">Задача 13</div>
				<div class="faded">Напишете програма, която определя и отпечатва корените на квадратно уравнение.</div>

				<form class="center_form" action="index.php" method="post">
					<div class="block">
						<div class="text">Избери типа на уравнението</div>
						<select style="margin-bottom: 2%; margin-top: 2%;">
							<option>a&#178; - b&#178; = 0</option>
							<option>ax&#178; &#177; bx &#177; c = 0</option>
						</select>
					</div>
						<input type="number" class="parameter" name="side_a" min="-100" max="100" placeholder="a">
						<input type="number" class="parameter" name="side_b" min="-100" max="100" placeholder="b">
						<input type="number" class="parameter" name="side_c" min="-100" max="100" placeholder="c">

						<input type="submit" class="submit" name="submit" value="Провери">
					<div class="result">
						<div style="font-size: 1.5vw;" class="white"><?=$str_res?></div>
					</div>
				</form>
			</div>
			<div class="task_area">
				<div class="ex">Задача 21</div>
				<div class="faded">Напишете програма, която проверява дали зададена комбинация от ден, месец, година е валидна дата.</div>

				<form class="center_form">
					<input style="width: 50px;" class="parameter" type="number" name="day" placeholder="day" min="1" max="31">
					<input style="width: 60px;" class="parameter" type="number" name="month" placeholder="month" min="1" max="12">
					<input style="width: 60px;" class="parameter" type="number" name="year" placeholder="year">

					<input type="submit" class="submit" name="submit" value="Провери">
				</form>
				<div class="result">
					<div class="white"><?=$result_date?></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>