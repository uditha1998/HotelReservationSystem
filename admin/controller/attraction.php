<?php
include_once(dirname(__FILE__) . '../../../model/include.php');


if (isset($_POST['create'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];

    $Attraction = new Attraction();
    
       //Image Path
    
        $dir_dest = '../../upload/attraction/';
    
        $dir_dest_thumb = '../../upload/attraction/thumb/';
    
    
        $HELPER = new Helper();
    
        $imgName = null;
    
    
        $img = $HELPER->randamId();
    
        //Uploader class used to upload images
        $handle = new Upload($_FILES['image']);
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
    
    $Attraction->setAttraction($name,$imgName,$description);
    
    if ($Attraction->create()) {
    
        $result = ["status" => 'success'];
    
        echo json_encode($result);
    
    
    } else {
    
        $result = ["status" => 'fail'];
    
        echo json_encode($result);
    
    }
}

if (isset($_POST['update'])) {

    $dir_dest = '../../upload/attraction/';


    $dir_dest_thumb = '../../upload/attraction/thumb/';


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



    $Attraction = new Attraction();



    $Attraction->setId($_POST['id']);

    $Attraction->setAttraction($_POST['name'], $_POST['oldImageName'],  $_POST['description']);


    $Attraction->update();





    $result = ["id" => $_POST['id']];

    echo json_encode($result);

    exit();
}

if(empty($_POST['option'])){
    $_POST['option']="";
}
if ($_POST['option'] == 'delete') {
    $Attraction = new Attraction();
    $ARR = $Attraction->getterAllById($_POST['id']);

    unlink('../../upload/attraction/' . $ARR['image']);

    $result = $Attraction->delete();





    if ($result) {

        $result = ["status" => "true"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}
?>

