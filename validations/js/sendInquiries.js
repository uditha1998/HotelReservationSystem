
$(document).ready(function () {
            //Create slider

            $("#sendInquiry").click(function (event) {
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
                        text: "Please enter email..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }else if (!$('#number').val() || $('#number').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter contact number..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }else if (!$('#subject').val() || $('#subject').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter subject..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                }else if (!$('#message').val() || $('#message').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter message..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    });
                } else {
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var number = $('#number').val();
                    var subject = $('#subject').val();
                    var message = $('#message').val();

                    $.ajax({
                        type: "POST",
                        url: "controller/sendInquiries.php",
                        data: {name: name, email: email, number: number, subject: subject, message: message},
                        dataType: "json",
                        //if received a response from the server
                        success: function (result) {

                            if (result.status == "fail") {
                                swal({
                                    title: "Error!",
                                    text: "Inquiry not send..!",
                                    type: 'Try again',
                                    timer: 2000,
                                    showConfirmButton: true

                                });
                            } else if (result.status == "success") {
                                swal({
                                    title: "Success!",
                                    text: "Inquiry submited",
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