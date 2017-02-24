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
		+ '<a href="#" class="btn btn-link btn-link-color btn-link-padding"><i class="fa fa-trash row-delete" aria-hidden="true"></i></a>'
		+ '</td>'
		+ '</tr>';
	
	var value = 0;
	
	//delete all rows in a table
	$('#clear-all-rows').click(function(e) {
	    $('#main-table tbody').empty();
	});
	
	//add new row in a table
	$('#add-line').click(function(e) {
	    $('#table-body').append(rowHtml);
	});
	
	//delete one row
	$('.row-delete').click(function(e) {
	    $(this).parent();
	});
	
	$(document).on('click', '.row-delete', function() {
		$(this).parent().parent().parent().remove();
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
	
	//calculate subtotal amount
	$('#add-subtotal').click(function(e) {
		$('#subtotal').text(calculateSubtotal());
		value = 0;
	});
	
	function calculateSubtotal() {
		$('#main-table > tbody  > tr').each(function() {
			value += Number($(this).find('td:eq(6)').html());
		});
		
		return value;
	}
});