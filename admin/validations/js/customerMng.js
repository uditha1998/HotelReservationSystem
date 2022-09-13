    
    
    $('.block-customer').click(function () {



        var id = $(this).attr("data-id");
        var status = $(this).attr("status");

        if(status=="0"){
            swal({

            title: "Are you sure?",

            text: "This customer will be Unblocked",

            type: "warning",

            showCancelButton: true,

            confirmButtonColor: "#DD6B55",

            confirmButtonText: "Yes, Unblock!",

            closeOnConfirm: false

        }, function () {

            $.ajax({
                url: "controller/customer.php",

                type: "POST",

                data: {id: id, option: 'unblock'},

                dataType: "JSON",

                success: function (jsonStr) {

                    if (jsonStr.status == "true") {



                        swal({

                            title: "UnBlocked!",

                            text: "Customer has been Unblocked",

                            type: 'success',

                            timer: 2000,

                            showConfirmButton: true

                        },function () {

                        setTimeout(function () {

                            window.location.reload("view-customer.php");

                        }, 500);

                    });



                        // $('#div' + id).remove();



                    }else{
                        swal({

                            title: "Error!",

                            text: "Failed to Unblock customer",

                            type: 'warning',

                            timer: 2000,

                            showConfirmButton: true

                        },function () {

                        setTimeout(function () {

                            window.location.reload("view-customer.php");

                        }, 500);

                    });
                    }

                }

            });

        });
        }
        else{

        swal({

            title: "Are you sure?",

            text: "This customer will be blocked",

            type: "warning",

            showCancelButton: true,

            confirmButtonColor: "#DD6B55",

            confirmButtonText: "Yes, block!",

            closeOnConfirm: false

        }, function () {

            $.ajax({
                url: "controller/customer.php",

                type: "POST",

                data: {id: id, option: 'block'},

                dataType: "JSON",

                success: function (jsonStr) {

                    if (jsonStr.status == "true") {



                        swal({

                            title: "Blocked!",

                            text: "Customer has been blocked",

                            type: 'success',

                            timer: 2000,

                            showConfirmButton: true

                        },function () {

                        setTimeout(function () {

                            window.location.reload("view-customer.php");

                        }, 500);

                    });



                        $('#div' + id).remove();



                    }else{
                        swal({

                            title: "Error!",

                            text: "Failed to block customer",

                            type: 'warning',

                            timer: 2000,

                            showConfirmButton: true

                        },function () {

                        setTimeout(function () {

                            window.location.reload("view-customer.php");

                        }, 500);

                    });
                    }

                }

            });

        });
    }

    });

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

                                 window.location.reload("view-service.php?id=" + '#id');

                        }, 1500);

                    });
                            }

                }

            });

        }

    });