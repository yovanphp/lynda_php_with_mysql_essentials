<?php  
function is_equal($val1, $val2) {
	$output = "{$val1} == {$val2}: ";
	$output .= $val1  == $val2 ? "true <br>" : "false <br>";
	return $output;
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

?>