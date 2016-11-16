<?php
$numbers = [8,23,56,9,4,-5,12];
echo 'Count: ' . count($numbers) . '<br>';
echo 'Max: ' . max($numbers) . '<br>';
echo 'Min: ' . min($numbers) . '<br>';

// sort() and rsort() are a desctructive. It modifies the array.

$boolean_return_sort = sort($numbers); // returns true and on screen we see 1
echo "\$boolean_return_sort: {$boolean_return_sort} <br>";
echo 'Numbers array after applying sort: ';
var_dump($numbers);

$boolean_return_rsort = rsort($numbers);
echo "\$boolean_return_rsort: {$boolean_return_rsort} <br>";
echo 'Numbers array after applying reverse sort: ';
var_dump($numbers);

$names = ['Yovan', 'John', 'Doe', 'Paul', 'Anna', 'Zarine'];
rsort($names);
var_dump($names);

// To concert an array to a string.
echo implode($numbers) . '<br>';
echo implode($names) . '<br>';
echo implode(' | ', $names) . '<br>';

$string_numbers = '1 * 2 * 7 * 5 * 6 * 9 * 3 * 12';
var_dump(explode(' * ', $string_numbers));
$fields = 'id, first_name, last_name, title, gender, dob, employee_number';
$fields_array = explode(', ', $fields);
var_dump($fields_array);

echo "Is 15 in \$numbers: " . in_array(15, $numbers) . '<br>';
echo "Is 9 in \$numbers: " . in_array(9, $numbers) . '<br>';
echo "Is title in \$fields_array: " . in_array('title', $fields_array) . '<br>';

// There exists many methods applicable to arrays:
// array_slice, array_push, array_keys...

$employees = [
	'first_name' => 'Yovan', 
	'last_name' => 'Juggoo',
	'skills' => ['Java', 'Android', 'Node Js', 'PHP']
];

var_dump(array_keys($employees));


