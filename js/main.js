$(document).ready(function() {
	
	var rowHtml = '<tr id="table-row-invoice">'
		+ '<td><i class="fa fa-th" aria-hidden="true"></i></td>'
		+ '<td>1</td>'
		+ '<td>Services:Business Software</td>'
		+ '<td></td>' 
		+ '<td>1</td>'
		+ '<td>15000</td>'
		+ '<td>15000</td>'
		+ '<td>'
		+ '<a href="#" class="btn btn-link btn-link-color btn-link-padding"><i class="fa fa-trash" aria-hidden="true"></i></a>'
		+ '</td>'
		+ '</tr>';
	
	//delete all rows in a table
	$('#clear-all-rows').click(function(e) {
	    $('#main-table tbody').empty();
	});
	
	//add new row in a table
	$('#add-line').click(function(e) {
	    $('#table-body').append(rowHtml);
	});
	
	//delete one row
	$('#clear-all-rows').click(function(e) {
	    $('#main-table tbody').empty();
	});
	
	
	//populate email when page is loaded
	$('#company-email').val($('#company-selector').val());
	
	//added one row when page is loaded
	$('#table-body').append(rowHtml);
	
	//add email address in the field for the chosen company
	$('#company-selector').change(function() {
		$(this).find(":selected").each(function () {
			$('#company-email').val($(this).val());
		});
	});
});