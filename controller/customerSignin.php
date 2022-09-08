<?php
include_once '../model/Customer.php';

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$residance = filter_var($_POST['residance'], FILTER_SANITIZE_STRING);
$number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$Customer = new Customer();

$Customer->setSigninDetails($name,$email,$residance,$number,$password);

if ($Customer->create()) {

    $result = ["status" => 'success'];

    echo json_encode($result);


} else {

    $result = ["status" => 'fail'];

    echo json_encode($result);

}
?>