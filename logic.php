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


// if $num_words not greater than 0 and less than 10, echo "please put number btwn 1-10"
// this already happens in browser with input type number.

// create new array for password array password

// loop through $num_words amount of times
	// get random number between 0 and number of words in list $rand_num
	// if $word_index == rand_num, choose again
	// else set $word_index = rand_num
	// set password at index $i to words at index $word_index
	
	// if camel_case == true ucfirst
	// if hypens == true concat hypen
	// if all upper == true strtoupper

// echo password to index file