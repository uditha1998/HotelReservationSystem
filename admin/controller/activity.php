<?php
include_once(dirname(__FILE__) . '../../../model/include.php');


if (isset($_POST['create'])) {

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
    
    $Activity->setActivity($name,$imgName,$location,$description,);
    
    if ($Activity->create()) {
    
        $result = ["status" => 'success'];
    
        echo json_encode($result);
    
    
    } else {
    
        $result = ["status" => 'fail'];
    
        echo json_encode($result);
    
    }
}
if (isset($_POST['update'])) {

    $dir_dest = '../../upload/activity/';


    $dir_dest_thumb = '../../upload/activity/thumb/';


    $handle = new Upload($_FILES['image']);




    $imgName = null;



    if ($handle->uploaded ) {

        $handle->image_resize = true;

        $handle->file_new_name_body = TRUE;

        $handle->file_overwrite = TRUE;

        $handle->file_new_name_ext = FALSE;

        $handle->image_ratio_crop = 'C';

        $handle->file_new_name_body = $_POST ["oldImageName"];

        $handle->image_x = 360;

        $handle->image_y = 231;


        $handle->Process($dir_dest);



        if ($handle->processed) {

            $info = getimagesize($handle->file_dst_pathname);

            $imgName = $handle->file_dst_name;
        }

        $handle->image_resize = true;

        $handle->file_new_name_body = TRUE;

        $handle->file_overwrite = TRUE;

        $handle->file_new_name_ext = FALSE;

        $handle->image_ratio_crop = 'C';

        $handle->file_new_name_body = $_POST ["oldImageName"];

        $handle->image_x = 100;

        $handle->image_y = 100;



        $handle->Process($dir_dest_thumb);



        if ($handle->processed) {

            $info = getimagesize($handle->file_dst_pathname);

            $imgName = $handle->file_dst_name;
        }

    }



    $Activity = new Activity();



    $Activity->setId($_POST['id']);

    $Activity->setActivity($_POST['name'], $_POST['oldImageName'],$_POST['location'],  $_POST['description']);


    $Activity->update();





    $result = ["id" => $_POST['id']];

    echo json_encode($result);

    exit();
}


if ($_POST['option'] == 'delete') {
    $Activity = new Activity();
    $ARR = $Activity->getterAllById($_POST['id']);

    unlink('../../upload/activity/' . $ARR['image']);

    $result = $Activity->delete();





    if ($result) {



        $result = ["status" => "true"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}
?>