<?php
$a=$_GET['a'];
echo "SWITCH<br/>";

/************************/

if($a == 'kurka') {
	$type = 'bird';
	$edible = true;
}elseif($a == 'murzyk') {
	$type = 'cat';
	$edible = false;
}elseif($a == 'bobik' || $a == 'tuzik') {
	if ($a == 'tuzik') {
		echo 'tuzik';
	}
	$type = 'dog';
	$edible = false;
}else{
	$type = 'nevidomo';
}

switch($a) {
	case 'kurka':
		$type = 'bird';
		$edible = true;
		break;
	case 'murzyk':
		$type = 'cat';
		$edible = false;
		break;
	case 'tuzik':
		echo 'tuzik';
	case 'bobik':
		$type = 'dog';
		$edible = false;
		break;
	default:
		$type = 'nevidomo';
}


if($a == 'vdoma') {
	echo 'vyjty nadvir';
	echo 'pity v magazyn';
	echo 'kupyty';
}

if($a == 'nadvori') {
	echo 'pity v magazyn';
	echo 'kupyty';
}

if($a == 'magazyn') {
	echo 'kupyty';
}

switch($a){
	case 'vdoma':
		echo('vyjty');
	case 'nadvori':
		echo('pity');
	case 'magazyn':
		echo('kupyty');
		break;
	default:
		echo('ja hz de');
}
