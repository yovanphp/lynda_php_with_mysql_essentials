<?php

$a = 23;
$b = 23;
if($a > $b) echo 'a > b <br>';
elseif ($a < $b) echo 'a < b <br>';
else echo 'a == b <br>';

if($a > $b) :
	echo 'a > b';
elseif($a < $b) :
	echo 'a < b';
else : echo 'a == b <br>';
endif;

$var_1 = '24';
$var_2 = 24;

echo 'var_1 == var_2: ' . ($var_1 == $var_2) . '<br>';
echo 'var_1 === var_2: ' . ($var_1 === $var_2) . '<br>'; //Identical true if they are of the same value and same type.
echo 'var_1 !== var_2: ' . ($var_1 !== $var_2) . '<br>';


$quantity = '10';
echo 'Is numeric: ' . is_numeric($quantity); //numeric strings are numeric
if(isset($quantity) && is_numeric($quantity)) {
	if(empty($quantity))
		echo 'You must enter a number different that 0';
	else echo 'The number of items bought: ' . $quantity;
} else
	echo 'You must provide a numeric value different that 0';
