<?php

$a = 9;
$b = 9;
$c = 1;
$d = 0;
$e = 2;
$f = 4;
$g = 1;
$h = 6;
$i = 0;

$egn_10_num = ($a*2 + $b*4 + $c*8 + $d*5 + $e*10 + $f*9 + $g*7 + $h*3 + $i*6) % 11;

echo $a.$b.$c.$d.$e.$f.$g.$h.$i.' + '.$egn_10_num;