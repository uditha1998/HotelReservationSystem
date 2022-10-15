<?php

use LDAP\Result;

include_once '../model/Review.php';
include_once '../model/Booking.php';

//delete a review

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


    $id = $_POST['id'];

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

if($_POST['option']=='getReviewDetails'){

//     $bookingId = $_POST['bookingId'];
    $id = $_POST['id'];

    $Reviews = new Review();
    $reviewDetails = $Reviews->getReviewById($id);

//     $ = $result['cusId'];
//     // $this->serviceType = $result['serviceType'];
//     $this->bookingId = $result['bookingId'];
//     $this->reviewTitle = $result['reviewTitle'];
//     $this->reviewDescription = $result['reviewDescription'];
//     $this->rating = $result['rating'];

if($reviewDetails){

    $result = ["status" => 'success'];

    echo json_encode($result);
}
else{
    $result = ["status" => 'fail'];

    echo json_encode($result);
}

}


if($_POST['option']=='editReview'){


    $id = $_POST['reviewId'];
    $reviewTitle = $_POST['reviewTitle'];
    $reviewDescription = $_POST['reviewDescription'];
    $rating = $_POST['rating'];

    $Review = new Review();

    $review = $Review->editReview($id,$reviewTitle,$reviewDescription,$rating);

    if($review){

        $result = ["status" => 'success'];

        echo json_encode($result);
    }
    else{
        $result = ["status" => 'fail'];

        echo json_encode($result);
    }

    
}

if($_POST['option']=='deleteReview'){


    $id = $_POST['reviewId'];

    $Review = new Review();

    $review = $Review->deleteReview($id);

    if($review){

        $result = ["status" => 'success'];

        echo json_encode($result);
    }
    else{
        $result = ["status" => 'fail'];

        echo json_encode($result);
    }

    
}

?>