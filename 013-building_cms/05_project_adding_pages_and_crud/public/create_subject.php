<?php require_once 'sessions.php' ?>
<?php require_once '../includes/functions/functions.php' ?>
<?php require_once '../includes/functions/db_connect.php' ?>
<?php require_once '../includes/functions/validations.php' ?>
<?php  
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$menu_name = mysql_prep($_POST['menu_name']);
		$position = (int) $_POST['position'];
		$visible = (int) $_POST['visible'];

		$required_fields = ['menu_name', 'position', 'visible'];
		$max_length_fields = ['menu_name' => 30];
		set_required_errors($required_fields);
		set_max_length_errors($max_length_fields);

		if(!empty($errors)) {
			$_SESSION['errors'] = $errors;
			redirect_to('new_subject.php');
		}

		// No need of else because redirect_to($location) has an exit; So none of the code below is executed.

		$query = "INSERT INTO subjects(menu_name, position, visible) ";
		$query .= "VALUES('{$menu_name}', {$position}, {$visible})";

		$result = mysqli_query($connection, $query);

		if($result) {
			$_SESSION['message'] = 'Successfully saved!';
			redirect_to('manage_content.php');
		} else {
			$_SESSION['message'] = 'An error while saving!';
			redirect_to('new_subject.php');
		}

	} else // this is probably a GET request
		redirect_to('new_subject.php');
?>


<?php 
if(isset($connection))
	mysqli_close($connection);