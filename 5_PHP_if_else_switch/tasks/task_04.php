<?php

$num1 = 12;
$num2 = 7;

$result = $num1 + $num2;
echo $num1.' + '.$num2.' = '.$result;

if ($result > 0) {
	echo '_Сборът на числата е положителен';
} else if ($result < 0) {
	echo '_Сборът на числата е отрицателен';
} else {
	echo '_Сборът на числата е 0';
}