<?php
function sum($a, $b) {
	$c = $a + $b;
	return $c;
}

function multiply($a, $b) {
	return $a*$b;
}

function sum_and_multiply($a, $b) {
	return multiply(sum($a, $b), $b);
}

sum_and_multiply(3,4);