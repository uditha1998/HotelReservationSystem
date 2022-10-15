
$('.delete-review').click(function (){

    var reviewId = $(this).attr("review-id-delete");
    if (!reviewId || reviewId.length === 0){

       swal({

           title: "Error!",

           text: "Review id not defined..!",

           type: 'error',

           timer: 1500,

           showConfirmButton: false

       });
    }
    else{
       swal({

       title: "Are you sure?",

       text: "This review will be deleted",

       type: "warning",

       showCancelButton: true,

       confirmButtonColor: "#DD6B55",

       confirmButtonText: "Yes, Delete!",

       closeOnConfirm: false

   }, function () {


       $.ajax({

           url: "controller/reviews.php",

           type: "POST",

           data: {reviewId: reviewId, option:'deleteReview'},

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
                       } 
                       else if (result.status == "success") {
                           swal({
                               title: "Success!",
                               text: "Deleted successfully",
                               type: 'success',
                               timer: 2000,
                               showConfirmButton: true
                           }, function () {

                           setTimeout(function () {

                               window.location.replace("view-reviews.php");

                   }, 500);

               });
                       }

           }

       });

       });

    }
    

});