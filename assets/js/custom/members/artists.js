jQuery(document).ready(function($) {

    var dt_artists = $('#dt_artists').DataTable({
        //processing: true,
        //serverSide: true,
        searching: false,
        lengthChange: false,
        ajax: "artists/all_artists",
        columns: [
            { "data": "id" },
            { "data": "alias_name" }
        ]
    });

    /*
    * Artist validator:
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

            $.ajaxFileUpload({
                url: 'artists/add_artist',
                secureuri: true,
                fileElementId: 'art_img',
                dataType: 'json',
                data: {
                    'art_alias'  : $('#art_alias').val(),
                    'art_web'    : $('#art_web').val(),
                    'art_type'   : $('input[name=art_type]:checked', '#add_artist').val(),
                    'art_myspace': $('#art_myspace').val(),
                    'art_fb'     : $('#art_fb').val(),
                    'art_youtube': $('#art_youtube').val(),
                    'art_sc'     : $('#art_sc').val(),
                    'art_tw'     : $('#art_tw').val(),
                    'art_rss'    : $('#art_rss').val(),
                    'art_bio'    : $('#art_bio').val(),
                    'csrf_token' : $('input[name="csrf_token"]').val()
                },
                success: function(data, status) {
                    dt_artists.ajax.reload(); // refresh table data
                    msgType = (data.status != "success") ? "error" : "success";
                    var n = noty({
                        text: data.msg,
                        type: msgType,
                        timeout: 5000
                    });
                }
            });

        }
    });


});