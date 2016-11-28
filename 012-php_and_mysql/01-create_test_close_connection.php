<?php  
$dbhost = 'localhost'; // can be an IPot a domain like google.com
$dbuser = 'yovan';
$dbpass = '12345678p';
$dbname = 'cms';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // handle to the connection
if(mysqli_connect_errno()) {
	die('Database connection failed: ' . 
		mysqli_connect_error() . 
		'(' . mysqli_connect_errno() .')');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Using procedural mysqli interface</title>
</head>
<body>
	
</body>
</html>
<?php mysqli_close($connection) ?>