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
				pattern: '^[A-Za-z0-9]+$'
			},

			emailadress: "required",

			reg_pw: {
				required: true,
				minlength: 6
			},
			password_again: {
				required: true,
				equalTo: "#reg_pw"
			}
		},
		submitHandler: function() { alert("Submitted!") }
	});
	// authentication validator
	$( "#user_auth" ).validate({
		rules: {
			username: {
				required: true,
				minlength: 2,
				pattern: '^[A-Za-z0-9]+$'
			},

			log_pw: {
				required: true,
				minlength: 6
			}
		},
		submitHandler: function() { alert("Submitted!") }
	});
	$( "#auth_restore" ).validate({
		rules: {
			emailadress: "required"
		},
		submitHandler: function() { alert("Submitted!") }
	});

});