/************************************************************
 ** Clears a field
 ** By: 	Joshua Sowin (fireandknowledge.org)
 ** HTML: <input type="text" value="Search" name="search"
 **			id="search" size="25" 
 ** 		onFocus="clearInput('search', 'Search')" 
 ** 		onBlur="clearInput('search', 'Search')" />
 ***********************************************************/
function clearInput(field_id, term_to_clear) {
	
	// Clear input if it matches default value
	if (document.getElementById(field_id).value == term_to_clear ) {
		document.getElementById(field_id).value = '';
	}
	
	// If the value is blank, then put back term
	else if (document.getElementById(field_id).value == '' ) {
		document.getElementById(field_id).value = term_to_clear;
	}
} // end clearSearch()