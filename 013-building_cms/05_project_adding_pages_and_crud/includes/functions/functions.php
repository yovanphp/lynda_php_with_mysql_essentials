<?php
function confirm_query($result_set) {
	if(!$result_set)
		die('Error executing query...');
}

function form_errors($errors=[]) {
	$output = '';
	if(!empty($errors)) {
		$output = '<div class="error">';
		$output .= 'Please fix the following errors: ';
		$output .= '<ul>';
		foreach ($errors as $key => $error) {
			$output .= "<li>";
			$output .= htmlentities($error);
			$output .= "</li>";
		}
		$output .= '</ul>';
		$output .= '</div>';
	}
	return $output;
}

function mysql_prep($string) {
	global $connection;
	return mysqli_real_escape_string($connection, $string);
}

function find_subjects_count() {
	return mysqli_num_rows(find_all_subjects());
}

function redirect_to($location) {
	header('Location: ' .$location);
	exit;
}

function find_all_subjects() {
	global $connection;
	$subject_query = 'SELECT * FROM subjects ';
	//$subject_query .= 'WHERE visible = 1 '; 
	$subject_query .= 'ORDER BY position ASC';
	$subjects_result_set = mysqli_query($connection, $subject_query);
	confirm_query($subjects_result_set);
	return $subjects_result_set;
}

function find_pages_by_subject_id($subject_id) {
	global $connection;
	$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);
	$pages_query = 'SELECT * FROM pages ';
	$pages_query .= 'WHERE subject_id = ' . $safe_subject_id;
	$pages_result_set = mysqli_query($connection, $pages_query);
	confirm_query($pages_result_set);
	return $pages_result_set;
}

function find_subject_by_id($subject_id) {
	global $connection;
	$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);
	$subject_query = 'SELECT * FROM subjects ';
	$subject_query .= 'WHERE id = ' . $safe_subject_id;
	$subject_query .= ' LIMIT 1';
	$subjects_result_set = mysqli_query($connection, $subject_query);
	confirm_query($subjects_result_set);
	$subject = mysqli_fetch_assoc($subjects_result_set);
	return $subject ? $subject : null;
}

function find_page_by_id($page_id) {
	global $connection;
	$safe_page_id = mysqli_real_escape_string($connection, $page_id);
	$page_query = 'SELECT * FROM pages ';
	$page_query .= 'WHERE id = ' . $safe_page_id;
	$page_query .= ' LIMIT 1';
	$pages_result_set = mysqli_query($connection, $page_query);
	confirm_query($pages_result_set);
	$page = mysqli_fetch_assoc($pages_result_set);
	return $page ? $page : null;
}

function find_selected_page() {
	global $current_subject;
	global $current_page;
	$current_subject = isset($_GET['subject']) ? find_subject_by_id($_GET['subject']) : null;
	$current_page = isset($_GET['page']) ? find_page_by_id($_GET['page']) : null;
}