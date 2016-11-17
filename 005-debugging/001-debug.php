<?php 
$number = 99;
$string = 'Bug?';
$array = [
	1 => "Homepage",
	2 => "About us",
	3 => "Services"
];

var_dump($number);
var_dump($string);
var_dump($array);

$defined_vars = get_defined_vars();
//var_dump($defined_vars);

var_dump(debug_backtrace()); //shows an array with size=0. This is because debug_backtrace() returns an array which gives us the report of any functions call we did. But as above we did not call any functions, the array is empty. Traces function calls inside of functions call.

function say_hello($word) {
	$return_val =  "Hello {$word}";
	var_dump(debug_backtrace());
	return $return_val;
}

echo say_hello('Yovan Juggoo');

/*
	PHP does not have an internal debugger. 
	Xdebug, DBG and FirePHP are 3rd party debugger to learn.

	Debugger code should be removed after debugging is done so that they do not show up in production.
 */