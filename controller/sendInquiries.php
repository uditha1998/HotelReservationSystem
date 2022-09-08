<?php
include_once '../model/Inquiries.php';

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$messages = $_POST['message'];

$Inquiries = new Inquiries();


$Inquiries->setInquiry($name,$email,$number,$subject,$messages);

if($Inquiries->sendInquiry()){

    $result = ["status" => 'success'];

    echo json_encode($result);
    
}
else{

    $result = ["status" => 'fail'];

    echo json_encode($result);
}


?>