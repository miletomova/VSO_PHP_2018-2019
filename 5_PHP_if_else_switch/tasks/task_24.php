<?php

$day = 'Tuesday';

switch ($day) {
	case 'Monday' || 'Tuesday' || 'Wednesday' || 'Thursday' || 'Friday':
		echo 'Работен ден!';
		break;
	case 'Saturday' || 'Sunday':
		echo 'Повичен ден!';
		break;
}