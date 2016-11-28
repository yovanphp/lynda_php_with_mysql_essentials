<?php require_once 'sessions.php' ?>
<?php require_once '../includes/functions/functions.php' ?>
<?php require_once '../includes/functions/db_connect.php' ?>
<?php require_once '../includes/functions/validations.php' ?>
<?php  find_selected_page() ?>
<?php
	if(!$current_subject) {
		$_SESSION['message'] = 'The subject could not be found!';
		redirect_to('manage_content.php');
	}
?>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$required_fields = ['menu_name', 'position', 'visible'];
	$max_length_fields = ['menu_name' => 30];
	set_required_errors($required_fields);
	set_max_length_errors($max_length_fields);
	
	if(empty($errors)) {
		$id = $current_subject['id'];
		$menu_name = mysql_prep($_POST['menu_name']);
		$position = (int) $_POST['position'];
		$visible = (int) $_POST['visible'];
		
		$query = "UPDATE subjects ";
		$query .= "SET menu_name = '{$menu_name}', position = {$position}, visible = {$visible} ";
		$query .= "WHERE id = {$id} LIMIT 1";
		$result = mysqli_query($connection, $query);
		if($result && mysqli_affected_rows($connection) >= 0) {
			$_SESSION['message'] = 'Successfully updated!';
			redirect_to('manage_content.php');
		} else {
			$message = 'An error while updating!';
		}
	}
} 
else { 
		//end: if($_SERVER['REQUEST_METHOD'] === 'POST') {
		// this is probably a GET request
	}
?>
<?php include '../includes/layouts/header.inc.php' ?>
<div id="main">
	<div id="navigation">
		<?php include '../includes/layouts/snippets/navigation.php' ?>
	</div>
	<div id="page">
		<?php if(isset($message) && $message) : ?>
			<div class="message"><?= htmlentities($message) ?></div>
		<?php endif; ?>
		<?= form_errors($errors); ?>
		<h2>Edit Subject: <?= $current_subject['menu_name'] ?></h2>
		<form action="edit_subject.php?subject=<?= urlencode($current_subject['id']) ?>" method="post">
			<p>
				<label for="menu_name">Subject name</label>
				<input type="text" id="menu_name" name="menu_name" value="<?= htmlentities($current_subject['menu_name']) ?>">
			</p>
			<p>
				<label for="position">Position</label>
				<select name="position" id="position">
					<?php  for($count = 1; $count < find_subjects_count(); $count ++) : ?>
					<option value="<?= $count ?>" <?php if($current_subject['position'] == $count) echo 'selected' ?>><?= $count ?></option>
					<?php endfor; ?>
				</select>
			</p>
			<p>
				Visible:
				<label for="not_visible">No</label>
				<input type="radio" id="not_visible" name="visible" value="0" <?php if($current_subject['visible'] == 0) echo 'checked' ?>>
				<label for="visible">Yes</label>
				<input type="radio" id="visible" name="visible" value="1" <?php if($current_subject['visible'] == 1) echo 'checked' ?>>
			</p>
			<p>
				<input type="submit" value="Update Subject">
			</p>
		</form>
		<a href="manage_content.php">Cancel</a>
		&nbsp;&nbsp;
		<a href="delete_subject.php?subject=<?= urlencode($current_subject['id']) ?>" onclick="return confirm('Are you sure?')">Delete subject</a>
	</div>
</div>
<?php include '../includes/layouts/footer.inc.php' ?>