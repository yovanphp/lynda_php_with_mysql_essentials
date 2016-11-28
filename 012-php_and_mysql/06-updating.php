<?php 
	$connection = mysqli_connect('localhost', 'yovan', '12345678', 'cms');
	if(mysqli_connect_errno()) {
		die('Error establishing a database connection: ' .
				mysqli_connect_error() . 
				'(' . mysqli_connect_errno() . ')'
			);
	}

	$id = 5;

	$menu_name = "Delete me";
	$position = 4;
	$visible = 1;

	$query = "UPDATE subjects ";
	$query .= "SET menu_name = '${menu_name}', ";
	$query .= "position = ${position}, ";
	$query .= "visible = ${visible} ";
	$query .= "WHERE id = {$id}";

	$result = mysqli_query($connection, $query);

	if($result && mysqli_affected_rows($connection) >= 0) {
		echo 'Successfully updated...';
	} else {
		echo 'Error occured while updating record: ' . mysqli_error($connection);
	}
?>

<?php mysqli_close($connection) ?>