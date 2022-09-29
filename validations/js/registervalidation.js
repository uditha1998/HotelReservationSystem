
$(document).ready(function () {
            //Create slider

            $("#submitbtn").click(function (event) {
                event.preventDefault();
                ;

                if (!$('#name').val() || $('#name').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter name..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                } else if (!$('#email').val() || $('#email').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter Email..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }
                else if (!$('#residance').val() || $('#residance').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter residance..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }
                else if (!$('#number').val() || $('#number').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter number..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }
                else if (!$('#password').val() || $('#password').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter password..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }
                else if (!$('#cnfmpassword').val() || $('#cnfmpassword').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter confirm password..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }
                else if ($('#password').val() != $('#cnfmpassword').val()) {
                    swal({
                        title: "Error!",
                        text: "Passwords are not matching",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }
                 else {

                    var name = $('#name').val();
                    var email = $('#email').val();
                    var residance = $('#residance').val();
                    var number = $('#number').val();
                    var password = $('#password').val();

                    $.ajax({
                        type: "POST",
                        url: "controller/customerSignin.php",
                        data: {name:name, email: email, residance:residance, number:number, password:password},
                        dataType: "json",
                        //if received a response from the server
                        success: function (result) {

                            if (result.status == "fail") {
                                swal({
                                    title: "Error!",
                                    text: "Error while Registering",
                                    type: 'error',
                                    timer: 2000,
                                    showConfirmButton: true

                                });
                            }
                            else if (result.status == "success") {
                                swal({
                                    title: "Success!",
                                    text: "Your Have Successfully Regsitered",
                                    type: 'success',
                                    timer: 2000,
                                    showConfirmButton: false
                                }, function () {
                                    setTimeout(function () {
                                        window.location.replace("login.php");
                                    }, 2000);
                                });
                            }
                        }

                    });

                }
            });

        });