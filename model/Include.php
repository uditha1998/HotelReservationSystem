<?php
include_once(dirname(__FILE__) . '/DBConnection.php');
include_once(dirname(__FILE__) . '/Activity.php');
include_once(dirname(__FILE__) . '/Attraction.php');
include_once(dirname(__FILE__) . '/upload.php');
include_once(dirname(__FILE__) . '/Service.php');
include_once(dirname(__FILE__) . '/Inquiries.php');
include_once(dirname(__FILE__) . '/Customer.php');
include_once(dirname(__FILE__) . '/Chat.php');
include_once(dirname(__FILE__) . '/Booking.php');
include_once(dirname(__FILE__) . '/Review.php');
include_once(dirname(__FILE__) . '/Inquiries.php');


include_once(dirname(__FILE__) . '/Helper.php');

function dd($data) {

    var_dump($data);

    exit();

}



function redirect($url) {



    $string = '<script type="text/javascript">';



    $string .= 'window.location = "' . $url . '"';



    $string .= '</script>';







    echo $string;



    exit();

}

