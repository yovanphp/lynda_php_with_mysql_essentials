<?php $subjects_result_set  = find_all_subjects() ?>
<ul class="subjects">
	<?php while($subject = mysqli_fetch_assoc($subjects_result_set)) : ?>
	<li <?php if($current_subject && $subject['id'] == $current_subject['id']) echo "class=\"selected\"" ?>>
		<a href="manage_content.php?subject=<?= urlencode($subject['id']) ?>">
			<?= htmlentities($subject['menu_name']) ?>
		</a>
		<?php $pages_result_set = find_pages_by_subject_id($subject['id']); ?>
		<ul class="pages">
			<?php while($page = mysqli_fetch_assoc($pages_result_set)) : ?>
			<li <?php if($current_page && $page['id'] == $current_page['id']) echo "class=\"selected\"" ?>>
				<a href="manage_content.php?page=<?= urlencode($page['id']) ?>">
					<?= htmlentities($page['menu_name']) ?>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
		<?php mysqli_free_result($pages_result_set) ?>
	</li>
	<?php endwhile; ?>
</ul>
<?php mysqli_free_result($subjects_result_set) ?>