$(document).ready(function () {



    //Create attraction

    $("#create").click(function (event) {

        event.preventDefault();

        tinymce.triggerSave();



        if (!$('#title').val() || $('#title').val().length === 0) {

            swal({

                title: "Error!",

                text: "Please enter title..!",

                type: 'error',

                timer: 1500,

                showConfirmButton: false

            });

        } else if (!$('#image').val() || $('#image').val().length === 0) {

            swal({

                title: "Error!",

                text: "Please enter  image..!",

                type: 'error',

                timer: 1500,

                showConfirmButton: false

            });

        } else if ($('#title').val().includes("'")) {

            swal({

                title: "Error!",

                text: "Sorry, Invalid character found ( ' ) in title. Please remove that character.",

                type: 'error',

                timer: 3500,

                showConfirmButton: false

            });

        } else if ($('#description').val().includes("'")) {

            swal({

                title: "Error!",

                text: "Sorry, Invalid character found ( ' ) in description. Please remove that character.",

                type: 'error',

                timer: 3500,

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

                url: "controller/service.php",

                type: "POST",

                data: formData,

                async: false,

                dataType: 'json',

                success: function (result) {

                    swal({

                        title: "Success!",

                        text: "Your data was saved successfully!.....",

                        type: 'success',

                        timer: 2000,

                        showConfirmButton: false

                    }, function () {

                        setTimeout(function () {

                            window.location.reload("manage-service.php");

                        }, 1500);

                    });

                },

                cache: false,

                contentType: false,

                processData: false

            });

        }

    });



    //Update attraction

    $("#update").click(function (event) {

        event.preventDefault();

        tinymce.triggerSave();



        if (!$('#title').val() || $('#title').val().length === 0) {

            swal({

                title: "Error!",

                text: "Please enter title..!",

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

                url: "controller/service.php",

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

                            window.location.reload("edit-service.php?id=" + result.id);

                        }, 1500);

                    });

                },

                cache: false,

                contentType: false,

                processData: false

            });

        }

    });



    $('.delete-service').click(function () {



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
                url: "controller/service.php",

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


});



