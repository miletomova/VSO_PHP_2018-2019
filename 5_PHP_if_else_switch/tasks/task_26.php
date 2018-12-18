<?php

$date = new DateTime("now", new DateTimeZone('Europe/Sofia'));
$time = $date->format('H');

if ($time > 6 && $time <= 9) {
	echo 'Добро утро!';
}

if ($time > 9 && $time <= 17) {
	echo 'Добър ден!';
}

if ($time > 17) {
	echo 'Добър вечер!';
}