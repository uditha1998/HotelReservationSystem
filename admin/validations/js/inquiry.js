
  $(".respond-inquiry").click(function (){

    var id = $(this).attr("inquiry-id-update");

        swal({

        title: "Are you sure?",

        text: "This inquiry will be updated",

        type: "warning",

        showCancelButton: true,

        confirmButtonColor: "#DD6B55",

        confirmButtonText: "Yes, Update!",

        closeOnConfirm: false

    }, function () {


        $.ajax({

            url: "controller/inquiries.php",

            type: "POST",

            data: {id:id, option:'update-inquiry'},

            dataType: 'json',

            success: function (result) {

                if (result.status == "false") {
                            swal({
                                title: "Error!",
                                text: "Fail to update",
                                type: 'error',
                                timer: 2000,
                                showConfirmButton: true

                            });
                        } 
                        else if (result.status == "true") {
                            swal({
                                title: "Success!",
                                text: "Updated successfully",
                                type: 'success',
                                timer: 2000,
                                showConfirmButton: true
                            }, function () {

                            setTimeout(function () {

                                window.location.replace("view-inquiries.php");

                    }, 500);

                });
                        }

            }

        });

        });

});