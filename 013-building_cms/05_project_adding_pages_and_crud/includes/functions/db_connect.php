<?php
require_once('config.php');
$connection = mysqli_connect(DB_URL, DB_USER, DB_PASSWORD, DB_DATABASE);
if(mysqli_connect_errno()) {
	die('Error establishing connection with database : '
		 . mysqli_connect_error() .
		 '(' . mysqli_connect_errno() . ')'
		 );
}
