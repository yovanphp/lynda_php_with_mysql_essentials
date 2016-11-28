<?php 
	$connection = mysqli_connect('localhost', 'yovan', '12345678', 'cms');
	if(mysqli_connect_errno()) {
		die('Error establishing a database connection: ' .
				mysqli_connect_error() . 
				'(' . mysqli_connect_errno() . ')'
			);
	}

	$id = 5;
	$query = "DELETE FROM subjects ";
	$query .= "WHERE id = {$id}";
	$query .= "LIMIT 1";

	$result = mysqli_query($connection, $query);

	if($result && mysqli_affected_rows($connection) === 1) {
		echo 'Successfully deleted...';
	} else {
		echo 'Error occured while deleting record: ' . mysqli_error($connection);
	}
?>

<?php mysqli_close($connection) ?>