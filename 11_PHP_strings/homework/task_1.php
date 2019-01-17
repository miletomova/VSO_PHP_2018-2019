<!DOCTYPE html>
<html lang="bg">
<head>
	<title>PHP работа със стрингове - домашно</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Програма, която проверява дали даден стринг съдържа конкретен стринг (форма)</h3>
	<form action="#" method="post">
		<input type="text" name="str">
		<input type="submit" name="check" value="Провери">
	</form>
	<?php
	$full_str = 'The quick brown fox jumps over the lazy dog.';
	if (isset($_POST['check'])) {
		$str = $_POST['str'];
		if (!empty($str)) {
			if (strpos($full_str, $str) == 0) {
				echo 'Не присъства!';
			} else {
				echo 'Този стринг присъства в главния стринг!';
			}
		} else {
			echo 'Празно поле!';
		}
	}
	?>
</body>
</html>