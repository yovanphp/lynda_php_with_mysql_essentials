<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Second Page</title>
</head>
<body>
	<div>
		<?php if(isset($_GET['company'])) : ?>
			<p>The company name is: <?= $_GET['company'] ?></p>
		<?php endif; ?>
	</div>
</body>
</html>