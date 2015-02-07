jQuery( document ).ready(function( $ ) {
	// INIT ALWAYS:
	$('.toolt').tooltip();

	/*
	* Registration validator:
	*/
	jQuery.validator.setDefaults({ debug: true, success: "valid" });
	$( "#reg_form" ).validate({
		rules: {
			reg_username: {
				required: true,
				minlength: 2,
				maxlength: 50,
				pattern: '^[A-Za-z0-9]+$'
			},

			reg_email: "required",

			reg_pw: {
				required: true,
				minlength: 6
			},
			reg_pw2: {
				required: true,
				equalTo: "#reg_pw"
			}
		},
		submitHandler: function() {
			$.ajax({
				url: 'auth/create_user',
				type: 'POST',
				//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: $('#reg_form').serialize() ,
			})
			.done(function(msg) {
				var data = JSON.parse(msg);
				var msgType = "error";

				msgType = (data.status != "success") ? "error" : "success";

				var n = noty({
				    text: data.message,
				   	type: msgType,
				   	timeout: 5000
				});

				if(data.status == "success"){
					$('#SignInOrReg').modal('hide');
				}
			})
			.fail(function() {
				console.log("error");
				location.href="error";
			});


		}
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
		submitHandler: function() {
			$.ajax({
				url: 'auth/login',
				type: 'POST',
				//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: $("#user_auth").serialize(),
			})
			.done(function(msg) {
				if(msg === "1"){
					location.href = "/members/";
				}
				else{
					//alert("incorrect username or password");
					var n = noty({
					    text: 'Incorrect Username or Password',
					   	type: 'error',
					   	timeout: 4000,
					    animation: {
					        open: 'animated bounceInLeft', // jQuery animate function property object
					        close: 'flipOutX' // jQuery animate function property object
					    }
					});
				}
			})
			.fail(function() {
				console.log("error");
			});
		}
	});

	//TODO implement restore password
	$( "#auth_restore" ).validate({
		rules: {
			emailadress: "required"
		},
		submitHandler: function() { alert("Submitted!") }
	});




});