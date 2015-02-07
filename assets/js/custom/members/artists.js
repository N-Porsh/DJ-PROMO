jQuery(document).ready(function($) {
    // INIT ALWAYS:
    $('.toolt').tooltip();

    /*
    * Registration validator:
    */
    jQuery.validator.setDefaults({ debug: true, success: "valid" });
    // edit user
    $( "#add_artist" ).validate({
        rules: {
            art_alias: {
                required: true,
                minlength: 2,
                maxlength: 50,
                pattern: '^[A-Za-z0-9 ]+$'
            }
        },
        submitHandler: function() {

            $.ajax({
                url: 'artists/add_artist',
                type: 'POST',
                //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                data: $('#add_artist').serialize() ,
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