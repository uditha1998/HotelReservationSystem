
$(document).ready(function () {
    //Create slider

    $("#create").click(function (event) {
        event.preventDefault();

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