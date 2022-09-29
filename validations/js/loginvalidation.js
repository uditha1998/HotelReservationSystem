
$(document).ready(function () {
            //Create slider

            $("#loginbtn").click(function (event) {
                event.preventDefault();

                if (!$('#email').val() || $('#email').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter email..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }
                else if (!$('#password').val() || $('#password').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter Password..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }
                else {
                    var email = $('#email').val();

                    var password = $('#password').val()
                    $.ajax({
                        type: "POST",
                        url: "controller/customerLogin.php",
                        data: {email: email, password: password},
                        dataType: "json",
                        //if received a response from the server
                        success: function (results) {

                            if (results.status == "fail") {
                                swal({
                                    title: "Error!",
                                    text: "Email or password is incorrect or email blocked..!",
                                    type: 'error',
                                    timer: 2000,
                                    showConfirmButton: true

                                });
                            } else if (results.status == "success") {
         
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