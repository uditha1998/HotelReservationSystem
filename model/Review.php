<?php

include_once 'DBConnection.php';


class Review extends DBconnection {

    private $id;
    private $cusId;
    private $serviceType;
    private $bookingId;
    private $reviewTitle;
    private $reviewDescription;
    private $rating;

    public function __construct() {
        parent::__construct();
    }

    public function deleteReview($id){

        $sql = 'DELETE FROM `reviews` WHERE id="' . $id . '"';

        return $query = mysqli_query($this->connection, $sql);
    }

    public function addReview(){

        $sql = "INSERT INTO `reviews`(`cusId`, `bookingId`, `reviewTitle`, `reviewDescription`, `rating`) VALUES ('"
                . $this->cusId . "','"
                . $this->bookingId . "','"
                . $this->reviewTitle . "','"
                . $this->reviewDescription . "', '"
                . $this->rating . "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function editReview($id,$reviewTitle,$reviewDescription,$rating){

        $sql = "UPDATE `reviews` SET `reviewTitle` ='" . $reviewTitle . "', `reviewDescription` = '" . $reviewDescription . "', `rating` = '" . $rating . "' WHERE `id`='" . $id . "'";

        $result = mysqli_query($this->connection, $sql);

        if ($result) {

            return TRUE;
        } else {

            return FALSE;
        }

    }
    public function getReviewbyBookingId($id){

        $sql = "SELECT * FROM `reviews` WHERE `bookingId`=" . $id;

        $query = mysqli_query($this->connection, $sql);

        $result = $query->fetch_assoc();

        if($result){

        $this->id = $result['id'];
        $this->cusId = $result['cusId'];
        // $this->serviceType = $result['serviceType'];
        $this->bookingId = $result['bookingId'];
        $this->reviewTitle = $result['reviewTitle'];
        $this->reviewDescription = $result['reviewDescription'];
        $this->rating = $result['rating'];
        }

        return $result;

    }

    public function getReviewById($id) {

        $sql = "SELECT * FROM `reviews` WHERE `id`=" . $id;
        $query = mysqli_query($this->connection, $sql);
        $result = $query->fetch_assoc();

        if($result){

            $this->id = $result['id'];
            $this->cusId = $result['cusId'];
            // $this->serviceType = $result['serviceType'];
            $this->bookingId = $result['bookingId'];
            $this->reviewTitle = $result['reviewTitle'];
            $this->reviewDescription = $result['reviewDescription'];
            $this->rating = $result['rating'];
            }
    
            return $result;
    }

    public function getAllReviews(){
        $sql = "SELECT * FROM `reviews` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }


    // setters

    function setcusId($id){
        $this->cusId = $id;
    }
    function setserviceType($id){
        $this->serviceType = $id;
    }
    function setbookingId($id){
        $this->bookingId = $id;
    }
    function setreviewTitle($title){
        $this->reviewTitle = $title;
    }
    function setreviewDescription($description){
        $this->reviewDescription = $description;
    }
    function setRating($rating){
        $this->rating = $rating;
    }

  
}

