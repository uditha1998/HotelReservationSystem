<?php

include_once(dirname(__FILE__) . '../../../model/include.php');

if ($_POST['action'] == "create") {

    $customer_id = $_POST['customer_id'];
    $message = $_POST['message'];


    $CHAT = new Chat();
    $CHAT->setCustomer_id($customer_id);
    $CHAT->setMessage($message);
    $CHAT->create();
}
if ($_POST['action'] == "append-chat") {




    $CHAT = new Chat();
    $CHAT->getAllChats();
    echo json_encode($CHAT->getAllChats());
}
?>