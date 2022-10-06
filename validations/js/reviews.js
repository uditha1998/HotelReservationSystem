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

$(".ViewBooking").click(function () {

    bookingId = $(this).attr("booking-id");

        $.ajax({
                        type: "POST",
                        url: "controller/review.php",
                        data: {bookingId: bookingId, option:'getBookingDetails'},
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
                            } else if (result) {

                                document.getElementById("serviceType").innerHTML =result['serviceType'];
                                document.getElementById("checkIn").innerHTML =result['checkIn'];
                                document.getElementById("checkOut").innerHTML =result['checkout'];
                                document.getElementById("description").innerHTML =result['description'];
                                document.getElementById("package").innerHTML =result['package'];
                                document.getElementById("date").innerHTML =result['date'];
                                document.getElementById("quantity").innerHTML =result['quantity'];
                                document.getElementById("name").innerHTML =result['customerName'];
                                document.getElementById("email").innerHTML =result['customerEmail'];
                                document.getElementById("telephone").innerHTML =result['customerTelephone'];
                                document.getElementById("total").innerHTML =result['total'];

                                
                            }


                        }

                    });

});