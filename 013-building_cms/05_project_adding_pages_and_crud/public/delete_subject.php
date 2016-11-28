<?php require_once 'sessions.php' ?>
<?php require_once '../includes/functions/functions.php' ?>
<?php require_once '../includes/functions/db_connect.php' ?>
<?php
	$current_subject = find_subject_by_id($_GET['subject']);
	if(!$current_subject) {
		$_SESSION['message'] = 'The subject could not be found!';
		redirect_to('manage_content.php');
	}

	$pages_set = find_pages_by_subject_id($current_subject['id']);
	if(mysqli_num_rows($pages_set) > 0) {
			$_SESSION['message'] = 'Can\'t delete a subject with pages';
			redirect_to('manage_content.php?subject=' . $current_subject['id']);
	}

	$id = $current_subject['id'];
	$query = "DELETE FROM subjects WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);
	if($result && mysqli_affected_rows($connection) == 1) {
		$_SESSION['message'] = 'Subject deleted.';
		redirect_to('manage_content.php');
	} else {
		$_SESSION['message'] = 'Subject deletion failed.';
		redirect_to('manage_content.php?subject=' . $id);
	}
?>
