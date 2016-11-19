<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quotes</title>
</head>
<body>
	<?php if(isset($_GET['quote'])) : ?>
		<div>
			<p><?= $_GET['quote'] ?></p>
		</div>
	<?php endif; ?>
</body>
</html>