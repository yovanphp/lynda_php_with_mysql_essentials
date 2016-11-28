<?php 
	$connection = mysqli_connect('localhost', 'yovan', '12345678', 'cms');
	if(mysqli_connect_errno()) {
		die('Error connecting to the database: ' .
				mysqli_connect_error() . 
				'(' . mysqli_connect_errno() . ')'
			);
	}

	$menu_name = "Today's Widget Trivia";
	$position = 7;
	$visible = 1;

	// We should escape strings only but cast other types
	$menu_name = mysqli_real_escape_string($connection, $menu_name);
	$position = (int) $position;
	$visible = (int) $visible;

	$query = "INSERT INTO subjects (menu_name, position, visible) ";
	$query .= "VALUES('{$menu_name}', {$position}, {$visible})";

	$result = mysqli_query($connection, $query);
	if($result)
		echo "Insert successful. Id inserted: " . mysqli_insert_id($connection);
	else die("An error occured while inserting record: " . mysqli_error($connection));
?>

<?php mysqli_close($connection); ?>