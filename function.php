<?php
function triangleArea($l, $r, $angle) {
	$area = ($l * $r * sin ( deg2rad ( $angle ) )) / 2;
	return $area;
}
// echo "<br />";
// echo "Triangle area is equal to ";
// triangleArea(10, 30, 20);
function circleArea($r) {
	$pi = pi ();
	$area = $pi * pow ( $r, 2 );
	return $area;
}
// echo "<br />";
// echo "Circle area is equal to ";
// circleArea(30);
function rectangleArea($a, $b) {
	$area = $a * $b;
	return $area;
}
//echo "<br />";
//echo "Rectangle area is equal to  ";
//rectangleArea ( 7, 15 );
function trapezoidArea($a, $b, $height) {
	$area = ($a + $b) / 2 * $height;
	return $area;
}
// echo "<br />";
// echo "Trapezoid area is equal to ";
// trapezoidArea(6, 5, 10);
function spellCheck() {
	$count = $personal_data ['birthday'];
	$sum = array_sum ( $count );
	$letterArray = array (
			'A',
			'E',
			'I',
			'О',
			'U',
			'Y' 
	);
	$name = $cv ['Name'] [0];
	if (in_array ( $name [0], $letterArray ) && ($sum % 2) == 0) {
		$title = $personal_data ['Job title'] = "Noob PHP";
	} elseif (in_array ( $name [0], $letterArray ) && ($sum % 2) == 1) {
		$title = $personal_data ['Job title'] = 'Intern PHP';
	} elseif (! in_array ( $name [0], $letterArray ) && ($sum % 2) == 1) {
		$title = $personal_data ['Job title'] = "Intern PHP developer";
	} elseif (! in_array ( $name [0], $letterArray ) && ($sum % 2) == 0) {
		$title = $personal_data ['Job title'] = "Junior PHP developer";
	}
	;
	return $title;
}
// Missing switch was added
function CheckTime($value) {
	$time = explode ( ":", $value );
	$result = false;
	switch ($time) {
		case (($time [0] >= 5 && $time [0] <= 10) && ($time [1] >= 0 && $time [1] <= 59)) :
			$result = 'Good morning!<br />';
			break;
		case (($time [0] >= 11 && $time [0] <= 16) && ($time [1] >= 0 && $time [1] <= 59)) :
			$result = 'Good afternoon!';
			break;
		case (($time [0] >= 17 && $time [0] <= 21) && ($time [1] >= 0 && $time [1] <= 59)) :
			$result = 'Good everning!<br />';
			break;
		case (($time [0] >= 1 && $time [0] <= 4) && ($time [1] >= 0 && $time [1] <= 59)) :
			$result = 'Good Night!<br />';
			break;
	}
	return $result;
}
//echo CheckTime ( "14:50" );
//Tried to use OOP here. 
class CountWords {
	public function countWords() {
		$site_content = file_get_contents ( 'http://source-it.com.ua/teachers/' );
		$new_string = strip_tags ( $site_content );
		$pattern = "|Преподаватели Source IT(.+?)Полный перечень наших курсов:|is";
		preg_match ( $pattern, $new_string, $output );
		$outputcount = implode ( " ", $output );
		$result = str_word_count ( $outputcount );
		return $result;
	}
	public function printToTable() {
		$site_content = file_get_contents ( 'http://source-it.com.ua/teachers/' );
		$new_string = strip_tags ( $site_content );
		$pattern = "|Преподаватели Source IT(.+?)Полный перечень наших курсов:|is";
		preg_match ( $pattern, $new_string, $output );
		$replace = preg_replace ( '/\s|\.|\“|\w\:|\:[^\w]|\ \-\ |\d(?!\-)|\«|\»|\,|\)|\(|\'|\}|\&#160;|\”|\&#8220;|\+|\ \&mdash;\ |&#|\;/', ' ', $output );
		$words = explode ( " ", $replace [0] );
		echo "<table>";
		echo '<tr><th>Words</th><th>Count</th></tr>';
		foreach ( (array_count_values ( $words )) as $key => $num ) {
			echo '<tr>';
			echo '<td>' . $key . '</td><td>' . $num . '</td>';
			echo "</tr>";
		}
		echo "</table>";
	}
}