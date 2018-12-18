<?php

// formula - ax2 + bx + c

$a = 1;
$b = 4;
$c = 4;

$d = $b*$b - 4*$a*$c;

if ($d < 0) {
	echo 'Няма реални корени';
} else if ($d == 0) {
	echo 'x = '.(-($b/(2*$a)));
} else {
	echo 'x1 = '.(-$b + sqrt($d)) / 2*$a;
	echo ' или x2 = '.(-$b - sqrt($d)) / 2*$a;
}