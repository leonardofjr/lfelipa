$(document).ready(function () {

    $('#addWorkForm').submit(function (e) {
        // Getting form data from selected form
        // $(this) contains the selected form
        e.preventDefault();
        var formData = new FormData($('#addWorkForm')[0]);
        // Starting Ajax request
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            // Expecting JSON to be returned
            dataType: 'json',
            processData: false,
            contentType: false,
            // Attaching Cross Site Request Forgery Token value into header
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            // Attaching form data
            data: formData,

            success: function (data, status) {
                // 
                console.log(data);
                if (status === 'success') {
                    // We will redirect our user to the following url
                 //   location.href = '/admin/work';
                }
            },
            error: function (xhr, status, err) {
                console.log(xhr);
                response = xhr.responseJSON;
                if (response.title) {
                    $('.flash-message-title span').html(response.title[0]);
                    $('.flash-message-title').removeClass('d-none');
                }
                else {
                    $('.flash-message-title').addClass('d-none');
                }
                if (response.description) {
                    $('.flash-message-description span').html(response.description[0]);
                    $('.flash-message-description').removeClass('d-none');
                }
                else {
                    $('.flash-message-description').addClass('d-none');
                }
            }

        });
        return false;
    });


    $('#editWorkForm').submit(function (e) {
        e.preventDefault();
        // Getting form data from selected form
        // $(this) contains the selected form
        var formData = new FormData($('#editWorkForm')[0]);
        // Starting Ajax request
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            // Expecting JSON to be returned
            dataType: 'json',
            processData: false,
            contentType: false,
            // Attaching Cross Site Request Forgery Token value into header
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            // Attaching form data
            data: formData,

            success: function (data, status) {
                // 
                if (status === 'success') {
                    // We will redirect our user to the following url
                    location.href = '/admin/work';

                }
            },
            error: function (xhr, status, err) {
                response = xhr.responseJSON;
               console.log(xhr);
                 
                if (response.title) {
                    $('.flash-message-title span').html(response.title[0]);
                    $('.flash-message-title').removeClass('d-none');
                }
                else {
                    $('.flash-message-title').addClass('d-none');
                }
                if (response.description) {
                    $('.flash-message-description span').html(response.description[0]);
                    $('.flash-message-description').removeClass('d-none');
                }
                else {
                    $('.flash-message-description').addClass('d-none');
                }
          
            }

        });
        return false;
    });



    $('#deleteWorkForm').submit(function(e) {
        e.preventDefault();
    
        // Starting Ajax request
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            // Expecting JSON to be returned
            dataType: 'json',
            // Attaching Cross Site Request Forgery Token value into header
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            success: function (data, status) {
                // 
                if (status === 'success') {
                    // We will redirect our user to the following url
                    location.href = '/admin/work';

                }
            },
            error: function (xhr, status, err) {
               console.log(err);
            }

        });
    });
});
