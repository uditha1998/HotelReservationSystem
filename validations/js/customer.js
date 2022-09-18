$("#update").click(function () {



        if (!$('#name').val() || $('#name').val().length === 0) {

            swal({

                title: "Error!",

                text: "Please enter name..!",

                type: 'error',

                timer: 1500,

                showConfirmButton: false

            });

        } else if (!$('#residance').val() || $('#residance').val().length === 0) {

            swal({

                title: "Error!",

                text: "Please enter residance..!",

                type: 'error',

                timer: 1500,

                showConfirmButton: false

            });

        } else if (!$('#number').val() || $('#number').val().length === 0) {

            swal({

                title: "Error!",

                text: "Please enter number..!",

                type: 'error',

                timer: 1500,

                showConfirmButton: false

            });

        } else {
            
            var name = $('#name').val();
            var residance = $('#residance').val();
            var number = $('#number').val();
            var id = $('#id').val();

            $.ajax({

                url: "controller/customer.php",

                type: "POST",

                data: {id:id, name:name, residance: residance, number:number, option:'update'},

                dataType: 'json',

                success: function (result) {

                    if (result.status == "fail") {
                                swal({
                                    title: "Error!",
                                    text: "Fail to update",
                                    type: 'error',
                                    timer: 2000,
                                    showConfirmButton: true

                                });
                            } else if (result.status == "success") {
                                swal({
                                    title: "Success!",
                                    text: "Updated successfully",
                                    type: 'success',
                                    timer: 2000,
                                    showConfirmButton: false
                                }, function () {

                                setTimeout(function () {

                                 window.location.reload("edit-customer.php?id=" + '#id');

                        }, 500);

                    });
                            }

                }

            });

        }

    });

    $("#logout").click(function () {


            $.ajax({

                url: "controller/customer.php",

                type: "POST",

                data: {option:'logout'},

                dataType: 'json',

                success: function (result) {

                    if (result.status == "fail") {
                                swal({
                                    title: "Error!",
                                    text: "Fail to logout",
                                    type: 'error',
                                    timer: 2000,
                                    showConfirmButton: true

                                });
                            } else if (result.status == "success") {
                
                    let timerInterval
                        Swal.fire({
                        title: 'Logging Out',
                        html: 'Please wait <b></b> seconds.',
                        timer: 1500,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 1500)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            window.location.replace("index.php");
                        }
                        });
                            }

                }

            });


    });

    $("#delete").click(function () {

        var id = $('#id').val();
        swal({

            title: "Are you sure?",

            text: "This account will completely deleted",

            type: "warning",

            showCancelButton: true,

            confirmButtonColor: "#DD6B55",

            confirmButtonText: "Yes, Delete!",

            closeOnConfirm: false

        }, function () {


            $.ajax({

                url: "controller/customer.php",

                type: "POST",

                data: {option:'delete', id:id},

                dataType: 'json',

                success: function (result) {

                    if (result.status == "fail") {
                                swal({
                                    title: "Error!",
                                    text: "Fail to delete",
                                    type: 'error',
                                    timer: 2000,
                                    showConfirmButton: true

                                });
                            } else if (result.status == "success") {
                
                    swal({
                                    title: "Success!",
                                    text: "Deleted successfully",
                                    type: 'success',
                                    timer: 2000,
                                    showConfirmButton: false
                                }, function () {

                                setTimeout(function () {

                                 window.location.replace("index.php");

                        }, 500);

                    });
                            }

                }

            });

        });


    });