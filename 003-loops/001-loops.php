<?php
$ages = [10, 64, 23, 8, 26];

foreach($ages as $age => $value) :
	echo $value;
	if($age != (count($ages) - 1)) :
		echo ', ';
	endif;
endforeach;

$person = [
	'first_name' => 'Yovan',
	'last_name' => 'Juggoo',
	'street' => 'Avenue Nulle Part Ailleurs',
	'city' => 'JeanVille',
	'zip_code' => '12345',
	'country' => 'Mauritius'
];

foreach($person as $field => $value) {
	echo ucfirst(str_replace('_', ' ', $field)) . ': ' . $value . '<br>';
}

for ($i = 0; $i < 10; $i++) {
	for ($k = 0; $k < 10; $k++) {
		if($k == 3)
		  break(2); //We will break from the inner and outside loop. So goes for continue(2)
		echo $i . ' - ' . $k . '<br>';
	}
}