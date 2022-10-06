    var bookingId;
    $('.addReviews').click(function () {
        bookingId = $(this).attr("data-id");
    });

    $("#addReview").click(function () {

        var e = document.getElementById("selectreview");
        var value = e.value;
        var selectedReview = e.options[e.selectedIndex].text;

                if(!$('#reviewDes').val() || $('#reviewDes').val().length===0){
                    swal({
                        title: "Error!",
                        text: "Please enter description..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else if(selectedReview.length===0){
                    swal({
                        title: "Error!",
                        text: "Please select review title..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }

                else{
                    var cusId = $('#id').val();
                    var reviewTitle = selectedReview;
                    var reviewDescription = $('#reviewDes').val();
                    var rating = value;

                    $.ajax({
                        type: "POST",
                        url: "controller/review.php",
                        data: {cusId: cusId, bookingId: bookingId, reviewTitle: reviewTitle, reviewDescription: reviewDescription, rating: rating, option:'addReview'},
                        dataType: "json",
                        //if received a response from the server
                        success: function (result) {

                            if (result.status == "fail") {
                                swal({
                                    title: "Error!",
                                    text: "Error adding review..!",
                                    type: 'Try again',
                                    timer: 2000,
                                    showConfirmButton: true

                                });
                            } else if (result.status == "success") {

                                swal({
                                    title: "Success!",
                                    text: "Review Added",
                                    type: 'success',
                                    timer: 500,
                                    showConfirmButton: false
                                }, function () {
                                    setTimeout(function () {
                                        window.location.reload("profile.php");
                                    }, 500);
                                });
                            }


                        }

                    });
                }

});