<?php

$x = 50;
$y = 200;
for ($i = $x; $i < $y; $i++) {
	if ($i % 3 == 0 && $i % 7 == 0) {
		echo $i.' // ';
	}
}