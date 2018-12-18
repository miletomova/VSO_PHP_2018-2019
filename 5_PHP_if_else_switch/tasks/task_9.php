<?php

$num = 105;

if ($num % 3 == 0) {
	echo 'Числото се дели на 3';
	if ($num % 5 == 0) {
		echo ', 5';
	}
	if ($num % 7 == 0) {
		echo ' и 7';
	}
} else if ($num % 5 == 0) {
	echo 'Числото се дели на 5';
	if ($num % 3 == 0) {
		echo ', 3';
	}
	if ($num % 7 == 0) {
		echo ' и 7';
	}
} else if ($num % 7 == 0) {
	echo 'Числото се дели на 7';
	if ($num % 3 == 0) {
		echo ', 3';
	}
	if ($num % 5 == 0) {
		echo ' и 5';
	}
} else {
	echo 'Числото не се дели нито на 3, нито на 5, нито на 7';
}


