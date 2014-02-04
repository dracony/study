<?php 
$bal = $_GET['a'];

if($bal<51)
	echo("ne zdav");

if(($bal >=51) && ($bal < 61))
	echo("zdav na 2.6");
	
if(($bal >=61) && ($bal<71))
	echo("zdav na 3");

if(($bal>=71) && ($bal<81))
	echo("zdav na 4");
	
if(($bal>=81) && ($bal<=99))
	echo("zdav na 5");
	
if($bal==100)
	echo("zdav na vsi 100");
