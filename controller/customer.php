<?php

include_once '../model/Include.php';

if ($_POST['option'] == 'update') {

    $Customer = new Customer();

    $result = $Customer->updateCustomer($_POST['id'],$_POST['name'],$_POST['residance'],$_POST['number']);

    if($result){

        $result = ["status" => "success"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
    else{
        $result = ["status" => "fail"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}
if ($_POST['option'] == 'logout') {

    $Customer = new Customer();

    $result = $Customer->logOut();

    if($result){

        $result = ["status" => "success"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
    else{
        $result = ["status" => "fail"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}
?>