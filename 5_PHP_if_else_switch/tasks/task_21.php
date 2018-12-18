<?php

$day = 30;
$month = 'February';

if ($month == 'January' && $day <= 31) {
	echo 'Valid date!';
} else if ($month == 'February' && $day <= 28) {
	echo 'Valid date';
} else if ($month == 'March' && $day <= 31) {
	echo 'Valid date';
} else if ($month == 'April' && $day <= 30) {
	echo 'Valid date';
} else if ($month == 'May' && $day <= 31) {
	echo 'Valid date';
} else if ($month == 'June' && $day <= 30) {
	echo 'Valid date';
} else if ($month == 'July' && $day <= 31) {
	echo 'Valid date';
} else if ($month == 'August' && $day <= 31) {
	echo 'Valid date';
} else if ($month == 'September' && $day <= 30) {
	echo 'Valid date';
} else if ($month == 'Octomber' && $day <= 31) {
	echo 'Valid date';
} else if ($month == 'November' && $day <= 30) {
	echo 'Valid date';
} else if ($month == 'December' && $day <= 31) {
	echo 'Valid date';
} else {
	echo 'Invalid date!';
}