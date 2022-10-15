<?php

include_once(dirname(__FILE__) . '../../../model/include.php');

if ($_POST['option'] == 'deleteReview') {


    
    $Review = new Review();

    

    if ($Review->deleteReview($_POST['reviewId'])) {

        $result = ["status" => "success"];

        echo json_encode($result);
    }
    else{
        $result = ["status" => "fail"];

        echo json_encode($result);
    }
}

?>