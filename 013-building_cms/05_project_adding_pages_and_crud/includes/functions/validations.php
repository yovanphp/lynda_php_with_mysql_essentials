<?php

$errors = [];

function is_blank($value) {
	return !isset($value) || (empty($value) && !is_numeric($value));
}

function field_name_as_text($fieldname) {
	$fieldname = str_replace('_', ' ', $fieldname);
	$field_name = ucfirst($fieldname);
	return $fieldname;
}

function has_max_length($value, $max) {
	return strlen($value) <= $max;
}

function has_min_length($value, $min) {
	return strlen($value) >= $min;
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

function set_required_errors($fields) {
	global $errors;
	foreach ($fields as $field) {
		if(is_blank($_POST[$field])) {
			$errors[$field] = field_name_as_text($field) . ' cannot be blank!';
		}
	}
}

function set_max_length_errors($fields) {
	global $errors;
	foreach ($fields as $field => $max) {
		if(!has_max_length($_POST[$field], $max)){
			$errors[$field] = field_name_as_text($field) . ' is too long!';
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