<?php
include_once '../model/Customer.php';
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$Customer = new Customer();

$Customer->setLoginCredentials($email, $password);

if ($Customer->login()) {

    $result = ["status" => 'success'];

    echo json_encode($result);


} else {

    $result = ["status" => 'fail'];

    echo json_encode($result);

}
?>