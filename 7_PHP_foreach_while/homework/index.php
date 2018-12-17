<!DOCTYPE html>
<html lang="bg">
<head>
	<title>PHP foreach&while - homework</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">Домашното на Мартин Георгиев, 2-ра група</div>
		<div class="main">

			<div class="task_area">
				<div class="task">Задача 1</div>
				<div class="task_text">Създайте масив, чиито елементи имат за ключове имена на държави, а стойностите са съответните столици.
				</div>
				<?php
				$array = [
						'България' => 'София',
						'Франция' => 'Париж',
						'Италия' => 'Рим',
						'Испания' => 'Мадрид',
						'Сърбия' => 'Белград',
						'Турция' => 'Истанбул',
					];
				?>

				<div class="text">По азбучен ред според имената на държавите</div>
				<?php
				ksort($array);
				echo '<table align="center">';
				foreach ($array as $country => $capital) {
					echo '<tr>';
					echo '<td class="blue">'.$country.'</td>';
					echo '<td>'.$capital.'</td>';
					echo '</tr>';
				}
				echo '</table>';
				?>

				<div class="text">По азбучен ред според имената на столиците</div>
				<?php
				asort($array);
				echo '<table align="center">';
				foreach ($array as $country => $capital) {
					echo '<tr>';
					echo '<td>'.$country.'</td>';
					echo '<td class="blue">'.$capital.'</td>';
					echo '</tr>';
				}
				echo '</table>';
				?>
			</div>

			<div class="task_area">
				<div class="task">Задача 2</div>
				<div class="text">Задачата е на лист.</div>
			</div>

			<div class="task_area">
				<div class="task">Задача 3</div>
				<div class="task_text">Напишете програма, която пресмята n!*k!/(n-k)! за дадени n и k. Използвайте форма за въвеждане на числата n и k.</div>

				<form action="index.php" method="post" align="center">
					<input type="number" name="n" placeholder="n" min="0" max="1000">
					<input type="number" name="k" placeholder="k">
					<input type="submit" class="submit" name="calc" value="Изчисли">
				</form>

				<?php
				if (isset($_POST['calc'])) {

					$n = $_POST['n'];
					$k = $_POST['k'];

					if (!empty($n) && !empty($k)) {
						$nk = $n - $k;

						echo '<div style="margin-bottom: 0.5%; margin-top: 0;" class="text">'.'n = '.$n.', k = '.$k.'</div>';

						$n_fact = 1;
						$k_fact = 1;
						$nk_fact = 1;

						while ($n > 0) {
							$n_fact *= $n;
  							$n -= 1;
						}
						while ($k > 0) {
							$k_fact *= $k;
  							$k -= 1;
						}
						while ($nk > 0) {
							$nk_fact *= $nk;
  							$nk -= 1;
						}
						$result = ($n_fact * $k_fact) / $nk_fact;

						echo '<div style="margin-top: 0;" class="text">'.'n! = '.$n_fact.', k! = '.$k_fact.'</div>';

						echo '<div style="font-size: 1.7vw; font-weight: bold; margin-bottom: 4%; margin-top: 4%;" class="blue">'.'Отг: '.$result.'</div>';
					} else {
						echo '<div class="error">'.'Моля попълнете всички полета!'.'</div>';
					}
					
				}
				?>
			</div>

			<div class="task_area">
				<div class="task">Задача 4</div>
				<div class="task_text">Да се напише програма, която отпечатва следната последователност от  букви: a, aa, aaa, ... (n пъти)</div>

				<form action="index.php" method="post">
					<input style="margin-top: 1%;" type="number" name="n2" placeholder="n">
					<input type="submit" class="submit" name="submit" value="Изпиши"> 
				</form>
				<div class="error">Задачата не е довършена, остава php кода, който не мога да измисля.</div>
			</div>

		</div>
	</div>
</body>
</html>