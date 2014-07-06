<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php require './logic.php' ?>
</head>
<body>

	<h1>xkcd Password Generator</h1>
	
	<!-- create a html form -->
	<form method='POST' action='index.php'>
		
		<!-- ask number of words $num_words-->
		Number of words: <input type="number" name="num_words" min="1" max="10"> (1 to 10)<br>
		
		<!-- ask if number desired $numeral-->
		<input type="checkbox" name="numerals" id="numeral">Include numbers <br>
		
		<!-- ask if symbol desired $symbol and quantity-->
		<input type="checkbox" name="symbols" id="symbol">Include symbols <br>
		
		<!-- ask camel case or hyphens $camel_case, $hypens (radio buttons)-->
		<input type="radio" name="seperator" value="camel">Camel Case or <input type="radio" name="seperator" value="hyphens">Hyphens <br>
		
		<!-- ask if all upper or all lower case $letter_type-->
		<input type="radio" name="case" value="capital" <?php echo $camel_disable ?>>ALL CAPS or <input type="radio" name="case" value="lower" <?php echo $camel_disable ?>>all lower <br>

		<!-- submit button -->
		<input type='submit' class='btn btn-default' value='Get New Password'>

	</form>

</body>
</html>