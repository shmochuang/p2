<?php

	// get word list - http://www.mieliestronk.com/corncob_lowercase.txt
	// parse through list into array using file()
	$words = file('words.txt', FILE_IGNORE_NEW_LINES| FINE_SKIP_EMPTY_LINES);
		
	// get or post $num_words, $numeral, $symbol, $r_caps, $seperator, $case
	$num_words = $_POST["num_words"];
	$numeral = $_POST["numerals"];
	$symbol = $_POST["symbols"];
	$seperator = $_POST["seperator"];
	$case = $_POST["case"];
	
		// echo $numeral;  on/off
		// echo $symbol;  on/off
		// echo $seperator;  camel/hyphens
		// echo $case;  capital/lower
	
	
	// if $num_words not greater than 0 and less than 10, echo "please put number btwn 1-10"
	// this already happens in browser with input type number.
	
	// create new array for password array password
	$password = array();

	// loop through $num_words amount of times
	for ($i = 0; $i < $num_words; $i++){
		// get random number between 0 and number of words in list 
		$word_index = rand(0,58000);
		// echo $word_index."<br>";
		
		// set password at index $i to words at index $word_index
		$password[$i] = $words[$word_index];
		
		// if numeral on --> concat num only on last word
		if ($numeral == on && $i == $num_words - 1) {
			$num = rand(0, 99);
			$password[$i] .= $num;
		}
		
		// if symbol on --> concat symbol only on last word
		if ($symbol == on && $i == $num_words - 1) {
			// create special chars array
			$special = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "?");
			// select random char
			$count = count($special);
			$sp_index = rand(0, $count - 1);
			$char = $special[$sp_index];
			
			$password[$i] .= $char;
		}
		
		
		// if seperator = camel --> ucfirst
		if ($seperator == 'camel'){
			$password[$i] = ucfirst($password[$i]);
		}
		// if seperator = hyphen --> concat hypen except on last word
		else if ($seperator == 'hyphens' && $i < $num_words - 1){
			$password[$i] = $password[$i]."-";
		}
		
		
		// if case = capital --> strtoupper
		if ($case == 'capital') {
			$password[$i] = strtoupper($password[$i]);
		}
		else if ($case == 'lower') {
			$password[$i] = strtolower($password[$i]);
		}
		
		echo $password[$i];
	}

	
	// echo password to index file