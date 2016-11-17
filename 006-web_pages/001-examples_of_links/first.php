<?php 
$id = 7;
var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First page</title>
</head>
<body>
	<div>
		<!-- We should encode and escape our query parameters. -->
		<p><a href="second.php?id=<?= $id ?>">Second Page</a></p>
	</div>

</body>
</html>