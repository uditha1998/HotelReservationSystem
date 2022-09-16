$(document).ready(function () {
            
            $("#calculatebtn").click(function (event) {
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
                    document.getElementById("invoice").style.display = 'block';


                }
            });

        });