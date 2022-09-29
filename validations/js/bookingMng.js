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
                    document.getElementById("invoTotal").innerHTML = total;
                    document.getElementById("total").value = total;
                    
            

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
                    var invoTotal = $('#total').val();

                    $.ajax({
                        type: "POST",
                        url: "controller/booking.php",
                        data: {name: name, email: email, numberOfPersons: numberOfPersons, checkin: checkin, checkout:checkout, number:number, customerId:customerId, serviceType: serviceType, option:'bookAccommodation', invoTotal: invoTotal},
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

            $("#restaurantCalculateBtn").click(function (event) {

                var chargePerPerson = 1000;

                

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
                        var tempTotal = (chargePerPerson*numberOfPersons);
                        var total = tempTotal- (tempTotal*10)/100;
                    }
                    else{
                        var total = (chargePerPerson*numberOfPersons);
                    }


                    document.getElementById("invoName").innerHTML =$('#name').val();
                    document.getElementById("invoNoOfPersons").innerHTML =numberOfPersons;
                    document.getElementById("invoDate").innerHTML =$('#date').val();
                    document.getElementById("invoDescription").innerHTML =$('#mealDescription').val();
                    document.getElementById("invoTotal").innerHTML = total;
                    document.getElementById("total").value = total;

                    
            

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
                        text: "Please enter date..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else if(!$('#mealDescription').val() || $('#mealDescription').val().length === 0){
                    swal({
                        title: "Error!",
                        text: "Please enter description..!",
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
                    var InvoTotal = $('#total').val();
                    

                    $.ajax({
                        type: "POST",
                        url: "controller/booking.php",
                        data: {name: name, email: email, numberOfPersons: numberOfPersons, date: date, mealDescription:mealDescription, number:number, customerId:customerId, serviceType: serviceType, option:'bookRestaurant', InvoTotal: InvoTotal},
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
                var corelWatching = 2500;
                var whaleWatching = 4000;
                var camping = 5000;
                

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
                        var pkgPrice = corelWatching;
                    }
                    else if(value==2){
                        var pkgPrice = whaleWatching;
                    }
                    else if(value==3){
                        var pkgPrice = camping;
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
                    document.getElementById("invoTotal").innerHTML = total;
                    document.getElementById("total").value = total;

                    
            

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
                    var invoTotal = $('#total').val();

                    $.ajax({
                        type: "POST",
                        url: "controller/booking.php",
                        data: {name: name, email: email, numberOfPersons: numberOfPersons, date: date, package:package, tourDescription:tourDescription, number:number, customerId:customerId, serviceType: serviceType, option:'bookTour', invoTotal: invoTotal},
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

            $("#eventCalculateBtn").click(function (event) {

                var chargePerPersonforEvent = 2500;

                

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
                        var tempTotal = (chargePerPersonforEvent*numberOfPersons);
                        var total = tempTotal- (tempTotal*10)/100;
                    }
                    else{
                        var total = (chargePerPersonforEvent*numberOfPersons);
                    }


                    document.getElementById("invoName").innerHTML =$('#name').val();
                    document.getElementById("invoNoOfPersons").innerHTML =numberOfPersons;
                    document.getElementById("invoDate").innerHTML =$('#date').val();
                    document.getElementById("invoDescription").innerHTML =$('#eventDescription').val();
                    document.getElementById("invoTotal").innerHTML = total;
                    document.getElementById("total").value = total;

                    
            

                }
            });

            $("#eventBooking").click(function (event) {
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
                        text: "Please enter date..!",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: true
                    }); 
                }
                else if(!$('#eventDescription').val() || $('#eventDescription').val().length === 0){
                    swal({
                        title: "Error!",
                        text: "Please enter description..!",
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
                }
                else{

                    var numberOfPersons = $('#numberofpersons').val();
                    var date = $('#date').val();
                    var eventDescription = $('#eventDescription').val();
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var number = $('#number').val();
                    var customerId = $('#cusId').val();
                    var serviceType = $('#serviceType').val();
                    var invoTotal = $('#total').val();


                    $.ajax({
                        type: "POST",
                        url: "controller/booking.php",
                        data: {name: name, email: email, numberOfPersons: numberOfPersons, date: date, eventDescription:eventDescription, number:number, customerId:customerId, serviceType: serviceType, option:'bookEvent', invoTotal: invoTotal},
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