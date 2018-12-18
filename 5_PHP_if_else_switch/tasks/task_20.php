<?php

$year = 2018;
$str = '';

if ($year % 4 == 0) {
	$str = 'е високосна';
} else {
	$str = 'НЕ е високосна';
}

if ($year % 100 == 0) {
	$str= 'НЕ е високосна';
}

echo $year.' г. '.$str;