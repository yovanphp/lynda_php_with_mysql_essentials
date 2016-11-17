<?php
$id = 7;
$company = 'Johnson & Johnson';
$quote = 'To be or not to be, that is the question';
$for_consumers = 'bio/' . rawurlencode('William Shakespere') . '/quotes.php/' . '?quote=' . rawurlencode($quote);
echo 'For consumers: ' . $for_consumers . '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First page</title>
</head>
<body>
	<div>
		<p><a href="002-second.php?id=<?= $id ?>&company=<?= $company ?>">Second Page</a></p>
		<p><a href="002-second.php?id=<?= urlencode($id) ?>&company=<?= urlencode($company) ?>">Second Page with encoded url parameters</a></p>
		<p><a href="002-second.php?id=<?= rawurlencode($id) ?>&company=<?= rawurlencode($company) ?>">Second Page with raw encoded url parameters</a></p>
		<p><a href="bio/<?= rawurlencode('William Shakespere') . '/quotes.php/' . '?quote=' . urlencode($quote) ?>">Encoding URLS correctly</a></p>
	</div>
</body>
</html>
