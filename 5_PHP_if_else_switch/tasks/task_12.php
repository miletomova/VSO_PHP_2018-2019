<?php

$used = 302;

echo $used;

$f_50 = 0.10;
$f_100 = 0.15;
$s_100 = 0.25;
$next = 0.35;

$all_50 = 50 * $f_50;
$all_100 = 100 * $f_100;
$all_s100 = 100 * $s_100;

$price;
$all_price;

if ($used <= 50) {
	$price = $used * $f_50;
	$all_price = $price + 0.2 * $price;
	echo '<p>'.$all_price.' лв.'.'</p>';
} else if ($used > 50 && $used <= 150) {
	$price = $all_50 + ($used - 50) * $f_100;
	$all_price = $price + 0.2 * $price;
	echo '<p>'.$all_price.' лв.'.'</p>';
} else if ($used > 150 && $used <= 250) {
	$price = $all_50 + $all_100 + ($used - 150) * $s_100;
	$all_price = $price + 0.2 * $price;
	echo '<p>'.$all_price.' лв.'.'</p>';
} else if ($used > 250) {
	$price = $all_50 + $all_100 + $all_s100 + ($used - 250) * $next;
	$all_price = $price + 0.2 * $price;
	echo '<p>'.$all_price.' лв.'.'</p>';
}
