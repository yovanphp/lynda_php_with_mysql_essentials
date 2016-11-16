<?php 
/*
When PHP converts a variable implicitly to another type we call this process type juggling. Examples:
- When an integer is concatenated to a string it is converted to a string
- When a number is added to a string number (3 + '2.5' gives 7.5), the output is numric
- When PHP prints a boolean value it converts it to a string: 1 or empty

When we convert a variable explicitly to another type, the process is called type casting. This can be done in 2 ways:
- settype($var, "integer"); //settype changes the type in place. i.e The type is changed for the input variable.
- (integer) $var; // This type of casting does not change the type of the input variable, but returns a value who's type is the one used in ().

The types that can be used for casting
string, int, integer, float, array, bool, boolean
 */

echo '<h1>Type juggling</h1>';
$count = "2";
echo "is \$count a string: " . is_string($count) . '<br>';
echo "is \$count an integer: " . is_integer($count) . '<br>';
echo "is \$count numeric: " . is_numeric($count) . '<br>';

echo '<strong>A better way: </strong> <br> <br> Type of count: ' . gettype($count) . '<br>';
echo 'Type juggling: Conversion on adding number to string: ' . gettype($count  + 2.5) . '<br>';

echo '<strong>Important: </strong> Adding a numeric value to a string gives a numeric value.<br>';
$var_1 = "2 cats and a dog";
echo '2 cats and a dog  + 1: ' . gettype($var_1 + 5) . '<br>';

echo 'This is an example of type juggling numeric to a string: ' .  gettype(1 . ' - type juggling numeric to a string') . '<br>';

echo '<mark>We should not rely on PHP to do type juggling for us. We should explicitly check our variables before doing operations over them.</mark> <br>';

echo '<h1>Type casting</h1>';

$count = '3';
settype($count, 'double');
echo 'Value after changing type: ' . $count . '<br>';
echo 'After type casting - in-place casting: ' . gettype($count) . '<br>';

$var_1 = 3;
$var_2 = 3;
settype($var_1, 'string');
(string) $var_2;

echo "Type of \$var_1 after casting: " . gettype($var_1) . '<br>';
echo "Type of \$var_2 after casting: " . gettype($var_2) . '<br>';



