<?php require_once 'sessions.php' ?>
<?php require_once '../includes/functions/functions.php' ?>
<?php require_once '../includes/functions/db_connect.php' ?>
<?php include '../includes/layouts/header.inc.php' ?>
<?php  find_selected_page() ?>
<div id="main">
	<div id="navigation">
		<?php include '../includes/layouts/snippets/navigation.php' ?>
	</div>
	<div id="page">
		<?= session_message(); ?>
		<?php $errors = errors(); ?>
		<?= form_errors($errors); ?>
		<h2>Create Subject</h2>
		<form action="create_subject.php" method="post">
			<p>
				<label for="menu_name">Subject name</label>
				<input type="text" id="menu_name" name="menu_name">
			</p>
			<p>
				<label for="position">Position</label>
				<select name="position" id="position">
				<?php  for($count = 1; $count < find_subjects_count() + 1; $count ++) : ?>
					<option value="<?= $count ?>"><?= $count ?></option>
				<?php endfor; ?>
				</select>
			</p>
			<p>
				Visible: 
				<label for="not_visible">No</label>
				<input type="radio" id="not_visible" name="visible" value="0">
				<label for="visible">Yes</label>
				<input type="radio" id="visible" name="visible" value="1">
			</p>
			<p>
				<input type="submit" value="Create Subject">
			</p>
		</form>
		<a href="manage_content.php">Cancel</a>
	</div>
</div>
<?php include '../includes/layouts/footer.inc.php' ?>