<?php

include_once 'DBConnection.php';

class Booking extends DBconnection {

    private $id;
    private $serviceType;
    private $checkIn;
    private $checkOut;
    private $createdAt;
    private $date;
    private $quantity;
    private $status;
    private $customerId;
    private $customerName;
    private $customerEmail;
    private $customerTelephone;

    public function __construct() {
        parent::__construct();
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $this->createdAt = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `booking` (serviceType,checkIn,checkOut,date,quantity,customerId,customerName,customerEmail,customerTelephone)  VALUES  ('"
                . $this->serviceType . "','"
                . $this->checkIn . "','"
                . $this->checkOut . "', '"
                . $this->createdAt . "', '"
                . $this->quantity . "', '"
                . $this->customerId . "', '"
                . $this->customerName . "', '"
                . $this->customerEmail . "', '"
                . $this->customerTelephone . "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function confirm() {

        $sql = "UPDATE  `booking` SET "
                . "`status` = 1  "
                . "WHERE `id` = '" . $this->id . "'";


        $query = mysqli_query($this->connection, $sql);


        if ($query) {

            return $this->id;
        } else {

            return FALSE;
        }
    }
   public function reject() {

        $sql = "UPDATE  `booking` SET "
                . "`status` = 0  "
                . "WHERE `id` = '" . $this->id . "'";


        $query = mysqli_query($this->connection, $sql);


        if ($query) {

            return $this->id;
        } else {

            return FALSE;
        }
    }

    public function getterAllById($id) {

        if ($id) {

            $sql = "SELECT * FROM `booking` WHERE `id`=" . $id;

            $query = mysqli_query($this->connection, $sql);

            $result = $query->fetch_assoc();


            $this->id = $result['id'];
            $this->checkIn = $result['checkIn'];
            $this->checkOut = $result['checkOut'];
            $this->date = $result['date'];
            $this->quantity = $result['quantity'];
            $this->serviceType = $result['serviceType'];
            $this->status = $result['status'];
            $this->customerName = $result['customerName'];
            $this->customerEmail = $result['customerEmail'];







            return $result;
        }
    }
    public function update() {

        $sql = "UPDATE  `service` SET "
                . "`title` ='" . $this->title . "', "
                . "`image` ='" . $this->image . "', "
                . "`description` ='" . $this->description . "' "
                . "WHERE `id` = '" . $this->id . "'";


        $query = mysqli_query($this->connection, $sql);


        if ($query) {

            return $this->id;
        } else {

            return FALSE;
        }
    }
    

    public function getterAllByBookings() {



        $sql = "SELECT * FROM `booking` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

    //Setters

    public function setId($id) {
        $this->id = $id;
    }

    function setServiceType($serviceType) {
        $this->serviceType = $serviceType;
    }

    function setCheckIn($checkIn) {
        $this->checkIn = $checkIn;
    }

    function setCheckOut($checkOut) {
        $this->checkOut = $checkOut;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setCustomerId($customerId) {
        $this->customerId = $customerId;
    }

    function setCustomerName($customerName) {
        $this->customerName = $customerName;
    }

    function setCustomerEmail($customerEmail) {
        $this->customerEmail = $customerEmail;
    }

    function setCustomerTelephone($customerTelephone) {
        $this->customerTelephone = $customerTelephone;
    }

    // Getters


    function getId() {
        return $this->id;
    }

    function getServiceType() {
        return $this->serviceType;
    }

    function getCheckIn() {
        return $this->checkIn;
    }

    function getCheckOut() {
        return $this->checkOut;
    }

    function getDate() {
        return $this->date;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getStatus() {
        return $this->status;
    }

    function getCustomerId() {
        return $this->customerId;
    }

    function getCustomerName() {
        return $this->customerName;
    }

    function getCustomerEmail() {
        return $this->customerEmail;
    }

    function getCustomerTelephone() {
        return $this->customerTelephone;
    }




}

?>
