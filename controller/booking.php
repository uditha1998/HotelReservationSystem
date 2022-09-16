<?php
include_once '../model/Booking.php';

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$numberOfPersons = $_POST['numberOfPersons'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$customerId = $_POST['customerId'];
$serviceType = $_POST['serviceType'];

$Booking = new Booking();

$Booking->setServiceType($serviceType);
$Booking->setCheckIn($checkin);
$Booking->setCheckOut($checkout);
$Booking->setQuantity($numberOfPersons);
$Booking->setCustomerId($customerId);
$Booking->setCustomerName($name);
$Booking->setCustomerEmail($email);
$Booking->setCustomerTelephone($number);

if($Booking->create()){

    $result = ["status" => 'success'];

    echo json_encode($result);
    
}
else{

    $result = ["status" => 'faillll'];

    echo json_encode($result);
}

?>