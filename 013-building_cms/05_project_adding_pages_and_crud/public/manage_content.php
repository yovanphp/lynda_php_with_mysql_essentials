<?php require_once 'sessions.php' ?>
<?php require_once '../includes/functions/functions.php' ?>
<?php require_once '../includes/functions/db_connect.php' ?>
<?php include '../includes/layouts/header.inc.php' ?>
<?php $subjects_result_set = find_all_subjects(); ?>
<?php  find_selected_page() ?>
<div id="main">
	<div id="navigation">
		<a href="admin.php">&laquo; Main menu</a>
		<?php include '../includes/layouts/snippets/navigation.php' ?>
		<a href="new_subject.php">+Add Subject</a>
	</div>
	<div id="page">
		<?= session_message() ?>
		<h2>Manage Content</h2>
		<p>
			<?php if($current_subject) : ?>
				<ul class="data">
					<li>Subject: <?= htmlentities($current_subject['menu_name']); ?></li>
					<li>Position: <?= $current_subject['position']; ?></li>
					<li>Visible: <?= $current_subject['visible'] == 1 ? 'Yes' : 'No'; ?></li>
				</ul>
				<a href="edit_subject.php?subject=<?= urlencode($current_subject['id']) ?>">Edit Subject</a>
				<hr style="margin-top: 30px;">
				<h2>Pages in this subject</h2>
				<ul class="pages">
					<?php $pages_result_set = find_pages_by_subject_id($current_subject['id']); ?>
					<?php while($page = mysqli_fetch_assoc($pages_result_set)) : ?>
					<li>
						<a href="manage_content.php?page=<?= urlencode($page['id']) ?>">
							<?= htmlentities($page['menu_name']) ?>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php mysqli_free_result($pages_result_set) ?>
				<div>
					<a href="new_page.php?subject_id=<?= urlencode($current_subject['id']) ?>">+Add a new page to this subject</a>
				</div>
			<?php elseif($current_page) : ?>
				<ul class="data">
					<li>Page: <?= htmlentities($current_page['menu_name']); ?></li>
					<li>Position: <?= $current_page['position']; ?></li>
					<li>Visible: <?= $current_page['visible'] == 1 ? 'Yes' : 'No'; ?></li>
				</ul>
				<div class="view-content">
					<p><?= $current_page['content'] ?></p>
				</div>
			<?php else : ?>
				Please select a subject or a page!
			<?php endif; ?>
		</p>
	</div>
</div>
<?php include '../includes/layouts/footer.inc.php' ?>