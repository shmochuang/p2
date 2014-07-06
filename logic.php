<?php

	// get word list - http://www.mieliestronk.com/corncob_lowercase.txt
	// parse through list into array using file()
	$words = file('words.txt', FILE_IGNORE_NEW_LINES| FINE_SKIP_EMPTY_LINES);
		
	// get or post $num_words, $numeral, $symbol, $r_caps, $seperator, $case
	$num_words = $_POST["num_words"];
	$numeral = $_POST["numerals"];
	$symbol = $_POST["symbols"];
	$r_caps = $_POST["r_caps"];
	$seperator = $_POST["seperator"];
	$case = $_POST["case"];
	
		// echo $numeral;  on/off
		// echo $symbol;  on/off
		// echo $r_caps;  on/off
		// echo $seperator;  camel/hyphens
		// echo $case;  capital/lower
	
	
	// if $num_words not greater than 0 and less than 10, echo "please put number btwn 1-10"
	// this already happens in browser with input type number.
	
	// create new array for password array password
	$password = array();

	// loop through $num_words amount of times
	for ($i = 0; $i < $num_words; $i++){
		// get random number between 0 and number of words in list 
		$word_index = rand(0, 58000);
		// echo $word_index."<br>";
		
		// set password at index $i to words at index $word_index
		$password[$i] = $words[$word_index];
		echo $password[$i]."<br>";
		
		// if camel_case == true ucfirst
		// if hypens == true concat hypen
		// if all upper == true strtoupper
	}

	
	// echo password to index file