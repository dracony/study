<?php
$a=$_GET['a'];
echo "ElseIf<br/>";

/*****************/
if ($a<10){
	if ($a < 5) {
		$b = $a * $a;
	}
	else {
		$b=$a*2;
	}
}
elseif ($a<20) {
	if($a>17){
		$b=$a;
	}
	elseif ($a * 2 > 28) {
		$b=$a/2;
	}
	else{
		$b = $a * 2;
		
	}
}
elseif($a<30){
	$b=$a*3;
}
else 
	$b = "ne dopustume $a";
	
echo ("$b");