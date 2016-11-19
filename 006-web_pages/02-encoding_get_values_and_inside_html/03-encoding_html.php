<?php
	$text = "ôé╣─ú";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Encoding HTML</title>
</head>
<body>
	<div>
		<p><a href="#"><Click> & learn more</a></p>
		<p><a href="#"><?= htmlspecialchars('<Click> here & learn more') ?></a></p>
		<p><a href="#"><?= htmlentities($text) ?></a></p>
	</div>
</body>
</html>