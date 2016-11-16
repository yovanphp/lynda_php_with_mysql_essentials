<?php
$var_1 = null;
$var_2 = "";
$var_3; // undefined
$var_4 = 0;

echo "\$var_1 null?: " . is_null($var_1) . '<br>';
echo "\$var_2 null?: " . is_null($var_2) . '<br>'; // $var_2 is not null. It is the empty string. 
echo "\$var_3 null?: " . is_null($var_3) . '<br> <br>'; //Here we get a notice that we are tryin to access an undefined variable. But $var_3 is shown as true for is_null().

echo "\$var_1 isset?: " . isset($var_1) . '<br>';
echo "\$var_2 isset?: " . isset($var_2) . '<br>';
echo "\$var_3 isset?: " . isset($var_3) . '<br> <br>';

// In PHP some constants are empty: "", null, 0, 0.0, "0", false and array()
echo "\$var_1 empty?: " . empty($var_1) . '<br>';
echo "\$var_2 empty?: " . empty($var_2) . '<br>';
echo "\$var_3 empty?: " . empty($var_3) . '<br>';
echo "\$var_4 empty?: " . empty($var_4) . '<br> <br>';

echo 'We must take great caution while using is_null() and empty() functions in web forms. For example 0 and 0.0 will be empty.';



