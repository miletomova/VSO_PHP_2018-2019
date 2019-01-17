<!DOCTYPE html>
<html lang="en">
<head>
	<title>task_3d</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>What is your name?</h3>
	<form action="" method="post">
		<input type="text" name="str">
		<input type="submit" name="repl" value="Replace">
	</form>

	<?php
	$text = 'Nice to meet you, %name%.';
	if (isset($_POST['repl'])) {
		$str = $_POST['str'];
		if (!empty($str)) {
			echo '<p>'.str_replace('%name%', $str, $text).'</p>';
		}
	}
	?>
</body>
</html>