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

                url: "controller/project.php",

                type: "POST",

                data: formData,

                async: false,

                dataType: 'json',

                success: function (result) {
                    if (result.status === 'success') {
                        swal({

                            title: "Success!",

                            text: "Your data was saved successfully!.....",

                            type: 'success',

                            timer: 2000,

                            showConfirmButton: false

                        }, function () {

                            setTimeout(function () {

                                window.location.reload("manage-project.php");

                            }, 1500);

                        });
                    } else {
                        swal({

                            title: "Failed!",

                            text: "Your data was not saved!.....",

                            type: 'error',

                            timer: 2000,

                            showConfirmButton: false

                        })
                    }


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

                url: "controller/project.php",

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

                            window.location.reload("edit-project.php?id=" + result.id);

                        }, 1500);

                    });

                },

                cache: false,

                contentType: false,

                processData: false

            });

        }

    });
    $("#create-photo").click(function (event) {

        event.preventDefault();

        tinymce.triggerSave();



        if (!$('#image').val() || $('#image').val().length === 0) {

            swal({

                title: "Error!",

                text: "Please enter  image..!",

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

                url: "controller/project.php",

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

                            window.location.reload("manage-project-photos.php?id=" + result.id);

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

    $("#update-photo").click(function (event) {

        event.preventDefault();

        tinymce.triggerSave();

        window.swal({

            title: "Please wait...!",

            text: "It may take few seconds...!",

            imageUrl: "assets/images/tenor.gif",

            showConfirmButton: false,

            allowOutsideClick: false

        });

        if (!$('#image').val() || $('#image').val().length === 0) {

            swal({

                title: "Error!",

                text: "Please enter select an image..!",

                type: 'error',

                timer: 1500,

                showConfirmButton: false

            });

        } else {

            var formData = new FormData($('#form-data')[0]);

            $.ajax({

                url: "controller/project.php",

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

                            window.location.replace("edit-project-photos.php?id=" + result.id);

                        }, 1500);

                    });

                },

                cache: false,

                contentType: false,

                processData: false

            });

        }

    });
});
  