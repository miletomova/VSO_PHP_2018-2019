<?php

$angle1 = 45;
$angle2 = 35;
$angle3 = 70;

echo $angle1.', '.$angle2.', ' .$angle3;

$result = $angle1 + $angle2 + $angle3;

if ($result == 180) {
	echo '<p>'.'Такъв 3-ник може да се построи'.'</p>';
} else {
	echo '<p>'.'Такъв 3-ник НЕ може да се построи'.'</p>';
}