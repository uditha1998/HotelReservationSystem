<?php
include_once '../model/Review.php';

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

?>