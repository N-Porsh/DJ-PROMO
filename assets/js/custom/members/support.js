jQuery(document).ready(function($) {
    // INIT ALWAYS:
    $('.toolt').tooltip();

    /*
    * Registration validator:
    */
    jQuery.validator.setDefaults({ debug: true, success: "valid" });
    // edit user
    $( "#sup_new_query" ).validate({
        rules: {
            support_descr: {
                required: true,
                minlength: 10
            }
        },
        submitHandler: function() {

            $.ajax({
                url: 'support/new_query',
                type: 'POST',
                //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                data: $('#sup_new_query').serialize() ,
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
            })
            .fail(function() {
                console.log("error");
            });

        }
    });


});