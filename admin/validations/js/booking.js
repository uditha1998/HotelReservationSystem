$(document).ready(function () {




    $('.confirm-bk').click(function () {



        var id = $(this).attr("data-id");



        swal({

            title: "Are you sure?",

            text: "You will be confirm this Booking!",

            type: "warning",

            showCancelButton: true,

            confirmButtonColor: "#DD6B55",

            confirmButtonText: "Yes, Confirm it!",

            closeOnConfirm: false

        }, function () {



            $.ajax({
                url: "controller/booking.php",

                type: "POST",

                data: {id: id, option: 'confirm'},

                dataType: "JSON",

                success: function (jsonStr) {

                    if (jsonStr.status == "true") {



                        swal({

                            title: "Confirmed!",

                            text: "The Booking has been confirmed.",

                            type: 'success',

                            timer: 2000,

                            showConfirmButton: false

                        });



                        setTimeout(function () {
                            window.location.replace("view-booking.php");
                        }, 2000);



                    }

                }

            });

        });

    });
    $('.reject-bk').click(function () {



        var id = $(this).attr("data-id");



        swal({

            title: "Are you sure?",

            text: "You will be reject this Booking!",

            type: "warning",

            showCancelButton: true,

            confirmButtonColor: "#DD6B55",

            confirmButtonText: "Yes, Reject it!",

            closeOnConfirm: false

        }, function () {



            $.ajax({
                url: "controller/booking.php",

                type: "POST",

                data: {id: id, option: 'reject'},

                dataType: "JSON",

                success: function (jsonStr) {

                    if (jsonStr.status == "true") {



                        swal({

                            title: "Rejected!",

                            text: "The Booking has been rejected.",

                            type: 'error',

                            timer: 2000,

                            showConfirmButton: false

                        });
                        setTimeout(function () {
                            window.location.replace("view-booking.php");
                        }, 2000);





                    }

                }

            });

        });

    });


});



