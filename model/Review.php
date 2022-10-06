<?php

include_once 'DBConnection.php';


class Review extends DBconnection {

    private $id;
    private $cusId;
    private $bookingId;
    private $reviewTitle;
    private $reviewDescription;
    private $rating;

    public function __construct() {
        parent::__construct();
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

    public function getReviewbyBookingId($id){

        $sql = "SELECT * FROM `reviews` WHERE `bookingId`=" . $id;

        $query = mysqli_query($this->connection, $sql);

        $result = $query->fetch_assoc();

        if($result){

        $this->id = $result['id'];
        $this->cusId = $result['cusId'];
        $this->bookingId = $result['bookingId'];
        $this->reviewTitle = $result['reviewTitle'];
        $this->reviewDescription = $result['reviewDescription'];
        $this->rating = $result['rating'];
        }

        return $result;

    }


    // setters

    function setcusId($id){
        $this->cusId = $id;
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
?>