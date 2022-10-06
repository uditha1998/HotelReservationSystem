<?php
include_once '../model/Review.php';
include_once '../model/Booking.php';

if($_POST['option']=='addReview'){


    $cusId = $_POST['cusId'];
    $bookingId = $_POST['bookingId'];
    $reviewTitle = $_POST['reviewTitle'];
    $reviewDescription = $_POST['reviewDescription'];
    $rating = $_POST['rating'];

    $Review = new Review();

    $Review->setcusId($cusId);
    $Review->setbookingId($bookingId);
    $Review->setreviewTitle($reviewTitle);
    $Review->setreviewDescription($reviewDescription);
    $Review->setRating($rating);

    if($Review->addReview()){

        $result = ["status" => 'success'];

        echo json_encode($result);
    }
    else{
        $result = ["status" => 'fail'];

        echo json_encode($result);
    }

    
}

if($_POST['option']=='getBookingDetails'){


    $bookingId = $_POST['bookingId'];

    $Booking = new Booking();

    $bookingDetails = $Booking->getBookingById($bookingId);

    if($bookingDetails){

        $result = $bookingDetails;

        echo json_encode($result);
    }
    else{
        $result = ["status" => 'fail'];

        echo json_encode($result);
    }

    
}

?>