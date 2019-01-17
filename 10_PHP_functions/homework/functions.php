<?php

//task 1
function print_all_array_el($array) {

	for ($i = 0; $i < count($array); $i++) {
		if (is_array($array[$i])) {
			for ($j = 0; $j < count($array[$i]); $j++) {
				if (is_array($array[$i][$j])) {
					for ($k = 0; $k < count($array[$i][$j]); $k++) {
						echo '<p>'.'['.$i.']['.$j.']['.$k.'] = '.$array[$i][$j][$k].'</p>';
					}
				} else {
					echo '<p>'.'['.$i.']['.$j.'] = '.$array[$i][$j];
				}
			}
		} else {
			echo '<p>'.'['.$i.'] = '.$array[$i].'</p>';
		}
	}
}

// task 2
function print_max_num_index($array) {
	$max = $array[0];
	$max_Ind = 0;

	for($i = 1; $i < count($array); $i++) {
		if ($max < $array[$i]) {
			$max = $array[$i];
			$max_Ind = $i;
		}
	}
	echo $max.' ('.$max_Ind.')';
}

// task 3
function print_array($array) {
	$array_str = 'array = [';
	
	for($i = 0; $i < (count($array)-1); $i++) {
		$array_str = $array_str.$array[$i].', ';
	}

	$array_str = $array_str.$array[count($array)-1];
	$array_str = $array_str.'];';

	echo $array_str;
}

function print_num_count_in_array($num, $array) {
	$times = 0;

	for ($i = 0; $i < count($array); $i++) {
		if ($array[$i] == $num) {
			$times++;
		}
	}
	echo 'Числото '.$num.' се повтаря '.$times.' път(и).';
}