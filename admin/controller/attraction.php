<?php
include_once '../../model/Attraction.php';


$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];

$Attraction = new Attraction();

$Attraction->setAttraction($name,$description,$image);

if ($Attraction->create()) {

    $result = ["status" => 'success'];

    echo json_encode($result);


} else {

    $result = ["status" => 'fail'];

    echo json_encode($result);

}
?>