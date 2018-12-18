<?php

// point coordinates
$x = -1.5;
$y = -1.5;

// coordinates of p. O and radius of circle
$circle_x = 0;
$circle_y = 0;
$radius = 2;

if (($x - $circle_x) * ($x - $circle_x) + ($y - $circle_y) * ($y - $circle_y) <= $radius * $radius) {
	echo 'The point is in the circle!';
} else {
	echo 'The point is NOT in the circle!';
}