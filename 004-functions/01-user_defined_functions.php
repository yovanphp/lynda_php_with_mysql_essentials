<?php 

/*
If we do not provide default values to our arguments, we must always provide the right number of arguments, or else PHP will raise a notice.

We can use arrays to return multiple values from functions.
Using the indexes of the result array to get the individual return values is clunky and not descriptive.
A better way is to use list(args...) to assign variables to the array elements.
list(arg1, arg2, ...) is efficient to unpack an array to variables for readability and descriptivity.

A variable defined in a function is accessible only in the local scope. 
Before assigning a value to local variables, they are not set.

To make global variable accessible inside of functions we must declare them as global.
We should not use globals inside functions as we are really changing the value of the global variable.

By setting default values for the arguments of our funtions we can ommit passing these arguments while running our functions.

Important:
The order matters so the required arguments must always be put first in the argument list and the optional ones last.
*/
function say_hello($greeting, $to, $punctuation) {
	return "{$greeting} {$to} {$punctuation} <br>";
}

echo strtoupper(say_hello('Good morning', 'Yovan', '!'));
echo say_hello('Good morning', 'Yovan', null);

function add_subtract($arg1, $arg2) {
	$result = [];
	$result [] = $arg1 + $arg2;
	$result [] = $arg1 - $arg2;
	return $result;
}

$int1 = 2;
$int2 = 3;
$result = add_subtract($int1, $int2);
echo "The result of the addition and subtraction of {$int1} and {$int2} is {$result[0]} and {$result[1]} <br>";  

list($add_result, $subt_result) = add_subtract(2, 3);
echo "The result of the addition and subtraction of {$int1} and {$int2} is {$add_result} and {$subt_result} <br>"; 

$my_variable = 'Global';

function test() {
	$my_variable = 'Local';
}

echo "My global variable: {$my_variable} <br>";
test();
echo "My global variable after running test(): {$my_variable} <br>";

function test2() {
	if(isset($my_variable)) echo 'The variable is set. <br>';
	else echo 'The variable is not set, so it is local to the function only. <br>';
	$my_variable = 'Local';
}

test2();

function test3() {
	global $my_variable;
	$my_variable = 'Locally changed';
}

test3();

echo "The value of my variable after running test3(): {$my_variable}. <br>";


function paint($color='red') {
	return "The color of the room is: {$color}. <br>";
}

echo paint('blue');
echo paint();


function paint2 ($room='office', $color='red') {
	return "The color of the {$room} is {$color}. <br>";
}

echo paint2();
echo paint2('kitchen', 'white');
echo paint2('bedroom', null);
echo paint2('garage');
