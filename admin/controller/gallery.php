<?php

include_once(dirname(__FILE__) . '../../../model/include.php');



if (isset($_POST['create'])) {



    $GALLERY = new Gallery(NULL);


    $dir_dest = '../../upload/gallery/';

    $dir_dest_thumb = '../../upload/gallery/thumb';



    $HELPER = new Helper();

    $imgName = null;


    $img = $HELPER->randamId();


    $handle = new Upload($_FILES['image']);
    // (insert here)
    $img = $HELPER->randamId();


    if ($handle->uploaded) {

        $handle->file_new_name_body = $img;

        $handle->file_new_name_ext = 'jpg';

        $handle->process($dir_dest);
        if ($handle->processed) {
            $imgName = $handle->file_dst_name;
        }

        $handle->file_new_name_body = $img;
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->image_x = 720;
        $handle->image_y = 480;

        $handle->process($dir_dest_thumb);
        if ($handle->processed) {
            $imgName = $handle->file_dst_name;
            $handle->clean();
        }
    }


    $GALLERY->setAll($_POST['title'], $imgName, $_POST['description']);


    $result=$GALLERY->create();


    $result = ["status" => 'success'];

    echo json_encode($result);

    exit();
}



if (isset($_POST['update'])) {

    $dir_dest = '../../upload/gallery/';

    $dir_dest_thumb = '../../upload/gallery/thumb';



    $handle = new Upload($_FILES['image']);



    $imgName = null;



    if ($handle->uploaded) {



        $handle->file_new_name_body = TRUE;

        $handle->file_overwrite = TRUE;

        $handle->file_new_name_ext = FALSE;

        $handle->file_new_name_body = $_POST ["oldImageName"];




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

        $handle->image_x = 720;
        $handle->image_y = 480;



        $handle->Process($dir_dest_thumb);



        if ($handle->processed) {

            $info = getimagesize($handle->file_dst_pathname);

            $imgName = $handle->file_dst_name;
        }
    }



    $GALLERY = new Gallery();



    $GALLERY->setId($_POST['id']);

    $GALLERY->setAll($_POST['title'],  $_POST['oldImageName'], $_POST['description']);


    $GALLERY->update();





    $result = ["id" => $_POST['id']];

    echo json_encode($result);

    exit();
}
if(empty($_POST['option'])){
    $_POST['option']="";
}
if ($_POST['option'] == 'delete') {
    $GALLERY = new gallery();
    $ARR = $GALLERY->getterAllById($_POST['id']);

    unlink('../../upload/attraction/' . $ARR['image']);

    $result = $GALLERY->delete();





    if ($result) {

        $result = ["status" => "true"];

        header('Content-type: application/json');

        echo json_encode($result);
    }
}
?>

