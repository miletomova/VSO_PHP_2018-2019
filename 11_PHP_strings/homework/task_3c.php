<!DOCTYPE html>
<html lang="en">
<head>
	<title>task_3c</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Set how many words from the text to print</h3>
	<form action="" method="post">
		<input type="number" name="num">
		<input type="submit" name="print" value="Print">
	</form>
	<?php
	$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";

	$array = explode(' ', $text);

	if (isset($_POST['print'])) {
		$num = $_POST['num'];
		if (!empty($num)) {
			echo '<p>'.$num.'</p>';
			for ($i = 0; $i < $num; $i++) {
				echo $array[$i].' ';
			}
		}
	}
	?>
</body>
</html>