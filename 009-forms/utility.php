<?php 

define('USER_NAME', 'yovan');
define('PASSWORD', 'test');

function redirect_to($location) {
	header('Location: ' . $location);
	exit;
}

function sanitize($input) {
	return isset($input) ? $input : null;
}

function sanitize_html($data) {
	return isset($data) ? htmlspecialchars($data) : null;
}

function is_valid_user($username, $password) {
	return USER_NAME == $username && PASSWORD == $password;
}

function is_server_request($method) {
	return $_SERVER['REQUEST_METHOD'] == $method;
}