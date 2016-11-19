<?php 
	header('HTTP 1.1/ 404 Not found');
	//header('Location: /'); // redirect to the root of our app
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Headers</title>
</head>
<body>
	<!-- <?php //header('HTTP 1.1/ 404 Not found'); ?> -->

	<?php var_dump(headers_list()); ?>
</body>
</html>