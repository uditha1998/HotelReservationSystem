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
                        <h2>CONTACT US</h2>
                        <p>We create lifestyle experiences, with a touch of warmth.</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- CONTACT -->
        <section class="section-contact">
            <div class="container">
                <div class="contact">
                    <div class="row">

                        <div class="col-md-6 col-lg-5">

                            <div class="text">
                                <h2>Contact US</h2>
                                <p>We started our journey drawing inspiration from our country’s most valuable spice, cinnamon. Just like its pleasant flavour and warm aroma, we infuse a rejuvenating spirit into every experience the world discovers with us.</p>

                                <p>Today, with each property we present a new Sri Lanka that houses a contemporary outlook and a genial atmosphere. Together, they put us on the world map beyond the boundaries of hospitality. They make us a group passionate about living the true essence of each moment. </p>
                                <ul>
                                    <li><i class="icon lotus-icon-location"></i> 225 Beach Street, Australian</li>
                                    <li><i class="icon lotus-icon-phone"></i> +61 2 6854 8496</li>
                                    <li><i class="icon fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e22213a3b3d26213a2b220e29">[email&#160;protected]</a>mail.com</li>
                                </ul>
                            </div>

                            <div class="contact-location">
                                <a class="btn-collapse" data-toggle="collapse" href="#location">OTHER LOCATION <span class="fa fa-angle-down"></span></a>
                                <div class="collapse" id="location">
                                    <div class="location-group">
                                        <h6>NORTH AMERICA</h6>
                                        <span>Caribbean, French West Indies</span>

                                        <!-- ITEM -->
                                        <div class="location-item" data-location="39.0926986,-94.5747324">
                                            <div class="img">
                                                <img src="images/contact/img-1.jpg" alt="">
                                                <i class="fa  fa-map-marker"></i>
                                            </div>
                                            <div class="text">
                                                <address>PO Box 4077, 2584 St Martin, CEDEX, French West Indies</address>
                                                <p>
                                                    Tel: 858 634 8975 <br>
                                                    Fax: +1 212 854 7039
                                                </p>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-6 col-lg-6 col-lg-offset-1">
                            <div class="contact-form">
                                <form id="send-contact-form" method="POST">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="text" class="field-text" name="name" placeholder="Name" id="name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text" name="email" placeholder="Email" id="email">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text" name="number" placeholder="Phone" id="number">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="field-text" name="subject" placeholder="Subject" id="subject">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea cols="30" rows="10" name="message" class="field-textarea" placeholder="Write what do you want" id="message"></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="awe-btn awe-btn-13" id="sendInquiry">SEND</button>
                                        </div>
                                    </div>
                                    <div id="contact-content"></div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END / CONTACT -->

        <?php
        include './include/footer.php';
        ?>

    </div>
   
    <?php
    include './include/script.php';
    ?>


<script type="text/javascript" src="validations/js/sendInquiries.js"></script>
<script src="include/plugin/sweetalert/sweetalert/sweetalert.min.js"></script>
</body>



</html>