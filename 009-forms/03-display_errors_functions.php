<?php
function is_blank($value) {
	return !isset($value) || (empty($value) && !is_numeric($value));
}

function has_max_length($value, $max) {
	return $value <= $max;
}

function has_min_length($value, $min) {
	return $value >= $min;
}

function is_in_set($value, $set) {
	return in_array($value, $set);
}

function is_valid_email($email) {
	return is_blank($email) ? true : filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_server_request($method) {
	return $_SERVER['REQUEST_METHOD'] === $method;
}

function redirect_to($location) {
	header('Location: ' . $location);
	exit;
}

function set_required_errors($required, &$errors) {
	foreach ($required as $field) {
		if(is_blank($_POST[$field])) {
			$errors[$field] = ucfirst(str_replace('_', ' ', trim($field))) . ' cannot be blank';
		}
	}
}

function sanitize($data) {
	return isset($data) ? $data : null;
}

function sanitize_html($data) {
	return isset($data) && !empty($data) ? htmlspecialchars($data) : null;
}

function has_error($errors, $input) {
	return array_key_exists($input, $errors);
}