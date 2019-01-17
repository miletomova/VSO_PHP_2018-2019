<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>M_Market</title>
</head>
<body>
	<form action="market.php" method="post" align="center">
		<div>
			<label>Name:</label>
			<input type="text" name="name">
		</div>
		<div>	
			<label>Money</label>
			<input type="number" name="money">
		</div>	
		<input type="submit" name="enter" value="Enter">
	</form>
	<?php
	if (isset($_POST['enter'])) {
		$name = $_POST['name'];
		$money = $_POST['money'];
		if (!empty($name) && !empty($money)) {
			$_SESSION['name'] = $name;
			$_SESSION['money'] = $money;
		}
	}
	?>
</body>
</html>