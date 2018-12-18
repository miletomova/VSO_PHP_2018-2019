<?php

$num = rand(1, 1000);
echo $num;

if (($num % 2) == 0) {
	echo ' - четно';
} else {
	echo ' - нечетно';
}
