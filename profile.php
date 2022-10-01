
<?php
include_once(dirname(__FILE__) . '/model/include.php');

session_start();

    if(!isset($_SESSION['id'])){
        $id = "";
    }
    else{
    $id = $_SESSION['id']; 
    }



?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 08:12:47 GMT -->

<head>
    <meta charset="utf-8">
    <!-- TITLE -->

    <title>Profile</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

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
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <script src="jquery-3.3.1.min.js"></script>
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

    <!-- PRELOADER -->
    <?php
    include './include/preloader.php';
    ?>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <?php
        include './include/header.php';
        ?>
        <!-- END / HEADER -->
        
                      

        <!-- ACCOUNT -->
        <section class="section-account parallax bg-11" >

        <button type="button" class="btn btn-danger" style="margin-left:90vw" id="logout">Logout</button>
        <a href="bookings-report.php">Report</a>

    <ul class="nav nav-tabs" style="width:50vw; margin-left:30vw">
    <li class="active"><a data-toggle="tab" href="#home">Your Bookings</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
  </ul>

   <div class="tab-content" style="margin-left:30vw; margin-top:20px">
    <div id="home" class="tab-pane fade in active">

    <?php
        $Bookings = new Booking();
        foreach ($Bookings->getterAllById($_SESSION['id']) as $bookings) {
            ?>

      <div class="container">
    
        <?php
        if($bookings['serviceType']=="Accommodation"){
            $imgUrl = "https://res.cloudinary.com/cake-lounge/image/upload/v1663142955/WilludaInn/vojtech-bruzek-Yrxr3bsPdS0-unsplash_vjrofl.jpg";

            $body = $bookings['date'];
        }
        else if($bookings['serviceType']=="Restaurant"){
            $imgUrl = "https://res.cloudinary.com/cake-lounge/image/upload/v1663142899/WilludaInn/judith-girard-marczak-26Tp__tUAWc-unsplash_gx7n8z.jpg";
            $body = $bookings['description'];
        }
        else if($bookings['serviceType']=="Tour"){
            $imgUrl = "https://res.cloudinary.com/cake-lounge/image/upload/v1663143025/WilludaInn/andy-holmes-0LJCEORiYg8-unsplash_nizm7c.jpg";
            $body = $bookings['description'];
        }
        else if($bookings['serviceType']=="Event"){
            $imgUrl = "https://res.cloudinary.com/cake-lounge/image/upload/v1663143045/WilludaInn/samantha-gades-fIHozNWfcvs-unsplash_l6xerk.jpg";
            $body = $bookings['description'];
        }
        ?>
             <div class="card mb-3" style="max-width: 540px; background-color:#dbdbe9; margin-top:5px; margin-bottom:5px;border-radius:10px" >
                <div class="row g-0">
                    <div class="col-md-4">
                        <img
                            src=<?php echo $imgUrl ?>
                            alt="Trendy Pants and Shoes"
                            class="img-fluid rounded-start"
                            style="width: 150px; height: 150px;"
                        />
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-top:20px;"><?php echo $bookings['serviceType'] ?></h5>
                            <p class="card-text">
                            <?php echo $body ?>
                            </p>
                            <p><?php echo $bookings['total']?></p>
                            <p class="card-text" style="margin-top:20px;">
                        <a href="#" class="btn btn-primary">View</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <?php

                        if($bookings['description']==null){
                            echo '<a href="#" class="btn btn-info" style="margin-top:50px">Add review</a></p>';
                        }
                        else{
                            echo $bookings['description'];
                        }

                        ?>
                    </div>
                </div>
                </div>
           


      </div>
      <?php } ?>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div style="margin-left:5vw;">

        <div class="container">

        <div class="col-lg-6">

        <?php
                $Customer = new Customer();
                $customer = $Customer->getterAllById($id);

                    
                    ?>
                    <input type="hidden" id="id" value="<?= $customer['id'] ?>">
            

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name"
                value="<?php echo $customer['name']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" readonly
                value="<?php echo $customer['email']?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Residance</label>
                <input type="text" class="form-control" id="residance" aria-describedby="emailHelp" placeholder="Residance"
                value="<?php echo $customer['residance']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Number</label>
                <input type="text" class="form-control" id="number" placeholder="Number"
                value="<?php echo $customer['number']?>">
            </div>
            <button type="button" class="btn btn-primary" id="update">Update</button>
            <span style="margin-left:23vw"><button type="button" class="btn btn-danger" id="delete">Delete Account</button></span>
            </div>
            
            
</div>
    </div>
    
  </div>
</div>

                

        </section>

        </div>
        <!-- END / ACCOUNT -->


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
                                        <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#bad2dfd6d6d5faced2dfd6d5cecfc9d2d5cedfd694d9d5d7"><span class="__cf_email__" data-cfemail="cba3aea7a7a48bbfa3aea7a4bfbeb8a3a4bfaea7e5a8a4a6">[email&#160;protected]</span></a></p>
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
      <script type="text/javascript" src="validations/js/customer.js"></script>

    
</body>

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 08:12:47 GMT -->
</html>