var manageTable;

$(document).ready(function(){

	//submit stock form function
	$("#submitDataForm").unbind('submit').bind('submit', function() {

		//remove the error text
		$(".text-danger").remove();

		//remove the form error
		$(".form-group").removeClass("has-error").removeClass('has-success');
		
		var name = $("#name").val();
		var age = $('#age').val();
		var email = $('#email').val();

		if(name == null){
			$('#name').after('<p class="text-danger">Stock Name field is required</p>');
			$('#name').closest('.form-group').addClass('has-error');
		} else {
			//remove error text field
			$("#name").find('.text-danger').remove();
			$("#name").closest('.form-group').addClass('has-success');
		}

		if(stockPrice == ""){
			$('#age').after('<p class="text-danger">Stock Price field is required</p>');
			$('#age').closest('.form-group').addClass('has-error');
		} else {
			//remove error text field
			$("#age").find('.text-danger').remove();
			$("#age").closest('.form-group').addClass('has-success');
		}

		if(stockStatus == ""){
			$('#email').after('<p class="text-danger">Stock Status field is required</p>');
			$('#email').closest('.form-group').addClass('has-error');
		} else {
			//remove error text field
			$("#email").find('.text-danger').remove();
			$("#email").closest('.form-group').addClass('has-success');
		}
});