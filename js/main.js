$(document).ready(function() {
	
	//delete all rows in a table
	$('#clear-all-rows').click(function(e) {
	    $('#main-table tbody').empty();
	});
	
	//add new row in a table
	$('#add-line').click(function(e) {
	    $('#table-body').append('<tr>' + $('#table-body').children('tr:first').html() + '</tr>')
	});
	
	//delete one row
	$('#clear-all-rows').click(function(e) {
	    $('#main-table tbody').empty();
	});
	
	
	//populate email when page is loaded
	$('#company-email').val($('#company-selector').val());
	
	//add email address in the field for the chosen company
	$('#company-selector').change(function() {
		$(this).find(":selected").each(function () {
			$('#company-email').val($(this).val());
		});
	});
});