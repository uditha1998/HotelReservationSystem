<?php

include_once(dirname(__FILE__) . '../../../model/include.php');



if (isset($_POST['create'])) {



    $SERVICE = new Service(NULL);


    $dir_dest = '../../upload/service/';

    $dir_dest_thumb = '../../upload/service/thumb/';


    $HELPER = new Helper();

    $imgName = null;


    $handle = new Upload($_FILES['image']);
    // (insert here)
    $img = $HELPER->randamId();


    if ($handle->uploaded) {

        $handle->file_new_name_body = $img;
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->image_x = 360;
        $handle->image_y = 231;

        $handle->process($dir_dest);
        if ($handle->processed) {
            $imgName = $handle->file_dst_name;
        }

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



    $SERVICE->setAll($_POST['title'],$imgName, $_POST['description']);


    $SERVICE->create();



    $result = ["status" => 'success'];

    echo json_encode($result);

    exit();
}



if (isset($_POST['update'])) {

    $dir_dest = '../../upload/service/';


    $dir_dest_thumb = '../../upload/service/thumb/';


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



    $SERVICE = new Service();



    $SERVICE->setId($_POST['id']);

    $SERVICE->setAll($_POST['title'], $_POST['oldImageName'],  $_POST['description']);


    $SERVICE->update();





    $result = ["id" => $_POST['id']];

    echo json_encode($result);

    exit();
}




if ($_POST['option'] == 'delete') {
    $SERVICE = new Service();
    $ARR = $SERVICE->getterAllById($_POST['id']);

    unlink('../../upload/service/' . $ARR['image']);

    $result = $SERVICE->delete();





    if ($result) {



        $result = ["status" => "true"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}