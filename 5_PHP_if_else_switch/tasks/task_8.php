<?php

$num1 = 36;
$num2 = 3;
$num3 = 18;

if ($num1 <= $num2 && $num1 <= $num3) {
	if ($num2 < $num3) {
		echo $num1.', '.$num2.', '.$num3;
	} else {
		echo $num1.', '.$num3.', '.$num2;
	}
} else if ($num2 <= $num1 && $num2 <= $num3) {
	if ($num1 < $num3) {
		echo $num2.', '.$num1.', '.$num3;
	} else {
		echo $num2.', '.$num3.', '.$num1;
	}
} else if ($num3 <= $num1 && $num3 <= $num2) {
	if ($num1 < $num2) {
		echo $num3.', '.$num1.', '.$num2;
	} else {
		echo $num3.', '.$num2.', '.$num1;
	}
}