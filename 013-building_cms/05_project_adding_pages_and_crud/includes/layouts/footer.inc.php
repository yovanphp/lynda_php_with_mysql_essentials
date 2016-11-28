		<div id="footer">&copy; <?= date('Y') ?> Widget Corp</div>
	</body>
</html>
<?php 
	if(isset($connection))
		mysqli_close($connection);
?>
