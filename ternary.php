<?php
$a = $_GET['a'];
echo "TERNARY<br/>";

/************************/

if($a>10){
	$b = 9;
}else{
	$b = 8;
}

($a > 10) ? 9 : 8;
///
if($a > 10) {
	if($a > 20) {
		$b = 9;
	}else {
		$b = 15;
	}
}else {
	if($a<8) {
		$b = 8;
	}else {
		$b = 12;
	}
}
$b=($a>10) ? (($a>20)?9:15) : (($a<8)?8:12);


