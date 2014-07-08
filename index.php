<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php require "logic.php"; ?>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="scripts.js"></script>
    
</head>
<body>

	<h1>xkcd Password Generator</h1>
	
	<div class="pwrd">
		<?php
			foreach($password as $words){
				echo $words;
			}
		?>
	</div>
	
	<!-- create a html form -->
	<form method='POST' action='index.php'>
		
		<!-- ask number of words $num_words-->
		Number of words: <input type="number" name="num_words" min="1" max="10"> (1 to 10)<br>
		
		<!-- ask if number desired $numeral-->
		<input type="checkbox" name="numerals" id="numeral">Include numbers <br>
		
		<!-- ask if symbol desired $symbol and quantity-->
		<input type="checkbox" name="symbols" id="symbol">Include symbols <br>
		
		<!-- ask if first letter in caps-->
		<input type="checkbox" name="cap" id="cap">Make first letter capital <br>
				
		<!-- ask camel case or hyphens $camel_case, $hypens (radio buttons)-->
		<input type="radio" name="separator" value="camel">Camel Case or <input type="radio" name="separator" value="hyphens">Hyphens <br>
		
		<!-- ask if all upper or all lower case $letter_type-->
		<input type="radio" name="case" value="capital">ALL CAPS or <input type="radio" name="case" value="lower">all lower <br>

		<!-- submit button -->
		<input type='submit' class='btn btn-default' value='Get New Password'>

	</form>


	<script type="text/javascript">
      	
    </script>
</body>
</html>