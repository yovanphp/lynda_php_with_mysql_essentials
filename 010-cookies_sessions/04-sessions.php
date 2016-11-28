<?php  
session_start(); // creates session file if not exists on the web server and returns a cookie in the response header for future reference.
$_SESSION['username'] = "yovan.juggoo";
$username = $_SESSION['username'];
echo $username;
// unset a session key/pair value
$_SESSION['username'] = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sessions</title>
</head>
<body>
	
</body>
</html>