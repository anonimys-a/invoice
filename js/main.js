$(document).ready(function() {
	
	//delete all rows in a table
	$('#clear-all-rows').click(function(e) {
	    $('#main-table tbody').empty();
	});
	
	//add new row in a table
	$('#add-line').click(function(e) {
	    $('#table-row-wrapper').contents().appendTo('#div2').end().fadeOut();
	});
	
	
});