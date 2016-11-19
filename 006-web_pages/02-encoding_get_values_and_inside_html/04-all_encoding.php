<?php  
$url_page = 'php/create/page/url.php';
$param1 = 'This is a string with < >';
$param2 = '&#?*$[]+ are bad characters';
$linktext = '<Click here & learn more>';

$url = "http://localhost/";
$url = rawurlencode($url_page);
$url .= "?param1=" . urlencode($param1);
$url .= "&param2=" . urlencode($param2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All encoding working together</title>
</head>
<body>
	<div>
		<p><a href="<?= htmlspecialchars($url) ?>"><?= htmlspecialchars($linktext); ?></a></p>
	</div>
</body>
</html>