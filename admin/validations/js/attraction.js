
$(document).ready(function () {
    //Create slider

    $("#create").click(function (event) {
        event.preventDefault();

        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter attraction name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: true
            });
        }  else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter description..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: true
            });
        } else if (!$('#image').val() || $('#image').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please input image..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: true
            });
        } else {
            var name = $('#name').val();
            var description = $('#description').val();
            var image = $('#image').val()
            
            $.ajax({
                type: "POST",
                url: "controller/attraction.php",
                data: {name: name,description: description, image: image},
                dataType: "json",
                //if received a response from the server
                success: function (result) {

                  
                        swal({
                            title: "Success!",
                            text: "Your Have Successfully created Attraction",
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