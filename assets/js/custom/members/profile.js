jQuery( document ).ready(function( $ ) {
	// INIT ALWAYS:
	$('.toolt').tooltip();

	/*
	* Registration validator:
	*/
	jQuery.validator.setDefaults({ debug: true, success: "valid" });
	// edit user
	$( "#usr_edit" ).validate({
		rules: {
			usr_name: {
				minlength: 2,
				maxlength: 50,
				pattern: '^[A-Za-z0-9 ]+$'
			},
			usr_surname: {
				minlength: 2,
				maxlength: 50,
				pattern: '^[A-Za-z0-9 ]+$'
			},

			usr_email : "required",

			usr_fav_mus_genre: {
				pattern: '^[A-Za-z ,;-]+$'
			}
		},
		submitHandler: function() {

			$.ajax({
				url: 'profile/edit_user',
				type: 'POST',
				//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: $('#usr_edit').serialize() ,
			})
			.done(function(msg) {
					var data = JSON.parse(msg);
					var msgType = "error";

					msgType = (data.status != "updated") ? "error" : "success";

					var n = noty({
					    text: data.message,
					    layout: 'bottomRight',
					    theme: 'relax',
					   	type: msgType,
					   	timeout: 5000,
					    animation: {
					        open: 'flipInY', // jQuery animate function property object
					        close: 'flipOutX', // jQuery animate function property object
					        easing: 'swing', // easing
					        speed: 500 // opening & closing animation speed
					    }
					});
			})
			.fail(function() {
				console.log("error");
			});

		}
	});

	// edit user
	$( "#usr_pw_change" ).validate({
		rules: {

			old_password: {
				required: true,
				minlength: 6,
				maxlength: 40
			},
			new_password: {
				required: true,
				minlength: 6,
				maxlength: 40
			},
			new_password_confirm: {
				required: true,
				minlength: 6,
				maxlength: 40,
				equalTo: "#new_password"
			}
		},
		submitHandler: function() {

			$.ajax({
				url: '../auth/change_password',
				type: 'POST',
				//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
				data: $('#usr_pw_change').serialize() ,
			})
			.done(function(msg) {
					var data = JSON.parse(msg);
					var msgType = "error";

					msgType = (data.status != "success") ? "error" : "success";

					var n = noty({
					    text: data.message,
					    layout: 'bottomRight',
					    theme: 'relax',
					   	type: msgType,
					   	timeout: 5000,
					    animation: {
					        open: 'flipInY', // jQuery animate function property object
					        close: 'flipOutX', // jQuery animate function property object
					        easing: 'swing', // easing
					        speed: 500 // opening & closing animation speed
					    }
					});
			})
			.fail(function() {
				console.log("error");
			});

		}
	});




});