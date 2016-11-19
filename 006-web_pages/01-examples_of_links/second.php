<?php 
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Second.php</title>
</head>
<body>
	<div>
		<p><a href="first.php">First page</a></p>
		<?php if($id) : ?>
		<p>The user id sent from the first page: <?= $id?></p>
		<?php else : ?>
		<p>No user id was sent</p>
		<?php endif; ?>
	</div>
</body>
</html>