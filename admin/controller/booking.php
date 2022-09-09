<?php

include_once(dirname(__FILE__) . '../../../model/include.php');

if ($_POST['option'] == 'confirm') {
    $Bookings = new Booking();
    $Bookings->setId($_POST['id']);
    $result = $Bookings->confirm();


    if ($result) {



        $result = ["status" => "true"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}
if ($_POST['option'] == 'reject') {
    
    $Bookings = new Booking();
    $Bookings->setId($_POST['id']);
    $result = $Bookings->reject();






    if ($result) {



        $result = ["status" => "true"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}