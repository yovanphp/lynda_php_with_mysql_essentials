<?php
require_once('03-display_errors_functions.php');

$first_name = null;
$last_name = null;
$email = null;
$errors = [];

if(is_server_request('POST')) {
	$first_name = sanitize($_POST['first_name']);
	$last_name = sanitize($_POST['last_name']);
	$email = sanitize($_POST['email']);
	$required = ['first_name', 'last_name'];
	set_required_errors($required, $errors);
	if(!is_valid_email($email))
		$errors['email'] = 'Email is not valid';
	if(empty($errors)) {
		redirect_to('main.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<style>
		ul, li {
			padding: 0px;
			margin: 0;
		}

		li {
			list-style: none;
			margin-bottom: 10px;
		}

		label {
			display: inline-block;
		}

		input[type='text'] {
			float: right;
		}

		form {
			width: 250px;
		}

		.error {
			color: red;
		}

		.error li {
			margin-bottom: 0;
		}

	</style>
</head>
<body>
	<?php if(!empty($errors)) : ?>
		<div class="error">
			<ul>
			<?php foreach($errors as $input => $error) : ?>
				<li><?= $error?></li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
	<form action="#" method="post">
		<ul>
			<li>
				<label for="first_name">First name: </label>
				<input type="text" name="first_name" id="first_name" value="<?= sanitize_html($first_name)?>">
			</li>
			<li>
				<label for="last_name">Last name: </label>
				<input type="text" name="last_name" id="last_name" value="<?= sanitize_html($last_name)?>">
			</li>
			<li>
				<label for="email">Email: </label>
				<input type="text" name="email" id="email" value="<?= sanitize_html($email)?>">
			</li>
			<li><input type="submit" value="submit"></li>
		</ul>
	</form>
</body>
</html>
