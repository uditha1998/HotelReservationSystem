<?php
if(isset($_SESSION['id'])){
   $logoutbtn = 'LogOut';
   $loginbtn = '';
   $registerbtn = '';
}else{
    $logoutbtn = '';
    $loginbtn = 'Login';
    $registerbtn = 'register to claim special discounts';
}
?>
<!-- HEADER -->
<header id="header">

<!-- HEADER TOP -->
<div class="header_top">
    <div class="container">
        <div class="header_left float-left">
            <span><i class="lotus-icon-cloud"></i> 18 °C</span>
            <span><i class="lotus-icon-location"></i> 225 Beach Street, Australian</span>
            <span><i class="lotus-icon-phone"></i> 1-548-854-8898</span>
        </div>
        <div class="header_right float-right">

            <span class="login-register">
                <a type="button" href="#" id="logout"><?php echo $logoutbtn?></a>
                <a href="login.php"><?php echo $loginbtn?></a>
                <a href="register.php"><?php echo $registerbtn?></a>
                
            </span>


        </div>
    </div>
</div>
<!-- END / HEADER TOP -->

<!-- HEADER LOGO & MENU -->
<div class="header_content" id="header_content">

    <div class="container">
        <!-- HEADER LOGO -->
        <div class="header_logo">
            <a href="#"><img src="images/logo-header.png" alt=""></a>
        </div>
        <!-- END / HEADER LOGO -->

        <!-- HEADER MENU -->
        <nav class="header_menu">
            <ul class="menu">
                <li class="current-menu-item">
                    <a href="index.php">Home </a>
                    
                </li>
                <li>
                    <a href="#">About</a>
                </li>

                <li>
                    <a href="services.php">services</a>
                   
                </li>
              <li>
                    <a href="#">Activity</a>
                   
                </li>
                <li>
                    <a href="#">Attraction</a>
                   
                </li>
                <li>
                    <a href="#">Booking</a>
                    
                </li>
               <li>
                    <a href="#">Gallery</a>
                    
                </li>
                <li>
                   
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <!-- END / HEADER MENU -->

        <!-- MENU BAR -->
        <span class="menu-bars">
            <span></span>
        </span>
        <!-- END / MENU BAR -->

    </div>
</div>
<!-- END / HEADER LOGO & MENU -->
<script type="text/javascript" src="validations/js/logout.js"></script>


</header>
<!-- END / HEADER -->