<?php 
	$connection = mysqli_connect('localhost', 'yovan', '12345678', 'cms');
	if(mysqli_connect_errno()) {
		die('Error creating database connection: '
			. mysqli_connect_error() . '('
			. mysqli_connect_errno() . ')');
	}
	
	$query = 'SELECT * FROM subjects ';
	$query .= 'WHERE visible = 1 ';
	$query .= 'ORDER BY position ASC';

	$result = mysqli_query($connection, $query);
	if(!$result)
		die('Error while executing query. Please check syntax.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ways to retrieve data</title>
</head>
<body>
	<div id="associative_array" class="retrieve_rows">
		<?php  
			while($row = mysqli_fetch_assoc($result)) {
				var_dump($row);
				echo '<hr>';
			}
		?>
	</div>
	<?php mysqli_free_result($result) ?>
</body>
</html>



<?php mysqli_close($connection) ?>