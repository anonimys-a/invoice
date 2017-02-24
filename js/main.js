$(document).ready(function() {
	
	var rowHtml = '<tr id="table-row-invoice">'
		+ '<td><i class="fa fa-th" aria-hidden="true"></i></td>'
		+ '<td>1</td>'
		+ '<td><a href="#" id="product-service">Services:Business Software</a></td>'
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
	
	//edit column for product-service
	$('#product-service').editable({
		type:  'text',
		pk:1,
		name:  'product-service',
		title: 'Enter product/service'   
	
	});
	
	//calculate subtotal amount on load
	var subtotalOnLoad = calculateSubtotal();
	$('#subtotal').text(subtotalOnLoad);
	$('#balance-due-value').text(subtotalOnLoad);
	$('#balance-due').text(subtotalOnLoad);
	
	
	//add email address in the field for the chosen company
	$('#company-selector').change(function() {
		$(this).find(":selected").each(function () {
			$('#company-email').val($(this).val());
		});
	});
	
	//calculate subtotal amount on click
	$('#add-subtotal').click(function(e) {
		$('#subtotal').text(calculateSubtotal());
		$('#balance-due-value').text(calculateSubtotal());
		$('#balance-due').text(calculateSubtotal());
	});
	
	function calculateSubtotal() {
		value = 0;
		$('#main-table > tbody  > tr').each(function() {
			value += Number($(this).find('td:eq(6)').html());
		});
		
		return value;
	}
	
	//handle attachment of a file
	$('#attachement').change(function() {
		var fileName = $('#attach-file')[0].files[0].name;
		$('.attachment-area').val(fileName); // This sets the file name
	});

});