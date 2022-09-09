<?php
include_once '../../model/upload.php';
include_once '../../model/Activity.php';
include_once '../../model/Helper.php';


var_dump($_FILES['imageaa']);
 

$name = $_POST['name'];
$location = $_POST['location'];
$description = $_POST['description'];

$Activity = new Activity();

   //Image Path

    $dir_dest = '../../upload/activity/';

    $dir_dest_thumb = '../../upload/activity/thumb/';


    $HELPER = new Helper();

    $imgName = null;


    $img = $HELPER->randamId();

    //Uploader class used to upload images
    $handle = new Upload($_FILES['imageaa']);
    // (insert here)
    $img = $HELPER->randamId();


    if ($handle->uploaded) {

        //Main Image Creation

        $handle->file_new_name_body = $img;
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->image_x = 720;
        $handle->image_y = 480;

        $handle->process($dir_dest);
        if ($handle->processed) {
            $imgName = $handle->file_dst_name;
        }

        //Thumnail Image Creation

        $handle->file_new_name_body = $img;
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->image_x = 100;
        $handle->image_y = 100;

        $handle->process($dir_dest_thumb);
        if ($handle->processed) {
            $imgName = $handle->file_dst_name;
            $handle->clean();
        }
    }

$Activity->setActivity($name,$location,$description,$imgName);

if ($Activity->create()) {

    $result = ["status" => 'success'];

    echo json_encode($result);


} else {

    $result = ["status" => 'fail'];

    echo json_encode($result);

}


?>