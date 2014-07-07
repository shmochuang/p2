// function to disable caps/lower case buttons
// if camel case is clicked
function caseDisable() {
	// get case buttons
	var buttons = document.getElementsByName("case");
	
	// disable buttons
	buttons.disabled = true;
	
}

// function to enable buttons to choose all caps/lowers
// if hyphen button clicked after camel  case button
function caseEnable() {
	// get case buttons
	var buttons = document.getElementsByName("case");
	
	// enable buttons
	buttons.disabled = false;
}