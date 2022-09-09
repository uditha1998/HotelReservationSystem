
$(document).ready(function () {
            //Create slider

            $("#block").click(function (event) {
                event.preventDefault();
                ;

                if (!$('#id').val()) {
                    swal({
                        title: "Error!",
                        text: "customer name is not defined",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                 } else {
                    swal({
                        title: "Error!",
                        text: "JS working",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                    var id = $('#id').val();

                    $.ajax({
                        type: "POST",
                        url: "controller/customerLogin.php",
                        data: {email: email, password: password},
                        dataType: "json",
                        //if received a response from the server
                        success: function (result) {

                            if (result.status == "fail") {
                                swal({
                                    title: "Error!",
                                    text: "Username or Password Invalid..!",
                                    type: 'error',
                                    timer: 2000,
                                    showConfirmButton: true

                                });
                            } else if (result.status == "success") {
                                swal({
                                    title: "Success!",
                                    text: "Your Have Successfully Login",
                                    type: 'success',
                                    timer: 2000,
                                    showConfirmButton: false
                                }, function () {
                                    setTimeout(function () {
                                        window.location.replace("index.php");
                                    }, 2000);
                                });
                            }


                        }

                    });

                }
            });

        });