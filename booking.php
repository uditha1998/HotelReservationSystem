<?php
include_once(dirname(__FILE__) . '/model/include.php');

session_start();

if (!isset($_SESSION['id'])) {
    $id = "";
} else {
    $id = $_SESSION['id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/restaurants-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 08:14:11 GMT -->

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Booking</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700" rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">
    <Link rel="stylesheet" type="text/css" href="css/login.css">
    <Link rel="stylesheet" type="text/css" href="include/plugin/sweetalert/sweetalert/sweetalert.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        .reviewDes {
            width: 10ch;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .bookingDes {
            width: 20ch;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->

<body>
    <!--<![endif]-->

    <!-- PRELOADER -->
    <?php
    //include './include/preloader.php';
    ?>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <?php
        include './include/header.php';
        ?>
        <!-- END / HEADER -->


        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-3">


            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Booking</h2>

                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- RESTAURANTS -->
        <section class="section-restaurant-3 bg-white">
            <div class="container">

                <div class="restaurant-tabs">

                    <div class="tabs tabs-restaurant">

                        <div class="icon-restaurant text-center"><i class="fa fa-university" aria-hidden="true"></i></div>
                        <ul>
                            <li><a href="#tabs-1">Your Bookings </a></li>
                            <li><a href="#tabs-2">Book a Service</a></li>

                        </ul>

                        <div id="tabs-1">
                            <?php
                            if ($id) { ?>

                                <span class="badge badge-pill badge-success"><a href="bookings-report.php">Genarate a Bookings Report</a></span>


                                <?php

                                $Bookings = new Booking();
                                foreach ($Bookings->getterAllById($_SESSION['id']) as $bookings) {
                                ?>
                                
                                    <div class="container">

                                        <?php
                                      
                                        if ($bookings['serviceType'] == "Accommodation") {
                                            $imgUrl = "https://res.cloudinary.com/cake-lounge/image/upload/v1663142955/WilludaInn/vojtech-bruzek-Yrxr3bsPdS0-unsplash_vjrofl.jpg";

                                            $body = $bookings['date'];
                                        } else if ($bookings['serviceType'] == "Restaurant") {
                                            $imgUrl = "https://res.cloudinary.com/cake-lounge/image/upload/v1663142899/WilludaInn/judith-girard-marczak-26Tp__tUAWc-unsplash_gx7n8z.jpg";
                                            $body = $bookings['description'];
                                        } else if ($bookings['serviceType'] == "Tour") {
                                            $imgUrl = "https://res.cloudinary.com/cake-lounge/image/upload/v1663143025/WilludaInn/andy-holmes-0LJCEORiYg8-unsplash_nizm7c.jpg";
                                            $body = $bookings['description'];
                                        } else if ($bookings['serviceType'] == "Event") {
                                            $imgUrl = "https://res.cloudinary.com/cake-lounge/image/upload/v1663143045/WilludaInn/samantha-gades-fIHozNWfcvs-unsplash_l6xerk.jpg";
                                            $body = $bookings['description'];
                                        }
                                        ?>
                                        <div class="card mb-3" style="max-width: 940px; background-color:#f6f7ee; margin-top:5px; margin-bottom:5px;border-radius:10px">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src=<?php echo $imgUrl ?> alt="Trendy Pants and Shoes" class="img-fluid rounded-start" style="width: 150px; height: 150px;border-radius: 25px; margin-top:10px;margin-left:10px" />
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="card-body">
                                                        <h5 class="card-title" style="margin-top:20px;"><?php echo $bookings['serviceType'] ?></h5>
                                                        <p class="card-text bookingDes">
                                                            <?php echo $body ?>
                                                        </p>
                                                        <p>Total : <?php echo $bookings['total'] ?>.00</p>
                                                        <p class="card-text" style="margin-top:20px;">
                                                            <a class="ViewBooking" booking-id="<?= $bookings['id']; ?>" data-target="#modalViewReview" data-toggle="modal" href="#">View</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <?php
                                                    $Review = new Review();
                                                    $review = $Review->getReviewbyBookingId($bookings['id']);

                                                    if ($review == null) { ?>
                                                        <br><br><br>
                                                        <u><a class="addReviews" data-id="<?= $bookings['id']; ?>" style="margin-top:50px" data-target="#modalAddReview" data-toggle="modal" href="#">Add review</a></u>
                                                    <?php
                                                    } else { ?>
                                                        <br>
                                                        <div class="my-3" style="background-color: #d9deb4; border-radius: 25px; width: 150px;margin-left: -45px;">
                                                            <span class="badge badge-pill badge-success" style="margin-left:40px;margin-top:10px;background-color: #69e755;color:black">Review</span><br>
                                                            <div class="card">
                                                                <div class="card-body" style="margin-left:30px;margin-top:10px">
                                                                    <h5 class="card-title"> <?php echo $review['reviewTitle'] ?> </h5>
                                                                    <p class="card-text reviewDes" style="margin-left:5px;"> <?php echo $review['reviewDescription'] ?> </p>
                                                                    <?php
                                                                    if ($review['rating'] == 1) {
                                                                        echo '<i class="fa fa-star" aria-hidden="true" style="color:red"></i>';
                                                                    }
                                                                    if ($review['rating'] == 2) {
                                                                        echo '<i class="fa fa-star" aria-hidden="true" style="color:red"></i>
                                                                                    <i class="fa fa-star" aria-hidden="true" style="color:red"></i>';
                                                                    }
                                                                    if ($review['rating'] == 3) {
                                                                        echo '<i class="fa fa-star" aria-hidden="true" style="color:red"></i>
                                                                                    <i class="fa fa-star" aria-hidden="true" style="color:red"></i>
                                                                                    <i class="fa fa-star" aria-hidden="true" style="color:red"></i>';
                                                                    }
                                                                    if ($review['rating'] == 4) {
                                                                        echo '<i class="fa fa-star" aria-hidden="true" style="color:red"></i>
                                                                                    <i class="fa fa-star" aria-hidden="true" style="color:red"></i>
                                                                                    <i class="fa fa-star" aria-hidden="true" style="color:red"></i>
                                                                                    <i class="fa fa-star" aria-hidden="true" style="color:red"></i>';
                                                                    }
                                                                    if ($review['rating'] == 5) {
                                                                        echo '<i class="fa fa-star" aria-hidden="true" style="color:red"></i>
                                                                                    <i class="fa fa-star" aria-hidden="true" style="color:red"></i>
                                                                                    <i class="fa fa-star" aria-hidden="true" style="color:red"></i>
                                                                                    <i class="fa fa-star" aria-hidden="true" style="color:red"></i>
                                                                                    <i class="fa fa-star" aria-hidden="true" style="color:red"></i>';
                                                                    }
                                                                    ?>

                                                                </div>
                                                                <input type="text" name="" id="bookingIdForDeleting" disabled hidden value="<?php $review['id'] ?>">
                                                                <div class="row"><a href="#" id="edit-review" style="margin-left:30px;" class="editReviews" review-id="<?= $review['id']; ?>"
                                                                review-des="<?= $review['reviewDescription']; ?>"
                                                                data-target="#modalEditReview" data-toggle="modal">
                                                                <span class="badge badge-warning" style="color:yellow;">Edit</span></a>
                                                                <a href="#" class="deleteReviews" review-id-delete="<?= $review['id']; ?>" style="margin-left:5px;"><span class="badge" style="color:black;">Delete</span></a></div>
   
                                                            </div>
                                                            
                                                        </div>
                                                       
                                                    <?php
                                                    }

                                                    ?>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                <?php } ?>

                            <?php       } else {
                                echo '<h2>Your have no Bookings</h2>';
                            } ?>

                        </div>



                        <div id="tabs-2">
                            <section class="section-contact">
                                <div class="container">
                                    <div class="contact">
                                        <div class="row">

                                            <div class="col-md-6 col-lg-6">

                                                <div class="card card-image" style="background-image: url(https://res.cloudinary.com/cake-lounge/image/upload/v1663142955/WilludaInn/vojtech-bruzek-Yrxr3bsPdS0-unsplash_vjrofl.jpg);">

                                                    <!-- Content -->
                                                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" style="height:130px">
                                                        <div>
                                                            <h3 class="card-title pt-2" style="margin-left:60px; color:black; margin-top:60px">Accommodation</h3>
                                                            <a class="btn btn-primary" href="./book-accommodation.php"><i class="fas fa-clone left"></i>Click Here</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                            <div class="col-md-6 col-lg-6 ">

                                                <div class="card card-image" style="background-image: url(https://res.cloudinary.com/cake-lounge/image/upload/v1663142899/WilludaInn/judith-girard-marczak-26Tp__tUAWc-unsplash_gx7n8z.jpg);">

                                                    <!-- Content -->
                                                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" style="height:130px">
                                                        <div>
                                                            <h3 class="card-title pt-2" style="margin-left:60px; color:black; margin-top:60px">Restaurant</h3>
                                                            <a class="btn btn-primary" style="margin-left:60px" href="./book-restaurant.php"><i class="fas fa-clone left"></i>Click Here</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row" style="margin-top:50px">

                                            <div class="col-md-6 col-lg-6">

                                                <div class="card card-image" style="background-image: url(https://res.cloudinary.com/cake-lounge/image/upload/v1663143025/WilludaInn/andy-holmes-0LJCEORiYg8-unsplash_nizm7c.jpg);">

                                                    <!-- Content -->
                                                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" style="height:130px">
                                                        <div>
                                                            <h3 class="card-title pt-2" style="margin-left:60px; color:black; margin-top:60px">Tour Arrangment</h3>
                                                            <a class="btn btn-primary" href="./book-tour.php"><i class="fas fa-clone left"></i>Click Here</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                            <div class="col-md-6 col-lg-6">

                                                <div class="card card-image" style="background-image: url(https://res.cloudinary.com/cake-lounge/image/upload/v1663143045/WilludaInn/samantha-gades-fIHozNWfcvs-unsplash_l6xerk.jpg);">

                                                    <!-- Content -->
                                                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" style="height:130px">
                                                        <div>
                                                            <h3 class="card-title pt-2" style="margin-left:60px; color:black; margin-top:60px">Event Organize</h3>
                                                            <a class="btn btn-primary" style="margin-left:10px" href="./book-event.php"><i class="fas fa-clone left"></i>Click Here</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>


                    </div>
                </div>

            </div>
        </section>

        <!--  -->

        <div class="modal fade" id="modalAddReview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Add Review</h4>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
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

                                <h3>
                                    Title
                                </h3>
                                <select class="form-select" aria-label="Default select example" id="selectreview" style="width:200px; height:30px;">
                                    <option selected>Select</option>
                                    <option value="1">Bad</option>
                                    <option value="2">Fair</option>
                                    <option value="3">Good</option>
                                    <option value="4">Very Good</option>
                                    <option value="5">Excellent</option>
                                </select><span style="margin-left:100px">
                                    <i class="fa fa-star" aria-hidden="true" id="star1" style="visibility: hidden;"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="star2" style="visibility: hidden;"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="star3" style="visibility: hidden;"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="star4" style="visibility: hidden;"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="star5" style="visibility: hidden;"></i>
                                </span>

                                <h3>
                                    Description
                                </h3>
                                <br>
                                <textarea class="form-control" aria-label="With textarea" id="reviewDes"></textarea>



                                <div class="row">

                                </div>


                            </div>
                        </div>

                    </div>
                    <input type="text" id="cusid" value="<?= $_SESSION['id']?>" >

                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-success" id="addReview">Add Review</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END / RESTAURANTS -->

        <!-- view booking model -->
        <div class="modal fade" id="modalViewReview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Booking Details</h4>

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

                                <div class="row">

                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Service Type</th>
                                                <td id="serviceType"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">CheckIn</th>
                                                <td id="checkIn"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">CheckOut</th>
                                                <td id="checkOut"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Description</th>
                                                <td id="description"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Package</th>
                                                <td id="package"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Date</th>
                                                <td id="date"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Quantity</th>
                                                <td id="quantity"></td>
                                            </tr>
                                            <th scope="row">Telephone</th>
                                            <td id="telephone"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Total</th>
                                                <td id="total"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-warning close" data-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- edit review -->
        <div class="modal fade" id="modalEditReview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Edit Review</h4>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
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

                                <h3>
                                    Title
                                </h3>
                                <select class="form-select" aria-label="Default select example" id="editreview" style="width:200px; height:30px;">
                                    <option selected>Select</option>
                                    <option value="1">Bad</option>
                                    <option value="2">Fair</option>
                                    <option value="3">Good</option>
                                    <option value="4">Very Good</option>
                                    <option value="5">Excellent</option>
                                </select><span style="margin-left:100px">
                                    <i class="fa fa-star" aria-hidden="true" id="editstar1" style="visibility: hidden;"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="editstar2" style="visibility: hidden;"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="editstar3" style="visibility: hidden;"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="editstar4" style="visibility: hidden;"></i>
                                    <i class="fa fa-star" aria-hidden="true" id="editstar5" style="visibility: hidden;"></i>
                                </span>

                                <h3>
                                    Description
                                </h3>
                                <br>
                                <textarea class="form-control" aria-label="With textarea" id="editReviewDes"></textarea>



                                <div class="row">

                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-success" id="editReview">Edit Review</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- edit review -->

        <!-- FOOTER -->
        <footer id="footer">

            <!-- FOOTER TOP -->
            <div class="footer_top">
                <div class="container">
                    <div class="row">

                        <!-- WIDGET MAILCHIMP -->
                        <div class="col-lg-9">
                            <div class="mailchimp">
                                <h4>News &amp; Offers</h4>
                                <div class="mailchimp-form">
                                    <form action="#" method="POST">
                                        <input type="text" name="email" placeholder="Your email address" class="input-text">
                                        <button class="awe-btn">SIGN UP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET MAILCHIMP -->

                        <!-- WIDGET SOCIAL -->
                        <div class="col-lg-3">
                            <div class="social">
                                <div class="social-content">
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET SOCIAL -->

                    </div>
                </div>
            </div>
            <!-- END / FOOTER TOP -->

            <!-- FOOTER CENTER -->
            <div class="footer_center">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-lg-5">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                    <div class="img">
                                        <a href="#"><img src="images/logo-footer.png" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p><i class="lotus-icon-location"></i> 225 Beach Street, Australian</p>
                                        <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#066e636a6a6946726e636a697273756e6972636a2865696b"><span class="__cf_email__" data-cfemail="2c44494040436c584449404358595f4443584940024f4341">[email&#160;protected]</span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Page site</h4>
                                <ul>
                                    <li><a href="#">Guest Book</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Event</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">ABOUT</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Comming Soon</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-4 col-lg-3">
                            <div class="widget widget_tripadvisor">
                                <h4 class="widget-title">Tripadvisor</h4>
                                <div class="tripadvisor">
                                    <p>Now with hotel reviews by</p>
                                    <img src="images/tripadvisor.png" alt="">
                                    <span class="tripadvisor-circle">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i class="part"></i>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; 2015 Lotus Hotel All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->
    <script>
        document.getElementById("selectreview").onchange = function() {

            var e = document.getElementById("selectreview");
            var value = e.value;
            var selectedReview = e.options[e.selectedIndex].text;

            if (selectedReview == 'Bad') {
                document.getElementById("star1").style.visibility = "visible";
                document.getElementById("star2").style.visibility = "invisible";
                document.getElementById("star3").style.visibility = "invisible";
                document.getElementById("star4").style.visibility = "invisible";
                document.getElementById("star5").style.visibility = "invisible";
            }
            if (selectedReview == 'Fair') {
                document.getElementById("star1").style.visibility = "visible";
                document.getElementById("star2").style.visibility = "visible";
                document.getElementById("star3").style.visibility = "invisible";
                document.getElementById("star4").style.visibility = "invisible";
                document.getElementById("star5").style.visibility = "invisible";
            }
            if (selectedReview == 'Good') {
                document.getElementById("star1").style.visibility = "visible";
                document.getElementById("star2").style.visibility = "visible";
                document.getElementById("star3").style.visibility = "visible";
                document.getElementById("star4").style.visibility = "invisible";
                document.getElementById("star5").style.visibility = "invisible";
            }
            if (selectedReview == 'Very Good') {
                document.getElementById("star1").style.visibility = "visible";
                document.getElementById("star2").style.visibility = "visible";
                document.getElementById("star3").style.visibility = "visible";
                document.getElementById("star4").style.visibility = "visible";
                document.getElementById("star5").style.visibility = "invisible";
            }
            if (selectedReview == 'Excellent') {
                document.getElementById("star1").style.visibility = "visible";
                document.getElementById("star2").style.visibility = "visible";
                document.getElementById("star3").style.visibility = "visible";
                document.getElementById("star4").style.visibility = "visible";
                document.getElementById("star5").style.visibility = "visible";
            }


        };

        document.getElementById("editreview").onchange = function() {

var e = document.getElementById("editreview");
var value = e.value;
var selectedReview = e.options[e.selectedIndex].text;

if (selectedReview == 'Bad') {
    document.getElementById("editstar1").style.visibility = "visible";
    document.getElementById("editstar2").style.visibility = "invisible";
    document.getElementById("editstar3").style.visibility = "invisible";
    document.getElementById("editstar4").style.visibility = "invisible";
    document.getElementById("editstar5").style.visibility = "invisible";
}
if (selectedReview == 'Fair') {
    document.getElementById("star1").style.visibility = "visible";
    document.getElementById("star2").style.visibility = "visible";
    document.getElementById("star3").style.visibility = "invisible";
    document.getElementById("star4").style.visibility = "invisible";
    document.getElementById("star5").style.visibility = "invisible";
}
if (selectedReview == 'Good') {
    document.getElementById("star1").style.visibility = "visible";
    document.getElementById("star2").style.visibility = "visible";
    document.getElementById("star3").style.visibility = "visible";
    document.getElementById("star4").style.visibility = "invisible";
    document.getElementById("star5").style.visibility = "invisible";
}
if (selectedReview == 'Very Good') {
    document.getElementById("star1").style.visibility = "visible";
    document.getElementById("star2").style.visibility = "visible";
    document.getElementById("star3").style.visibility = "visible";
    document.getElementById("star4").style.visibility = "visible";
    document.getElementById("star5").style.visibility = "invisible";
}
if (selectedReview == 'Excellent') {
    document.getElementById("editstar1").style.visibility = "visible";
    document.getElementById("editstar2").style.visibility = "visible";
    document.getElementById("editstar3").style.visibility = "visible";
    document.getElementById("editstar4").style.visibility = "visible";
    document.getElementById("editstar5").style.visibility = "visible";
}


};
    </script>

    <!-- LOAD JQUERY -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="include/plugin/sweetalert/sweetalert/sweetalert.min.js"></script>


    <script type="text/javascript" src="validations/js/reviews.js"></script>
    <script type="text/javascript" src="validations/js/customer.js"></script>
</body>

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/restaurants-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 08:14:11 GMT -->

</html>