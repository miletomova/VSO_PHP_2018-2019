<?php

$age = 23;

echo $age.' год. - ';

if ($age < 18) {
	echo 'Отивай да учиш!, :)';
} else if ($age == 18) {
	echo 'Време е да си намериш работа!';
} else if ($age > 18 && $age <= 63) {
	echo 'Отивай на работа!, парите не падат от дърветата, :)';
} else if ($age > 63) {
	'Отивай да си вземеш пенсията!';
}