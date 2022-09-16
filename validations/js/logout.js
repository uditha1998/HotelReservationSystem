    
    
    $("#logout").click(function () {
                    
            $.ajax({
                        url: "controller/customerLogout.php",

                        type: "POST",

                        data: {option: 'logout'},

                        dataType: "JSON",
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

                    
    });
