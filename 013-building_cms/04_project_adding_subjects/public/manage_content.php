<?php require_once '../includes/functions/functions.php' ?>
<?php require_once '../includes/functions/db_connect.php' ?>
<?php include '../includes/layouts/header.inc.php' ?>
<?php  
$query = 'SELECT menu_name FROM subjects WHERE visible = 1 ORDER BY position ASC';
$result_set = mysqli_query($connection, $query);
confirm_query($result_set);
?>
<div id="main">
	<div id="navigation">
		<ul class="subjects">
			 <?php while($subject = mysqli_fetch_assoc($result_set)) : ?>
			 	<li><?= $subject['menu_name'] ?></li>
			 <?php endwhile; ?>
		</ul>
		<?php mysqli_free_result($result_set) ?>
	</div>

	<div id="page">
		<h2>Manage Content</h2>
	</div>
</div>
<?php include '../includes/layouts/footer.inc.php' ?>