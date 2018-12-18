<?php

$weight = 80;
$exercise = 'заседнал';
$exercise_num = 0;
if ($exercise == 'заседнал') {
	$exercise_num = 13;
}
if ($exercise_num == 'активен') {
	$exercise_num = 15;
}

$calories = $weight*$exercise_num*10;
echo $weight.' kg, '.$exercise.'<p>'.$calories.' калории'.'</p>';