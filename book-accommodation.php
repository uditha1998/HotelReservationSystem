<?php
session_start();
    if(!isset($_SESSION)){
        $discount_msg = '<span style="color:red">Create account at Willuda Inn and get 10% discount</span> <span><u><a href="register.php">Regsiter</a></u></span>';
    }
    else{
        $discount_msg = '<span style="color:green">You will get 10% discount for per booking</span>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 09:24:20 GMT -->

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Book Accommodation</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png" />
    <Link rel="stylesheet" type="text/css" href="include/plugin/sweetalert/sweetalert/sweetalert.css">

    <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
        rel="stylesheet"
        />
    
    <?php
    include './include/link.php';
    ?>

</head>


<body>
    
<?php
    include './include/preloader.php';
    ?>

    <!-- PAGE WRAP -->
    <div id="page-wrap">

    <?php
        include './include/header.php';
        ?>

        

<!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Book Accommodation</h2>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->
<section class="section-contact">

            <div class="container">
                <div class="contact">
                    <div class="row">

                    <!-- Images -->
                        <div class="col-md-6 col-lg-4">

                            <!-- Image slider -->

                        </div>
                        <!-- Images -->

                        <!-- Booking from -->
                        <div class="col-md-6 col-lg-5">
                            
                            <p style="margin-left:50px"><?php echo $discount_msg ?></p>
                            <div class="contact-form">
                                <!--Section: Contact v.2-->
                                <section class="mb-4">

                                    <!--Section heading-->
                                    <h2 class="h1-responsive font-weight-bold text-center my-4">Booking Form</h2>

                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-9 mb-md-0 mb-5">
                                            
                                            <form id="contact-form" method="POST">

                                                <!--Grid row-->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="md-form mb-0">
                                                            <i class="fas fa-user prefix"></i>
                                                            <label for="subject" class="">Name*</label>
                                                            <input type="text" id="name" name="name" class="form-control">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Grid row-->
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="md-form mb-0">
                                                            <i class="fas fa-envelope prefix"></i>
                                                            <label for="subject" class="">Email*</label>
                                                            <input type="text" id="email" name="email" class="form-control">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Grid row-->
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="md-form mb-0">
                                                            <label for="subject" class="">Contact No*</label>
                                                            <input type="text" id="number" name="number" class="form-control">
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                               <!-- Material input -->
                                               <br>
                                                    <div class="md-form">
                                                    <label for="numberExample">Number of persons*</label>                                                        
                                                    <input type="number" id="numberofpersons" class="form-control">
                                                    </div>
                                                
                                                <!--Grid row-->

                                                <br>
                                               <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <label for="name" class="">Check In</label>
                                                        <input type="date" id="checkin" name="checkin" class="form-control">
                                                    </div>
                                                </div>
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <div class="col-md-6">
                                                    <div class="md-form mb-0">
                                                        <label for="name" class="">Check Out</label>
                                                        <input type="date" id="checkout" name="checkout" class="form-control">
                                                    </div>
                                                </div>
                                                <!--Grid column-->

                                            </div>
                                             <br>

                                            
                                                <span style="margin-left:240px"><a class="btn btn-info" id="calculatebtn">Calculate</a></span>
                                            
                                    
                                            </form>
                                           
                                        </div>
                                        
                                        <!--Grid column-->

                                    
                                </div>

                            </section>
                                <!--Section: Contact v.2-->
                            </div>
                        </div>
                        <!-- Booking form -->

                        <!-- Invoice -->

                        <div class="col-md-6 col-lg-3" style="display:none;" id="invoice">

                            <div class="col">
                                       <div class="card" style="margin-top:100px" >
                                            <div class="card-body">
                                                <div class="row">
                                                    <div>
                                                    <i class="far fa-building text-danger fa-3x float-start"></i>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <h3 class="text-uppercase text-center mt-3" style="font-size: 20px;">Invoice</h3>
                                                    <p>123456789</p>
                                                </div>
                                                <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td><i class="fas fa-user"></i>Name</td>
                                                    <td><span id="invoName">---</span></td>
                                                    </tr>
                                                    <tr>
                                                    <td><i class="fas fa-user"></i> Number of persons</td>
                                                    <td><span id="invoNoOfPersons">---</span></td>
                                                    </tr>
                                                    <tr>
                                                    <td> <i class="fas fa-calendar"></i> Check In </td>
                                                    <td><span id="invoCheckIn">---</span></td>
                                                    </tr>
                                                    <tr>
                                                    <td> <i class="fas fa-calendar"></i> Check Out </td>
                                                    <td><span id="invoCheckOut">---</span></td>
                                                    </tr>
                                                    <tr>
                                                </tbody>
                                                </table>

                                                <div class="row">
                                                    <div>
                                                    <ul class="list-unstyled float-end me-0">
                                                        <li><span class="me-3 float-start">Discount:</span><i class="fas fa-dollar-sign" style="margin-left:60px"></i> 10%
                                                        </li>
                                                         <li> <span class="me-5">Totoal Amount:</span><i class="fas fa-dollar-sign" ></i><span id="invoTotal">---</span> 
                                                        </li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                <hr>
                                                 <span style="margin-left:50px"><a class="btn btn-success" id="booking">Confirm Booking</a></span>
                                                
                                            </div>
                                       </div>

                                    </div>

                        </div>
                        <!-- Invoice -->

                    </div>
                </div>
            </div>
        </section>
        <!-- BOOKing -->

        <!-- END / Booking -->

        <?php
        include './include/footer.php';
        ?>

    </div>
   
    <?php
    include './include/script.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="validations/js/bookingMng.js"></script>
      <script src="include/plugin/sweetalert/sweetalert/sweetalert.min.js"></script>
</body>



</html>