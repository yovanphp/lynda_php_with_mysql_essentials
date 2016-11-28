<?php  
setcookie('font-size', '16', time() + (60 * 60 * 24 * 7));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Accessing cookies</title>
</head>
<body>
	<p>The cookie value read from the request is: <?= isset($_COOKIE['font-size']) ? $_COOKIE['font-size'] : null ?></p>
</body>
</html>