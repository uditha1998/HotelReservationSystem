$(document).ready(function () {

    
            $("#accommodationCalculateBtn").click(function (event) {

                

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

            $("#accommodationBooking").click(function (event) {
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
                        data: {name: name, email: email, numberOfPersons: numberOfPersons, checkin: checkin, checkout:checkout, number:number, customerId:customerId, serviceType: serviceType, option:'bookAccommodation'},
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

            $("#restaurantCalculateBtn").click(function (event) {

                

                if (!$('#numberofpersons').val() || $('#numberofpersons').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter persons count..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                } 
                else if(!$('#date').val() || $('#date').val().length === 0) {
                        swal({
                        title: "Error!",
                        text: "Please enter date..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else{

                    var numberOfPersons = $('#numberofpersons').val();

                    if($('#isLoggedUser').val()=="true"){
                        var tempTotal = (1000*numberOfPersons);
                        var total = tempTotal- (tempTotal*10)/100;
                    }
                    else{
                        var total = (1000*numberOfPersons);
                    }


                    document.getElementById("invoName").innerHTML =$('#name').val();
                    document.getElementById("invoNoOfPersons").innerHTML =numberOfPersons;
                    document.getElementById("invoDate").innerHTML =$('#date').val();
                    document.getElementById("invoDescription").innerHTML =$('#mealDescription').val();
                    document.getElementById("invoTotal").innerHTML = total + '.00';
                    
            

                }
            });

             $("#restaurantBooking").click(function (event) {
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
                else if(!$('#date').val() || $('#date').val().length === 0) {
                        swal({
                        title: "Error!",
                        text: "Please enter checkin..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else if(!$('#mealDescription').val() || $('#mealDescription').val().length === 0){
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
                    var date = $('#date').val();
                    var mealDescription = $('#mealDescription').val();
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var number = $('#number').val();
                    var customerId = $('#cusId').val();
                    var serviceType = $('#serviceType').val();

                    $.ajax({
                        type: "POST",
                        url: "controller/booking.php",
                        data: {name: name, email: email, numberOfPersons: numberOfPersons, date: date, mealDescription:mealDescription, number:number, customerId:customerId, serviceType: serviceType, option:'bookRestaurant'},
                        dataType: "json",
                        //if received a response from the server
                        success: function (result) {

                            if (result.status == "fail") {
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

            $("#tourCalculateBtn").click(function (event) {

                var e = document.getElementById("packages");
                var value = e.value;
                var selectedPackage = e.options[e.selectedIndex].text;
                

                if (!$('#numberofpersons').val() || $('#numberofpersons').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter persons count..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else if(selectedPackage.length ===0){
                    swal({
                        title: "Error!",
                        text: "Please select package..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else{
                    
                    if(value==1){
                        var pkgPrice = 2500;
                    }
                    else if(value==2){
                        var pkgPrice = 4000;
                    }
                    else if(value==3){
                        var pkgPrice = 5000;
                    }
                    var numberOfPersons = $('#numberofpersons').val();

                    if($('#isLoggedUser').val()=="true"){
                        var tempTotal = (pkgPrice*numberOfPersons);
                        var total = tempTotal- (tempTotal*10)/100;
                    }
                    else{
                        var total = (pkgPrice*numberOfPersons);
                    }


                    document.getElementById("invoName").innerHTML =$('#name').val();
                    document.getElementById("invoNoOfPersons").innerHTML =numberOfPersons;
                    document.getElementById("invoDate").innerHTML =$('#date').val();
                    document.getElementById("invoDescription").innerHTML =$('#tourDescription').val();
                    document.getElementById("charge").innerHTML =pkgPrice;
                    document.getElementById("invoPackage").innerHTML =e.options[e.selectedIndex].text;
                    document.getElementById("invoTotal").innerHTML = total + '.00';
                    
            

                }
            });

            $("#tourBooking").click(function (event) {
                event.preventDefault();
                ;
                var e = document.getElementById("packages");
                var value = e.value;
                var selectedPackage = e.options[e.selectedIndex].text;

                if (!$('#numberofpersons').val() || $('#numberofpersons').val().length === 0) {
                    swal({
                        title: "Error!",
                        text: "Please enter persons count..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                } 
                else if(!$('#date').val() || $('#date').val().length === 0) {
                        swal({
                        title: "Error!",
                        text: "Please enter date..!",
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
                        text: "Please enter number..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }else if(selectedPackage.length===0){
                    swal({
                        title: "Error!",
                        text: "Please select package..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else{

                    var numberOfPersons = $('#numberofpersons').val();
                    var date = $('#date').val();
                    var tourDescription = $('#tourDescription').val();
                    var package = selectedPackage;
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var number = $('#number').val();
                    var customerId = $('#cusId').val();
                    var serviceType = $('#serviceType').val();

                    $.ajax({
                        type: "POST",
                        url: "controller/booking.php",
                        data: {name: name, email: email, numberOfPersons: numberOfPersons, date: date, package:package, tourDescription:tourDescription, number:number, customerId:customerId, serviceType: serviceType, option:'bookTour'},
                        dataType: "json",
                        //if received a response from the server
                        success: function (result) {

                            if (result.status == "fail") {
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