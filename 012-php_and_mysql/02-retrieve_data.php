<?php  
$connection = mysqli_connect('localhost', 'yovan', '12345678', 'cms');

if(mysqli_connect_errno()) {
	die ('Error creating a connection: ' .
			mysqli_connect_error() . 
			mysqli_errno());
}

$query = 'SELECT * FROM subjects';
$result = mysqli_query($connection, $query); 
if(!$result)
	die('Error executing query...');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retrieving data</title>
</head>
<body>
	<?php 
		while($row = mysqli_fetch_row($result)) {
			var_dump($row);
			echo '<hr>';
		}
		mysqli_free_result($result);
	?>
</body>
</html>
<?php mysqli_close($connection) ?>