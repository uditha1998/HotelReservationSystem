<?php
include_once '../model/Customer.php';

        if($_POST['option']=='logout'){

                $Customer = new Booking();
                $result = $Customer->logOut();

                if($result){
                     $result = ["status" => 'success'];

                    echo json_encode($result);
                }

            }

?>