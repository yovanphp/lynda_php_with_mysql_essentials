<?php  
	$connection = mysqli_connect('localhost', 'yovan', '12345678', 'cms');
	
	if(mysqli_connect_errno()) {
		die('Error creating a connection: '
			. mysqli_connect_error()
			. '(' . mysqli_connect_errno() . ')');
	}

	$query = 'SELECT * FROM subjects ';
	$query .= 'WHERE visible = 1 ';
	$query .= 'ORDER BY position ASC';

	$result_set = mysqli_query($connection, $query);

	if(!$result_set)
		die('An error occured while retrieving the data');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listing the menus</title>
</head>
<body>
	<div id="menu_names">
		<ul>
			<?php while($subject = mysqli_fetch_assoc($result_set)) : ?>
				<li><?= $subject['menu_name'] ?></li>
			<?php endwhile; ?>
		</ul>
	</div>
	<?php mysqli_free_result($result_set) ?>
</body>
</html>


<?php mysqli_close($connection) ?>