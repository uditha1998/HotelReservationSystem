$(document).ready(function () {

    
            $("#calculatebtn").click(function (event) {

                

                if (!$('#numberofpersons').val() || $('#numberofpersons').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter persons count..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                } 
                else if(!$('#checkin').val() || $('#checkin').val().length === 0) {
                        swal({
                        title: "Error!",
                        text: "Please enter checkin..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else if(!$('#checkout').val() || $('#checkout').val().length === 0){
                    swal({
                        title: "Error!",
                        text: "Please enter checkout..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else{

                        
                    

                    var numberOfPersons = $('#numberofpersons').val();
                    var checkin = $('#checkin').val();
                    var checkout = $('#checkout').val();
                    var date_diff =  Math.floor(( Date.parse(checkout) - Date.parse(checkin) ) / 86400000);

                    if($('#isLoggedUser').val()=="true"){
                        var tempTotal = ((2500*numberOfPersons)*date_diff);
                        var total = tempTotal- (tempTotal*10)/100;
                    }
                    else{
                        var total = ((2500*numberOfPersons)*date_diff);
                    }


                    document.getElementById("invoName").innerHTML =$('#name').val();
                    document.getElementById("invoNoOfPersons").innerHTML =numberOfPersons;
                    document.getElementById("invoCheckIn").innerHTML =$('#checkin').val();
                    document.getElementById("invoCheckOut").innerHTML =$('#checkout').val();
                    document.getElementById("invoTotal").innerHTML = total + '.00';
                    
            

                }
            });

            $("#booking").click(function (event) {
                event.preventDefault();
                ;

                if (!$('#numberofpersons').val() || $('#numberofpersons').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter persons count..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                } 
                else if(!$('#checkin').val() || $('#checkin').val().length === 0) {
                        swal({
                        title: "Error!",
                        text: "Please enter checkin..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else if(!$('#checkout').val() || $('#checkout').val().length === 0){
                    swal({
                        title: "Error!",
                        text: "Please enter checkout..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else if(!$('#name').val() || $('#name').val().length === 0){
                    swal({
                        title: "Error!",
                        text: "Please enter name..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else if(!$('#email').val() || $('#email').val().length === 0){
                    swal({
                        title: "Error!",
                        text: "Please enter email..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else if(!$('#number').val() || $('#number').val().length === 0){
                    swal({
                        title: "Error!",
                        text: "Please enter checkout..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else{

                    var numberOfPersons = $('#numberofpersons').val();
                    var checkin = $('#checkin').val();
                    var checkout = $('#checkout').val();
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var number = $('#number').val();
                    var customerId = $('#cusId').val();
                    var serviceType = $('#serviceType').val();

                    $.ajax({
                        type: "POST",
                        url: "controller/booking.php",
                        data: {name: name, email: email, numberOfPersons: numberOfPersons, checkin: checkin, checkout:checkout, number:number, customerId:customerId, serviceType: serviceType},
                        dataType: "json",
                        //if received a response from the server
                        success: function (result) {

                            if (result.status == "faillll") {
                                swal({
                                    title: "Error!",
                                    text: "Error Booking..!",
                                    type: 'Try again',
                                    timer: 2000,
                                    showConfirmButton: true

                                });
                            } else if (result.status == "success") {

                                swal({
                                    title: "Success!",
                                    text: "Booking Confirmed",
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