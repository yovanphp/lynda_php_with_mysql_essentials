<?php  
	$connection = mysqli_connect('localhost', 'yovan', '12345678', 'cms');
	if(mysqli_connect_errno()) {
		die('Error creating connection: ' . 
				mysqli_connect_error() . 
				'(' . mysqli_connect_errno() . ')'
			);
	}

	/*$_POST form values but here we hardcoded them*/
	$menu_name = "Miscellaneous";
	$position = 5;
	$visible = 1;

	$query = 'INSERT INTO subjects (menu_name, position, visible) ';
	$query .= "VALUES( '{$menu_name}', {$position}, {$visible})";

	$result = mysqli_query($connection, $query);

	if($result) {
		// Success => redirect_to('somepage.php');
		echo 'Success! The last inserted record has id: ' . mysqli_insert_id($connection) ;
	} else {
		//Failure
		//$message = "Subject creation failed. OR see below: ";
		die('An error occured while executing the query: ' . mysqli_error($connection));
	}
?>



<?php mysqli_close($connection); ?>