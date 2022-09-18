<?php
session_start();
    if(!isset($_SESSION['id'])){
        $discount_msg = '<span style="color:red">Create account at Willuda Inn and get 10% discount</span> <span><u><a href="register.php">Regsiter</a></u></span>';
        $discount = "0%";
        $loggedStatus = "false";
        $name = "";
        $email = "";
        $number = "";
        $cusID = "";

    }
    else{
        $discount_msg = '<span style="color:green">You will get 10% discount for per booking</span>';
        $discount = "10%";
        $loggedStatus = "true";
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $number = $_SESSION['number'];
        $cusID = $_SESSION['id'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 09:24:20 GMT -->

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Contact</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png" />
    <Link rel="stylesheet" type="text/css" href="include/plugin/sweetalert/sweetalert/sweetalert.css">

    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
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

        <!-- CONTACT -->
        <section class="section-contact">
            <div class="container-fluid">
                <div class="contact">
                    <div class="row">

                        <div class="col-md-6 col-lg-5">

                            <img
                                src="https://res.cloudinary.com/cake-lounge/image/upload/v1663142955/WilludaInn/vojtech-bruzek-Yrxr3bsPdS0-unsplash_vjrofl.jpg"
                                alt="Gallery image 1"
                                style="margin-top:90px; width:1000px;margin-left:80px"
                                />

                        </div>


                        <div class="col-md-6 col-lg-6 col-lg-offset-1">
                            <p style="margin-left:100px"><?php echo $discount_msg ?></p>
                            <div class="contact-form" style=" ">
                                <!--Section: Contact v.2-->
                                <section class="mb-4">

                                    <!--Section heading-->
                                    <h2 class="h1-responsive font-weight-bold text-center my-4" style="margin-right:250px; margin-bottom:20px">Booking Form</h2>
                                    
                                    <input type="hidden" id="isLoggedUser" value="<?php echo $loggedStatus?>">

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
                                                            <input type="text" id="name" name="name" class="form-control"
                                                            value="<?php echo $name ?>">
                                                            
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
                                                            <input type="text" id="email" name="email" class="form-control"
                                                            value="<?php echo $email ?>">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Grid row-->
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="md-form mb-0">
                                                            <label for="subject" class="">Contact No*</label>
                                                            <input type="text" id="number" name="number" class="form-control"
                                                            value="<?php echo $number ?>">
                                                            
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
                                            <input type="hidden" id="serviceType" value="Accommodation">
                                            <input type="hidden" id="cusId" value="<?php echo $cusID?>">
                                             <br>

                                            
                                                <span style="margin-left:240px"><a class="btn btn-info" id="accommodationCalculateBtn"
                                                data-toggle="modal" data-target="#modalContactForm"
                                                style="margin-left:220px">Calculate</a></span>
                                            
                                    
                                            </form>
                                           
                                        </div>
                                        
                                        <!--Grid column-->

                                    
                                </div>

                            
                                <!--Section: Contact v.2-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END / CONTACT -->

        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Invoice</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">

                    <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div style="margin-left:230px">
                                        <i class="fa fa-university"></i><span style="font-size:20px"> Willuda Inn</span>
                                        </div>
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
                                        <div style="margin-left:400px">
                                            <ul class="list-unstyled float-end me-0">
                                                <li><span class="me-3 float-start">Charge per person:</span><i class="fas fa-dollar-sign" ></i> 2500.00
                                                </li>
                                                <li><span class="me-3 ">Discount:</span><i class="fas fa-dollar-sign" style="margin-left:60px"></i>-<?php echo $discount?>
                                                </li>
                                                <hr>
                                                    <li> <span class="me-5">Totoal Amount:</span><i class="fas fa-dollar-sign" ></i><span id="invoTotal">000</span><span>.00</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success" id="accommodationBooking">Confirm Booking</button>
                </div>
                </div>
            </div>
</div>

        

        <?php
        include './include/footer.php';
        ?>

    </div>
   
    <?php
    include './include/script.php';
    ?>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="validations/js/bookingMng.js"></script>
        <script src="include/plugin/sweetalert/sweetalert/sweetalert.min.js"></script>
</body>



</html>