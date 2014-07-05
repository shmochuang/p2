<?php

// get word list - http://www.mieliestronk.com/corncob_lowercase.txt
	// fopen read

// parse through list into array
	// array words(filename.txt, FILE_IGNORE_NEW_LINES, FINE_SKIP_EMPTY_LINES)
	$words = file(w.txt, FILE_IGNORE_NEW_LINES| FINE_SKIP_EMPTY_LINES);
	echo "i'm here";
	foreach($words as $word){
		echo $word;
	}
		
// get or post $num_words, $numeral, $symbol, $caps, $num_symbols, $seperator, $letter_type
// if $num_words not greater than 0 and less than 10, echo "please put number btwn 1-10"

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