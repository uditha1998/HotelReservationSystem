<?php
include_once(dirname(__FILE__) . '../../model/include.php');
$id = $_GET['id'];
$Bookings =new Booking();
$DATA=$Bookings->getterAllById($id);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Activity</title>
        <link href="css/modern.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
        <div class="wrapper">

            <!-- Header Start  -->
            <?php
            include './include/admin_side_nav.php';
            ?>
            <!-- Header End -->

            <div class="main">

                <?php
                include './include/admin_top_nav.php';
                ?>

                <main class="content">
                    <div class="container-fluid">

                        <div class="header">
                            <h1 class="header-title">
                                View Single Booking
                            </h1>

                        </div>

                        <!--From start-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body" style="margin-top: 20px;">
                                    <div style="display: flex">
                                        <div class="col-md-8"></div>
                                        <div class="col-md-2">
                                            <button  style="width:90%;" data-id="<?=$Bookings->getId()?>" class="confirm-bk btn btn-primary">Confirm</button>
                                        </div> 
                                        <div class="col-md-2">
                                            <button style="width: 90%;" data-id="<?=$Bookings->getId()?>" class="reject-bk btn btn-danger">Reject</button>
                                        </div> 

                                    </div>

                                    <form style="margin-top: 2%">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="staticId" class="col-sm-6 col-form-label">Booking ID</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$Bookings->getId()?>">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-6 col-form-label">Check In</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$Bookings->getCheckIn()?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-6 col-form-label">Check Out</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$Bookings->getCheckOut()?>">
                                                    </div>
                                                </div> 
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-6 col-form-label">Customer Name</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$Bookings->getCustomerName()?>">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-md-6">
                                             
                                                        <div class="form-group row">
                                                            <label for="staticId" class="col-sm-6 col-form-label">Quantity</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$Bookings->getQuantity()?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-6 col-form-label">Date</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$Bookings->getDate()?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-6 col-form-label">Booking Category</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$Bookings->getServiceType()?>">
                                                            </div>
                                                        </div>
                                                                                  <div class="form-group row">
                                                            <label for="staticEmail" class="col-sm-6 col-form-label">Customer Email</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?=$Bookings->getCustomerEmail()?>">
                                                            </div>
                                                        </div>
                                                  



                                                </form>

                                            </div>
                                        </div>
                                </div>




                            </div>
                            </main>




                        </div>



                    </div>





                    <script src="js/app.js"></script>
                    <script src="js/ajax/service.js" type="text/javascript"></script>
          
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <script src="validations/js/booking.js" type="text/javascript"></script>

                    </body>
                    </html>
