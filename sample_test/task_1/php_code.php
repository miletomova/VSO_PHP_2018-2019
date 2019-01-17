<?php
if (isset($_POST['calc'])) {
	$cost = $_POST['cost'];
	$condition = $_POST['conditionals'];

	if (!empty($_POST)) {
		if ($condition == 'Снежна покривка') {
			$cost += 5/100*$cost;
		}
		if ($condition == 'Улично задръстване') {
			$cost += 50/100*$cost;
		}
		if ($condition == 'Екстремни пътища') {
			$cost += 20/100*$cost;
		}
		if ($condition == 'Магистрала') {
			$cost -= 10/100*$cost;
		}

		echo '<p>'.$cost.'</p>';
	}
}