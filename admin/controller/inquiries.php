<?php

include_once(dirname(__FILE__) . '../../../model/include.php');


if ($_POST['option'] == 'update-inquiry') {

$Inquiries = new Inquiries();

$result = $Inquiries->updateInquiry($_POST['id']);

if($result){

    $result = ["status" => "true"];

    echo json_encode($result);
}
else{
    $result = ["status" => "false"];

    echo json_encode($result);
}
}

?>