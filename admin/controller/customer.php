<?php

include_once(dirname(__FILE__) . '../../../model/include.php');


if ($_POST['option'] == 'unblock') {

    $Customer = new Customer();

    $result = $Customer->unblockCustomer($_POST['id']);

    if($result){

        $result = ["status" => "true"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
    else{
        $result = ["status" => "false"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}

if ($_POST['option'] == 'block') {

    $Customer = new Customer();

    $result = $Customer->blockCustomer($_POST['id']);

    if($result){

        $result = ["status" => "true"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
    else{
        $result = ["status" => "false"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}

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

if ($_POST['option'] == 'delete') {

    $Customer = new Customer();

    $Customer->setId($_POST['id']);

    $result = $Customer->deleteCustomer();

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

