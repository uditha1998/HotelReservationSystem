<?php

include_once 'DBConnection.php';

class Inquiries extends DBconnection {

    private $id;
    private $name;
    private $email;
    private $number;
    private $subject;
    private $message;
    private $created_at;
    private $status;

    public function __construct() {
        parent::__construct();
    }

    public function sendInquiry(){

        date_default_timezone_set('Asia/Colombo');
        $this->createdAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `inquiries` (name,email,number,subject,message,created_at)  
        VALUES  ('" .$this->name. "', '" .$this->email. "','" .$this->number. "','" .$this->subject. "', '" .$this->message. "', '" .$this->createdAt."')";

        if (mysqli_query($this->connection, $sql)) {
            return TRUE;
        } else {
            return FALSE;
        }

    }


    //setters
    public function setInquiry($name,$email,$number,$subject,$message){

        $this->name = $name;
        $this->email = $email;
        $this->number = $number;
        $this->subject = $subject;
        $this->message = $message;

    }
    public function deleteInquiry($id){


        $sql = 'DELETE FROM `inquiries` WHERE id="' . $id . '"';

        if(mysqli_query($this->connection, $sql)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function getAllById($id){

        if($id){

            $sql = "SELECT * FROM `inquiries` where `id`=". $id;

            $query = mysqli_query($this->connection,$sql);

            $result = $query->fetch_assoc();

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->email = $result['email'];
            $this->number = $result['number'];
            $this->subject = $result['subject'];
            $this->message = $result['message'];
            $this->created_at = $result['created_at'];
            $this->status = $result['status'];

            return $result;
        }
    }

    public function markResponse($id){

        $sql ="UPDATE `inquiries` SET `status` ='" . 1 . "' WHERE `id`='" .$id. "'";

        $result = mysqli_query($this->connection,$sql);

        if($result){
            return TRUE;
        }else{
            return FALSE;
        }
    }


}

?>