<?php 
/*
When PHP converts a variable implicitly to another type we call this process type juggling. Examples:
- When an integer is concatenated to a string it is converted to a string
- When PHP prints a boolean value it converts it to a string: 1 or empty

When we convert a variable explicitly to another type, the process is called type casting. This can be done in 2 ways:
- settype($var, "integer");
- (integer) $var;

The types that can be used for casting
string, int, integer, float, array, bool, boolean
 */

echo '<h1>Type juggling</h1>'