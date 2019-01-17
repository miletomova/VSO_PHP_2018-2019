<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>M_Market</title>
</head>
<body>
	<form action="result.php" method="post">
		<div>
			<label>Tea - 0.80</label>
			<input type="checkbox" name="chkTea">
		</div>
		<div>
			<label>Coca-cola - 1.20</label>
			<input type="checkbox" name="chkCola">
		</div>
		<div>	
			<label>Fruit juice - 1.00</label>
			<input type="checkbox" name="chkJuice">
		</div>
		<div>
			<label>Hot chocolate - 1.30</label>
			<input type="checkbox" name="chkChoko">
		</div>
		<div>
			<label>Water 0.60</label>
			<input type="checkbox" name="chkWater">
		</div>
		<input type="submit" name="cart" value="Cart">
	</form>
	<?php
	$sum = 0;

	if (!empty($_POST['chkTea'])) {
		$sum += 0.80;
	}
	if (!empty($_POST['chkCola'])) {
		$sum += 1.20;
	}
	if (!empty($_POST['chkJuice'])) {
		$sum += 1.00;
	}
	if (!empty($_POST['chkChoko'])) {
		$sum += 1.30;
	}
	if (!empty($_POST['chkWater'])) {
		$sum += 0.60;
	}

	$_SESSION['total'] = $sum;
	?>
</body>
</html>