<?php

$a = 10;
$b = 55;
$c = 40;

echo $a.', '.$b.', '.$c.' cm';

if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
	echo '<p>'.'Такъв 3-ник може да се построи'.'</p>';
} else {
	echo '<p>'.'Такъв 3-ник НЕ може да се построи'.'</p>';
}