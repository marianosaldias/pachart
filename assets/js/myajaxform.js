$(document).on('submit', '#myajaxform', function(e) {
	e.preventDefault();
	console.log('sending');
		 
	var data=$(this).serializeArray();

	console.log(data);

	// var body=$('#compose-textarea').val();

	//=== AJAX
	$.ajax({
	type: "POST",
	url: "http://localhost/codeign/index.php/ajaxform/send",
	dataType: "json",
	data: {data:data},
	success: function(resp) {
		console.log('success!');
		console.log(resp);
		console.log(resp.status);
		console.log(resp.msg);

		$('#successModal').modal('show');
		
	},
	error: function(resp) {
		console.log('Error al enviar');
		console.log(resp.status);
		console.log(resp.msg);		

		$('#errorModal').modal('show');
	}
	}).done(function() {
		console.log("Done!!");
		//$('#doneModal').modal('show');
		
		//Reset form
		document.getElementById('myajaxform').reset();
	});
});