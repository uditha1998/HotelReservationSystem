
$(document).ready(function () {
    //Create slider

    $("#create").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();


        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter activity name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: true
            });
        } else if (!$('#location').val() || $('#location').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter location...!",
                type: 'error',
                timer: 2000,
                showConfirmButton: true
            });
        }else {
            var formData = new FormData($('#form-data')[0]);  
            window.swal({

                title: "Please wait...!",

                text: "It may take few seconds...!",

                imageUrl: "assets/images/tenor.gif",

                showConfirmButton: false,

                allowOutsideClick: false

            });          
            $.ajax({
                url: "controller/activity.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                //if received a response from the server
                success: function (result) {

                  
                        swal({
                            title: "Success!",
                            text: "Your Have Successfully created Activity",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.replace("index.php");
                            }, 2000);
                        });
                    


                }

            });

        }
    });

});

$("#update").click(function (event) {

    event.preventDefault();

    tinymce.triggerSave();



    if (!$('#name').val() || $('#name').val().length === 0) {

        swal({

            title: "Error!",

            text: "Please enter name..!",

            type: 'error',

            timer: 1500,

            showConfirmButton: false

        });

    } else if (!$('#description').val() || $('#description').val().length === 0) {

        swal({

            title: "Error!",

            text: "Please enter description..!",

            type: 'error',

            timer: 1500,

            showConfirmButton: false

        });

    } else {

        var formData = new FormData($('#form-data')[0]);
        window.swal({

            title: "Please wait...!",

            text: "It may take few seconds...!",

            imageUrl: "assets/images/tenor.gif",

            showConfirmButton: false,

            allowOutsideClick: false

        });
        $.ajax({

            url: "controller/activity.php",

            type: "POST",

            data: formData,

            async: false,

            dataType: 'json',

            success: function (result) {

                swal({

                    title: "Success!",

                    text: "Your changes saved successfully!...",

                    type: 'success',

                    timer: 2000,

                    showConfirmButton: false

                }, function () {

                    setTimeout(function () {

                        window.location.reload("edit-activity.php?id=" + result.id);

                    }, 1500);

                });

            },

            cache: false,

            contentType: false,

            processData: false

        });

    }

});



$('.delete-activity').click(function () {



    var id = $(this).attr("data-id");



    swal({

        title: "Are you sure?",

        text: "You will not be able to recover this imaginary file!",

        type: "warning",

        showCancelButton: true,

        confirmButtonColor: "#DD6B55",

        confirmButtonText: "Yes, delete it!",

        closeOnConfirm: false

    }, function () {



        $.ajax({
            url: "controller/activity.php",

            type: "POST",

            data: {id: id, option: 'delete'},

            dataType: "JSON",

            success: function (jsonStr) {

                if (jsonStr.status == "true") {



                    swal({

                        title: "Deleted!",

                        text: "Your imaginary file has been deleted.",

                        type: 'success',

                        timer: 2000,

                        showConfirmButton: false

                    });



                    $('#div' + id).remove();



                }

            }

        });

    });

});






