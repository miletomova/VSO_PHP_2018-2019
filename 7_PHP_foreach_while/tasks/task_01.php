<?php

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
	echo $i.' // ';
	$sum += $i;
}

echo '<p>'.'The sum of the numbers is '.$sum.'</p>';