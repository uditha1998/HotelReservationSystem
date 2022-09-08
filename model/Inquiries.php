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


}

?>