
<?php

if(isset($_SESSION['id'])){

   $profileBtn = 'Profile';
   $loginbtn = '';
   $registerbtn = '';

}
else{

    $profileBtn = '';
    $loginbtn = 'Login';
    $registerbtn = 'register to claim special discounts';

}

$apiKey = "3165db4e8f07bee4f2d90aab6ae05729";
$cityId = "1243936";
$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

if($data && $currentTime){

    $time = $currentTime;
    $description = $data->weather[0]->description;
    $humidity = $data->main->humidity;
    $wind = $data->wind->speed;
    $icon = $data->weather[0]->icon;
    $tempMax = $data->main->temp_max;
    $tempMin = $data->main->temp_min;
    $city = $data->name;

}
else{
    $time = "--";
    $description = "--";
    $humidity = "--";
    $wind = "--";
    $icon = "--";
    $tempMax = "--";
    $tempMin = "--";
    $city = "--";
}

?>

<!-- HEADER -->
<header id="header">

<!-- HEADER TOP -->
<div class="header_top">
    <div class="container-fluid">
        <div class="header_left float-left">
            <span><?php echo date("l g:i a", $time); ?></span>
            <span><?php echo date("jS F, Y",$time); ?></span>
            <span><?php echo ucwords($description); ?></span>

            <span>Humidity: <?php echo $humidity; ?> %</span>
            <span>Wind: <?php echo $wind; ?> km/h</span>
            <img src="https://openweathermap.org/img/w/<?php echo $icon; ?>.png"/>
            <span><i class="lotus-icon-cloud"></i> <?php echo $tempMax; ?>°C</span>
            <span><i class="lotus-icon-cloud"></i> <?php echo $tempMin; ?>°C</span>
            <span><i class="lotus-icon-location"></i> 110 Awissawella Rd, <?php echo $city; ?></span>
            <span><i class="lotus-icon-phone"></i> 11 2 151 582</span>
        </div>
        <div class="header_right float-right">

            <span class="login-register">
                <a href="login.php"><?php echo $loginbtn?></a>
                <a href="register.php"><?php echo $registerbtn?></a>
                <a type="button" href="profile.php" ><?php echo $profileBtn?></a>
                
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
            <a href="#"><img src="https://res.cloudinary.com/cake-lounge/image/upload/v1665477312/WilludaInn/Luxury_Hotel_n5ggfz.png" alt="logo"></a>
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
                    <a href="booking.php">Booking</a>
                    
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