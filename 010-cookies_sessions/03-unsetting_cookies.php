<?php  
	// setcookie('font-size');
	// setcookie('font-size', null, time() + (60 * 60 * 24 * 7));
	// setcookie('font-size', 16, time() - 3600);
	//Recommended
	setcookie('font-size', null, time() - (3600));
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unsetting cookies</title>
</head>
<body>
	<p>The cookie is not unset. Value from request header: <?= isset($_COOKIE['font-size']) ? $_COOKIE['font-size'] : null ?></p>
</body>
</html>