<?php
$a=$_GET['a'];
echo "FOR<br/>";

/************************/



for($i=0; $i<$a; $i++){
	if ($i % 2 == 0) {
		echo($i*$i);
		echo(' ');
	}
}

/*

1 X 1 = 1
1 X 2 = 2
1 X 3 = 3
*/