<?php
	require_once('utility.php');
	$username = null;
	$password = null;
	$message = null;
	if (is_server_request('POST')) {
		$username = sanitize($_POST['username']);
		$password = sanitize($_POST['password']);
		if(is_valid_user($username, $password))
			redirect_to('main.php');
		else
			$message = 'The user credentials are not valid!';
	}
	else
		$message = 'Please login!';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<style>
			ul, li {
				padding: 0;
				margin: 0;
			}
			li {
				list-style: none;
				margin-bottom: 10px;
			}
		</style>
	</head>
	<body>
		<form action="#" method="post">
			<div><p><?= $message ?></p></div>
			<ul>
				<li>
					<label for="username">Username: </label>
					<input type="text" name="username" value="<?= sanitize_html($username) ?>">
					<li>
						<label for="password">Password: </label>
						<input type="password" name="password">
					</li>
					<li>
						<input type="submit" value="Submit">
					</li>
				</ul>
			</form>
		</body>
	</html>