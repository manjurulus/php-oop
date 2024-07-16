<?php 
$marks = 65;
$subject = "English I";

$grade = null;

if($marks >= 0 && $marks <= 35){
	$grade = "F";
}elseif($marks >= 36 && $marks <= 40){
	$grade = "E";
}elseif($marks >= 41 && $marks <= 50){
	$grade = "D";
}elseif($marks >= 51 && $marks <= 60){
	$grade = "C";
}elseif($marks >= 61 && $marks <= 70){
	$grade = "B";
}elseif($marks >= 71 && $marks <= 80){
	$grade = "A";
}elseif($marks >= 81 && $marks <= 100){
	$grade = "A+";
}

switch($grade){
	case "A+":
		$creditPoint = "5.5";
		break;
	case "A":
		$creditPoint = "5";
		break;
	case "B":
		$creditPoint = "4";
		break;
	case "C":
		$creditPoint = "3";
		break;
	case "D":
		$creditPoint = "2";
		break;
	case "E":
		$creditPoint = "1";
		break;
	case "F":
		$creditPoint = "0";
		break;
}

if($creditPoint !== "Invalid Grade"){
	echo "<p><b>Subjuect:</b> $subject <b>Marks:</b> $marks <b>Grade:</b> $grade <b>Credits:</b> $creditPoint</p>";
}else{
	echo "<p>Invalid marks entered.</p>";
}
?>