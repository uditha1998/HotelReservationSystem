<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Home</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <?php
    include './include/link.php';
    ?>

</head>


<body>

    <?php
    session_start();
    include './include/preloader.php';
    ?>

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <?php
        include './include/header.php';
        ?>

        <?php
        include './include/banner.php';
        ?>



        <!-- CHECK AVAILABILITY -->
        <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2>CHECK AVAILABILITY</h2>
                        </div>
                        <div class="col-lg-9">
                            <form id="ajax-form-search-room" action="https://landing.engotheme.com/html/lotus/demo/search_step_2.php" method="post">
                                <div class="availability-form">
                                    <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                                    <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">

                                    <select class="awe-select" name="adults">
                                        <option>Adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <select class="awe-select" name="children">
                                        <option>Children</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <div class="vailability-submit">
                                        <button class="awe-btn awe-btn-13">FIND THE BEST RATE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CHECK AVAILABILITY -->

        <!-- ACCOMD ODATIONS -->
        <section class="section-accomd awe-parallax bg-14">
            <div class="container">
                <div class="accomd-modations">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accomd-modations-header">
                                <h2 class="heading">ROOMS & RATES</h2>
                                <img src="images/icon-accmod.png" alt="icon">
                                <p>Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="accomd-modations-content owl-single">

                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-1.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Luxury Room</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/days
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-2.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Family Room</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/days
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-3.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Couple Room</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/days
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-4.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Standard</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/day
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-5.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Standard</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/day
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->


                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-6.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Standard</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/day
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->


                                </div>

                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-6.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Luxury Room</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/days
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-5.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Family Room</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/days
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-4.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Couple Room</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/days
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-3.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Standard</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/day
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-2.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Standard</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/day
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-1.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Standard</a></h2>
                                                <p class="price">
                                                    <span class="amout">$320</span>/day
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- END / ACCOMD ODATIONS -->

        <!-- ABOUT -->
        <section class="section-home-about bg-white">
            <div class="container">
                <div class="home-about">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img">
                                <a href="#"><img src="images/home/about/img-1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="heading">ABOUT US</h2>
                                <span class="box-border"></span>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                                <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ABOUT -->

        <!-- OUR BEST -->
        <section class="section-our-best bg-white">
            <div class="container">

                <div class="our-best">
                    <div class="row">

                        <div class="col-md-6 col-md-push-6">
                            <div class="img">
                                <img src="images/home/ourbest/img-1.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-6 col-md-pull-6 ">
                            <div class="text">
                                <h2 class="heading">Our Best</h2>
                                <p>One of Catalina Island's best-loved hotels, Hotel Vista Del Mar is recognized as one of Avalon's leading hotels with gracious island hospitality, thoughtful amenities and distinctive .</p>
                                <ul>
                                    <li><img src="images/home/ourbest/icon-3.png" alt="icon">250 Best Rooms 5 Star</li>
                                    <li><img src="images/home/ourbest/icon-2.png" alt="icon">Wet Bar with Refrigerator</li>
                                    <li><img src="images/home/ourbest/icon-4.png" alt="icon">Double Whirlpool Jacuzzi Tub</li>
                                    <li><img src="images/home/ourbest/icon-5.png" alt="icon">Luxurious High Thread Count </li>
                                    <li><img src="images/home/ourbest/icon-1.png" alt="icon">Breakfast each morning</li>
                                    <li><img src="images/home/ourbest/icon-6.png" alt="icon">Ocean Views to lotus Hotel</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- END / OUR BEST -->

        <!-- HOME GUEST BOOK -->
        <div class="section-home-guestbook awe-parallax bg-13">
            <div class="container">
                <div class="home-guestbook">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="guestbook-content owl-single">
                                <!-- ITEM -->
                                <div class="guestbook-item">
                                    <div class="img">
                                        <img src="images/avatar/img-5.jpg" alt="">
                                    </div>

                                    <div class="text">
                                        <p>This is the only place to stay in Catalina! I have stayed in the cheaper hotels and they were fine, but this is just the icing on the cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your ocean view window and then to top it all off...</p>
                                        <span><strong>Seelentag</strong></span><br>
                                        <span>From Los Angeles, California</span>
                                    </div>
                                </div>
                                <!-- ITEM -->

                                <!-- ITEM -->
                                <div class="guestbook-item">
                                    <div class="img">
                                        <img src="images/avatar/img-5.jpg" alt="">
                                    </div>

                                    <div class="text">
                                        <p>This is the only place to stay in Catalina! I have stayed in the cheaper hotels and they were fine, but this is just the icing on the cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your ocean view window and then to top it all off...</p>
                                        <span><strong>Seelentag</strong></span><br>
                                        <span>From Los Angeles, California</span>
                                    </div>
                                </div>
                                <!-- ITEM -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- END / HOME GUEST BOOK -->

        <!-- HOME NEW -->
        <section class="section-event-news bg-white">
            <div class="container">

                <div class="event-news">
                    <div class="row">

                        <!-- EVENT -->
                        <div class="col-md-6">
                            <div class="event">
                                <h2 class="heading">EVENT &amp; DEAL</h2>
                                <span class="box-border w350"></span>

                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="event-slide owl-single">

                                            <div class="event-item">
                                                <div class="img hover-zoom">
                                                    <a href="#">
                                                        <img src="images/home/eventdeal/img-1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="event-item">
                                                <div class="img hover-zoom">
                                                    <a href="#">
                                                        <img src="images/home/eventdeal/img-1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-6">
                                        <div class="event-item">
                                            <div class="img">
                                                <a class="hover-zoom" href="#">
                                                    <img src="images/home/eventdeal/img-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="text">
                                                <div class="text-cn">
                                                    <h2>SAVE THE DATE</h2>
                                                    <span>BECCA &amp; ROBERT</span>
                                                    <a href="#" class="awe-btn awe-btn-12">VIEW MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-6">
                                        <div class="event-item">
                                            <div class="img">
                                                <a class="hover-zoom" href="#">
                                                    <img src="images/home/eventdeal/img-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="text">
                                                <div class="text-cn">
                                                    <h2>GO ON BEACH. lotus </h2>
                                                    <a href="#" class="awe-btn awe-btn-12">VIEW MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                </div>
                            </div>
                        </div>
                        <!-- END / EVENT -->

                        <!-- NEWS -->
                        <div class="col-md-6">
                            <div class="news">
                                <h2 class="heading">NEWS</h2>
                                <span class="box-border w350 space-5"></span>

                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="img">
                                                <a href="#"><img src="images/home/lotusnews/img-1.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <span class="date">21 / March</span>
                                                <h2><a href="#">UPDATE MENU FOOD IN lotus HOTEL</a></h2>
                                                <a href="#" class="read-more">[ Read More ]</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="img">
                                                <a href="#"><img src="images/home/lotusnews/img-2.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <span class="date">8 / March</span>
                                                <h2><a href="#">WEDDING DAY JONATHA &amp; JESSICA</a></h2>
                                                <a href="#" class="read-more">[ Read More ]</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="img">
                                                <a href="#"><img src="images/home/lotusnews/img-3.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <span class="date">16 / February</span>
                                                <h2><a href="#">THE BEST WEDDING GUIDE 2015</a></h2>
                                                <a href="#" class="read-more">[ Read More ]</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                                <a href="#" class="awe-btn awe-btn-default">VIEW MORE</a>

                            </div>

                        </div>
                        <!-- END / NEWS -->

                    </div>

                    <div class="hr"></div>

                </div>

            </div>
        </section>
        <!-- END / HOME NEW -->

        <!-- GALLERY -->
        <section class="section-gallery bg-white">

            <div class="gallery  no-padding">
                <h2 class="heading text-center">GALLERY</h2>

                <!-- FILTER -->
                <div class="gallery-cat text-center">
                    <ul class="list-inline">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".ground">HOTEL &amp; GROUND</a></li>
                        <li><a href="#" data-filter=".suite">ROOM/SUITE </a></li>
                        <li><a href="#" data-filter=".bathroom">BATHROOM</a></li>
                        <li><a href="#" data-filter=".dining">DINING</a></li>
                    </ul>
                </div>
                <!-- END / FILTER -->

                <!-- GALLERY CONTENT -->
                <div class="gallery-content hover-img">
                    <div class="row">
                        <div class="gallery-isotope col-6 pd-0">

                            <!-- ITEM SIZE -->
                            <div class="item-size"></div>
                            <!-- END / ITEM SIZE -->
                            <!-- ITEM -->

                            <div class="item-isotope suite dining ">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom suite">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope suite dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground suite dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground suite dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-7.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope bathroom suite dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-8.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope bathroom suite dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-9.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-10.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom suite ">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-11.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-12.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                        </div>
                    </div>

                    <div class="our-gallery text-center">
                        <a href="#" class="awe-btn awe-btn-default">BROWSE OUR GALLERY</a>
                    </div>

                </div>
                <!-- GALLERY CONTENT -->

            </div>
        </section>
        <!-- END / GALLERY -->

        <?php
        include './include/footer.php';
        ?>

    </div>
    <!-- END / PAGE WRAP -->

    <?php
    include './include/script.php';
    ?>

</body>


</html>