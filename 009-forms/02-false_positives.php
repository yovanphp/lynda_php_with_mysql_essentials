<?php  
function is_equal($val1, $val2) {
	$output = "{$val1} == {$val2}: ";
	$output .= $val1  == $val2 ? "true <br>" : "false <br>";
	return $output;
}

function is_exact($val1, $val2) {
	return "{$val1} === {$val2}: " . ($val1 === $val2 ?  "true <br>" : "false <br>");
}

function is_children_no_valid($value) {
	return isset($value) && is_numeric($value);
}

echo is_equal(0, false);
echo is_equal(4, true);
echo is_equal(0, null);
echo is_equal(0, '0');
echo is_equal(0, '');
echo is_equal(0, 'dbc'); // Any string beginning with a letter
echo is_equal('1', '01');
echo is_equal('', null);
echo is_equal(3, '3 dogs');
echo is_equal(100, "1e2");
echo is_equal(100, 100.0);
echo is_equal('abc', true);
echo is_equal('123', '   123');
echo is_equal('123', '+0123');

echo '<br><br>';
echo is_exact(0, false);
echo is_exact(4, true);
echo is_exact(0, null);
echo is_exact(0, '0');
echo is_exact(0, '');
echo is_exact(0, 'dbc'); // Any string beginning with a letter
echo is_exact('1', '01');
echo is_exact('', null);
echo is_exact(3, '3 dogs');
echo is_exact(100, "1e2");
echo is_exact(100, 100.0);
echo is_exact('abc', true);
echo is_exact('123', '   123');
echo is_exact('123', '+0123');

$num_children = '0';
echo 'Is number of children valid: ' . is_children_no_valid($num_children);

?>