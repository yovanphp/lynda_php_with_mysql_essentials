<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<style>
		.trim {
			background-color: red;
		}
	</style>
</head>
<body>
	<?php 
		for ($i=0; $i < 20; $i++) { 
			$result = "{$i} is ";
			$result .= $i % 2 == 0 ? "even." : "odd.";
			echo "{$result}<br>";
		}

	 ?>


	<?php 
		$var_1 = "Hello World!";
		$var_2 = "This is a test";
		echo "$var_1 $var_2" . "<br>";
		$first_name = "Yovan";
		$last_name = "Juggoo";
		echo $first_name . " " . $last_name . "<br/>";
		echo "$first_name $last_name <br>";
		echo "{$var_2}er for inline replacement <br>";

		$first = "The quick brown fox";
		$second = " jumped on the lazy dog.";
		$third = $first;	
		$third .= $second;
		echo $third;
	 ?>

	 <div id="string_functions">
	 	<ul>
	 		<li>Lowercase: <?php echo strtolower($third) ?></li>
	 		<li>Uppercase: <?php echo strtoupper($third) ?></li>
	 		<li>Uppercase first: <?php echo ucfirst($third) ?></li>
	 		<li>Uppercase words: <?php echo ucwords($third) ?></li>
	 		<li>Length: <?php echo strlen($third) ?></li>
	 		<li>Trim: <?php echo "<span class=\"trim\">A" . trim("	B C D  	 </span>") ?></li>
	 		<!-- Find returns the word and everything that follows after the word in the string -->
	 		<li>Find: <?php echo strstr($third, "rown") ?></li>
	 		<li>Replace: <?php echo str_replace("quick", "super-fast", $third) ?></li>
	 		<li>Repeat: <?php echo str_repeat($third, 2) ?></li>
	 		<li>Make substring: <?php echo substr($third, 5, 10) ?></li>
	 		<li>Find position: <?php echo strpos($third, "brown") ?></li>
	 		<li>Find character: <?php echo strchr($third, "z") ?></li>
	 	</ul>
	 </div>

	 <div id="numbers_pt_1_integers">
	 	<?php 
	 		$var_1 = 3;
	 		$var_2 = 4;
	 		echo "Basic Math: <br>"
	 	 ?>

		<?php echo $var_1 ." this is a test" ?>

	 </div>

	<div id="embedding_php">
		<?php //This is a one line comment
			/*
				This is a multi-line comment.
			 */
		 ?>
		<p>This does not output the string <?php 2 + 3; ?></p>
		<p><?php echo 'This turns on PHP' ?></p>
		<p><?php echo 'This is another message' ?></p>
		<p><?= 'Yet another message but with short-open tags!'  ?><p>
		<p>
			<?php
				for ($x = 0; $x <= 10; $x++) {
	    			echo "The number is: $x <br>";
				} 
			?>
		</p>
	</div>

	<div>
		<?php echo "Concatenated string with number: " . (5 * 5) . " works!"; ?>
	</div>

	<div id="phpinfo">
		<h1>The PHP Info...</h1>
		<?php phpinfo() ?>
	</div>


</body>
</html>