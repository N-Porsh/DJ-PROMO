jQuery( document ).ready(function( $ ) {
	/*
	* Registration validator:
	*/
	jQuery.validator.setDefaults({ debug: true, success: "valid" });
	$( "#reg_form" ).validate({
		rules: {
			username: {
				required: true,
				minlength: 2,
				pattern: '^[A-Za-z0-9]+$', // As string
			},
			
			emailadress: "required",																					
			
			password: { 
				required: true,
				minlength: 6
			},
			password_again: {
			equalTo: "#password"
			}																						
		}
	});
	
});