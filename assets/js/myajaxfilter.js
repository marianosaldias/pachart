$(document).on('change', '#selectType', function(e) {
	
	//alert('cambio');
	e.preventDefault();
	console.log('sending');
		 
	var filterBy=document.getElementById('selectType').value;
	console.log(filterBy);
	
	//var body=$('#compose-textarea').val();

	//=== AJAX
	$.ajax({
	type: "POST",
	dataType: "html",
	data: {data:filterBy},
	url: "http://localhost/pachart/index.php/blog/newsfilter",
	success: function(resp) {
		console.log('success!');
		$('#resultado').html(resp);
	},
	error: function(resp) {
		$('#errorModal').modal('show');
	}
	}).done(function() {
		console.log("Done!!");
		//$('#doneModal').modal('show');
	});
});