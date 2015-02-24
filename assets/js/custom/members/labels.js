jQuery(document).ready(function($) {


    var dt_labels = $('#dt_labels').DataTable({
        processing: true,
        //serverSide: true,
        searching: false,
        lengthChange: false,
        ajax: "labels/files",
        columns: [
            { "data": "title" },
            { "data": "filename" }
        ]
    });

    // if current page is labels - refresh files list
/*    if( $(location).attr('pathname') === '/members/labels')
    {

        refresh_files();

    }*/


    //add albel
    $('#upload_title').submit(function(e) {
        e.preventDefault();

        $.ajaxFileUpload({
            url: 'labels/upload_file',
            secureuri: true,
            fileElementId: 'labelPicture',
            dataType: 'json',
            data: {
                'title': $('#label_title').val(),
                'csrf_token': $('input[name="csrf_token"]').val()
            },
            success: function(data, status) {

                if (data.status != 'error') {
                    dt_labels.ajax.reload(); // refresh table data
                    $('#label_title').val('');
                }

                msgType = (data.status != "success") ? "error" : "success";
                var n = noty({
                    text: data.msg,
                    type: msgType,
                    timeout: 5000
                });
            }
        });
        return false;
    });



    //TODO delete title img
    $('.delete_file_link').on('click', function(e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete this file?')) {
            var link = $(this);
            $.ajax({
                url: './upload/delete_file/' + link.data('file_id'),
                dataType: 'json',
                success: function(data) {
                    files = $('#files');
                    if (data.status === "success") {
                        link.parents('li').fadeOut('fast', function() {
                            $(this).remove();
                            if (files.find('li').length == 0) {
                                files.html('<p>No Files Uploaded</p>');
                            }
                        });
                    } else {
                        alert(data.msg);
                    }
                }
            });
        }
    });

});