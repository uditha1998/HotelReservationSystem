<?php

include_once 'DBConnection.php';

class Customer extends DBconnection {

    private $id;
    private $customer_id;
    //private $agent_id;
    private $message;
    private $sent_time;
    private $send_by;

    public function __construct() {
        parent::__construct();
    }

    public function create() {
  
            date_default_timezone_set('Asia/Colombo');
            $this->sent_Time = date('Y-m-d H:i:s');
            $sql = "INSERT INTO `customer` (customer_id,message,sent_time)  VALUES  ('" .$this->customer_id. "', '" .$this->message. "','" .$this->sent_time."')";

            if (mysqli_query($this->connection, $sql)) {

                return TRUE;
            } else {
                return FALSE;
            }
       
    }
        public function getAllChats() {
    
    
    
            $sql = "SELECT * FROM `chat` ";
    
            $query = mysqli_query($this->connection, $sql);
    
            $array_res = array();
            while ($row = $query->fetch_assoc()) {
    
                array_push($array_res, $row);
            }
            return $array_res;
        }

      public function getAllChatsByCustomer() {
    
    
    
            $sql = "SELECT * FROM `chat` where customer_id=".$this->customer_id;
    
            $query = mysqli_query($this->connection, $sql);
    
            $array_res = array();
            while ($row = $query->fetch_assoc()) {
    
                array_push($array_res, $row);
            }
            return $array_res;
        }

 

}

?>
